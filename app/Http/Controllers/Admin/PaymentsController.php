<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PaymentsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Payment\BulkDestroyPayment;
use App\Http\Requests\Admin\Payment\DestroyPayment;
use App\Http\Requests\Admin\Payment\IndexPayment;
use App\Http\Requests\Admin\Payment\StorePayment;
use App\Http\Requests\Admin\Payment\UpdatePayment;
use App\Models\Payment;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\View\View;

class PaymentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPayment $request
     * @return array|Factory|View
     */
    public function index(IndexPayment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Payment::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'user_id', 'order_id', 'teacher_id', 'name', 'phone', 'total', 'discount', 'payment', 'provider', 'provider_id'],

            // set columns to searchIn
            ['id', 'name', 'phone', 'payment', 'provider', 'provider_id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.payment.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.payment.create');

        return view('admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePayment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePayment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Payment
        $payment = Payment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/payments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/payments');
    }

    /**
     * Display the specified resource.
     *
     * @param Payment $payment
     * @throws AuthorizationException
     * @return void
     */
    public function show(Payment $payment)
    {
        $this->authorize('admin.payment.show', $payment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Payment $payment
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Payment $payment)
    {
        $this->authorize('admin.payment.edit', $payment);


        return view('admin.payment.edit', [
            'payment' => $payment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePayment $request
     * @param Payment $payment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePayment $request, Payment $payment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Payment
        $payment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/payments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/payments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPayment $request
     * @param Payment $payment
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPayment $request, Payment $payment)
    {
        $payment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPayment $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPayment $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Payment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    /**
     * Export entities
     *
     * @return BinaryFileResponse|null
     */
    public function export(): ?BinaryFileResponse
    {
        return Excel::download(app(PaymentsExport::class), 'payments.xlsx');
    }
}
