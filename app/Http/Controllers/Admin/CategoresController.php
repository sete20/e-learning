<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CategoresExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categore\BulkDestroyCategore;
use App\Http\Requests\Admin\Categore\DestroyCategore;
use App\Http\Requests\Admin\Categore\IndexCategore;
use App\Http\Requests\Admin\Categore\StoreCategore;
use App\Http\Requests\Admin\Categore\UpdateCategore;
use App\Models\Categore;
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

class CategoresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCategore $request
     * @return array|Factory|View
     */
    public function index(IndexCategore $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Categore::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'is_published', 'seo_description', 'seo_keywords', 'seo_title'],

            // set columns to searchIn
            ['id', 'name', 'slug', 'seo_description', 'seo_keywords', 'seo_title']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.categore.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.categore.create');

        return view('admin.categore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategore $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCategore $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Categore
        $categore = Categore::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/categores'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/categores');
    }

    /**
     * Display the specified resource.
     *
     * @param Categore $categore
     * @throws AuthorizationException
     * @return void
     */
    public function show(Categore $categore)
    {
        $this->authorize('admin.categore.show', $categore);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Categore $categore
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Categore $categore)
    {
        $this->authorize('admin.categore.edit', $categore);


        return view('admin.categore.edit', [
            'categore' => $categore,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategore $request
     * @param Categore $categore
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCategore $request, Categore $categore)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Categore
        $categore->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/categores'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/categores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCategore $request
     * @param Categore $categore
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCategore $request, Categore $categore)
    {
        $categore->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCategore $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCategore $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Categore::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(CategoresExport::class), 'categores.xlsx');
    }
}
