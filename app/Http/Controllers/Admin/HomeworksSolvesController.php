<?php

namespace App\Http\Controllers\Admin;

use App\Exports\HomeworksSolvesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeworksSolf\BulkDestroyHomeworksSolf;
use App\Http\Requests\Admin\HomeworksSolf\DestroyHomeworksSolf;
use App\Http\Requests\Admin\HomeworksSolf\IndexHomeworksSolf;
use App\Http\Requests\Admin\HomeworksSolf\StoreHomeworksSolf;
use App\Http\Requests\Admin\HomeworksSolf\UpdateHomeworksSolf;
use App\Models\HomeworksSolf;
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

class HomeworksSolvesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexHomeworksSolf $request
     * @return array|Factory|View
     */
    public function index(IndexHomeworksSolf $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(HomeworksSolf::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'test_id', 'user_id'],

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

        return view('admin.homeworks-solf.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.homeworks-solf.create');

        return view('admin.homeworks-solf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHomeworksSolf $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreHomeworksSolf $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the HomeworksSolf
        $homeworksSolf = HomeworksSolf::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/homeworks-solves'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/homeworks-solves');
    }

    /**
     * Display the specified resource.
     *
     * @param HomeworksSolf $homeworksSolf
     * @throws AuthorizationException
     * @return void
     */
    public function show(HomeworksSolf $homeworksSolf)
    {
        $this->authorize('admin.homeworks-solf.show', $homeworksSolf);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param HomeworksSolf $homeworksSolf
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(HomeworksSolf $homeworksSolf)
    {
        $this->authorize('admin.homeworks-solf.edit', $homeworksSolf);


        return view('admin.homeworks-solf.edit', [
            'homeworksSolf' => $homeworksSolf,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateHomeworksSolf $request
     * @param HomeworksSolf $homeworksSolf
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateHomeworksSolf $request, HomeworksSolf $homeworksSolf)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values HomeworksSolf
        $homeworksSolf->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/homeworks-solves'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/homeworks-solves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyHomeworksSolf $request
     * @param HomeworksSolf $homeworksSolf
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyHomeworksSolf $request, HomeworksSolf $homeworksSolf)
    {
        $homeworksSolf->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyHomeworksSolf $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyHomeworksSolf $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    HomeworksSolf::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(HomeworksSolvesExport::class), 'homeworksSolves.xlsx');
    }
}
