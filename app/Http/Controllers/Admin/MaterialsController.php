<?php

namespace App\Http\Controllers\Admin;

use App\Exports\MaterialsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Material\BulkDestroyMaterial;
use App\Http\Requests\Admin\Material\DestroyMaterial;
use App\Http\Requests\Admin\Material\IndexMaterial;
use App\Http\Requests\Admin\Material\StoreMaterial;
use App\Http\Requests\Admin\Material\UpdateMaterial;
use App\Models\Material;
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

class MaterialsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMaterial $request
     * @return array|Factory|View
     */
    public function index(IndexMaterial $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Material::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'image'],

            // set columns to searchIn
            ['id', 'name']
        );

        foreach ($data as $item) {
            $item->holder = image($item->image);
            $item->image = imageUrl($item->image);
        }

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.material.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.material.create');

        return view('admin.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMaterial $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMaterial $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Material
        $material = Material::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/materials'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/materials');
    }

    /**
     * Display the specified resource.
     *
     * @param Material $material
     * @throws AuthorizationException
     * @return void
     */
    public function show(Material $material)
    {
        $this->authorize('admin.material.show', $material);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Material $material
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Material $material)
    {
        $this->authorize('admin.material.edit', $material);


        return view('admin.material.edit', [
            'material' => $material,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMaterial $request
     * @param Material $material
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMaterial $request, Material $material)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Material
        $material->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/materials'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMaterial $request
     * @param Material $material
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMaterial $request, Material $material)
    {
        $material->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMaterial $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMaterial $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Material::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(MaterialsExport::class), 'materials.xlsx');
    }
}
