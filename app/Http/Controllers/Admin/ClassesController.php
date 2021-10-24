<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ClassesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Classes\BulkDestroyClass;
use App\Http\Requests\Admin\Classes\DestroyClass;
use App\Http\Requests\Admin\Classes\IndexClass;
use App\Http\Requests\Admin\Classes\StoreClass;
use App\Http\Requests\Admin\Classes\UpdateClass;
use App\Models\Classes;
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

class ClassesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexClass $request
     * @return array|Factory|View
     */
    public function index(IndexClass $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Classes::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.class.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.class.create');

        return view('admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClass $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreClass $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Class
        $class = Classes::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/classes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/classes');
    }

    /**
     * Display the specified resource.
     *
     * @param Class $class
     * @throws AuthorizationException
     * @return void
     */
    public function show(Classes $class)
    {
        $this->authorize('admin.class.show', $class);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Classes $class
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Classes $class)
    {
        $this->authorize('admin.class.edit', $class);


        return view('admin.class.edit', [
            'class' => $class,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClass $request
     * @param Classes $class
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateClass $request, Classes $class)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Class
        $class->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/classes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyClass $request
     * @param Classes $class
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyClass $request, Classes $class)
    {
        $class->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyClass $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyClass $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Classes::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(ClassesExport::class), 'classes.xlsx');
    }
}
