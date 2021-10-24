<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TestsSolvesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestsSolf\BulkDestroyTestsSolf;
use App\Http\Requests\Admin\TestsSolf\DestroyTestsSolf;
use App\Http\Requests\Admin\TestsSolf\IndexTestsSolf;
use App\Http\Requests\Admin\TestsSolf\StoreTestsSolf;
use App\Http\Requests\Admin\TestsSolf\UpdateTestsSolf;
use App\Models\TestsSolf;
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

class TestsSolvesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTestsSolf $request
     * @return array|Factory|View
     */
    public function index(IndexTestsSolf $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(TestsSolf::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'test_id', 'user_id', 'grade'],

            // set columns to searchIn
            ['id', 'solve']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.tests-solf.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.tests-solf.create');

        return view('admin.tests-solf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTestsSolf $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTestsSolf $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the TestsSolf
        $testsSolf = TestsSolf::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tests-solves'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tests-solves');
    }

    /**
     * Display the specified resource.
     *
     * @param TestsSolf $testsSolf
     * @throws AuthorizationException
     * @return void
     */
    public function show(TestsSolf $testsSolf)
    {
        $this->authorize('admin.tests-solf.show', $testsSolf);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TestsSolf $testsSolf
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(TestsSolf $testsSolf)
    {
        $this->authorize('admin.tests-solf.edit', $testsSolf);


        return view('admin.tests-solf.edit', [
            'testsSolf' => $testsSolf,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTestsSolf $request
     * @param TestsSolf $testsSolf
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTestsSolf $request, TestsSolf $testsSolf)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values TestsSolf
        $testsSolf->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tests-solves'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/tests-solves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTestsSolf $request
     * @param TestsSolf $testsSolf
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTestsSolf $request, TestsSolf $testsSolf)
    {
        $testsSolf->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTestsSolf $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTestsSolf $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    TestsSolf::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(TestsSolvesExport::class), 'testsSolves.xlsx');
    }
}
