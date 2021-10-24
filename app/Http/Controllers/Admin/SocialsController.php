<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SocialsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Social\BulkDestroySocial;
use App\Http\Requests\Admin\Social\DestroySocial;
use App\Http\Requests\Admin\Social\IndexSocial;
use App\Http\Requests\Admin\Social\StoreSocial;
use App\Http\Requests\Admin\Social\UpdateSocial;
use App\Models\Social;
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

class SocialsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSocial $request
     * @return array|Factory|View
     */
    public function index(IndexSocial $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Social::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'url'],

            // set columns to searchIn
            ['id', 'name', 'url']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.social.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.social.create');

        return view('admin.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSocial $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSocial $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Social
        $social = Social::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/socials'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/socials');
    }

    /**
     * Display the specified resource.
     *
     * @param Social $social
     * @throws AuthorizationException
     * @return void
     */
    public function show(Social $social)
    {
        $this->authorize('admin.social.show', $social);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Social $social
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Social $social)
    {
        $this->authorize('admin.social.edit', $social);


        return view('admin.social.edit', [
            'social' => $social,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSocial $request
     * @param Social $social
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSocial $request, Social $social)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Social
        $social->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/socials'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/socials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySocial $request
     * @param Social $social
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySocial $request, Social $social)
    {
        $social->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySocial $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySocial $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Social::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(SocialsExport::class), 'socials.xlsx');
    }
}
