<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PhotosExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\BulkDestroyPhoto;
use App\Http\Requests\Admin\Photo\DestroyPhoto;
use App\Http\Requests\Admin\Photo\IndexPhoto;
use App\Http\Requests\Admin\Photo\StorePhoto;
use App\Http\Requests\Admin\Photo\UpdatePhoto;
use App\Models\Photo;
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
use Intervention\Image\Exception\NotReadableException;
use Image;
use Symfony\Component\HttpFoundation\Request;
class PhotosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPhoto $request
     * @return array|Factory|View
     */
    public function index(IndexPhoto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Photo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name'],

            // set columns to searchIn
            ['id', 'name', 'image']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.photo.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.photo.create');

        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePhoto $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(request $request)
    {
     
        $image = $request->image;
        if ($image) {

            $image_one_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // $location = 'images/' . $image_one_name;
            $path = $image->store('public/images');
            //  $data['photo_name'] = public_path('media/' . $image_one_name);
            Photo::create([
                'image' => $image_one_name,
                'path' => $path,
                'name'=>$request->name
            ]);
        // Store the Photo

        if ($request->ajax()) {
            return ['redirect' => url('admin/photos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param Photo $photo
     * @throws AuthorizationException
     * @return void
     */
    public function show(Photo $photo)
    {
        $this->authorize('admin.photo.show', $photo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Photo $photo
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Photo $photo)
    {
        $this->authorize('admin.photo.edit', $photo);


        return view('admin.photo.edit', [
            'photo' => $photo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePhoto $request
     * @param Photo $photo
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePhoto $request, Photo $photo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Photo
        $photo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/photos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPhoto $request
     * @param Photo $photo
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPhoto $request, Photo $photo)
    {
        $photo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPhoto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPhoto $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Photo::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(PhotosExport::class), 'photos.xlsx');
    }
}
