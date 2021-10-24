<?php

namespace App\Http\Controllers\Admin;

use App\Exports\HomeworksExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Homework\BulkDestroyHomework;
use App\Http\Requests\Admin\Homework\DestroyHomework;
use App\Http\Requests\Admin\Homework\IndexHomework;
use App\Http\Requests\Admin\Homework\StoreHomework;
use App\Http\Requests\Admin\Homework\UpdateHomework;
use App\Models\Homework;
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

class HomeworksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexHomework $request
     * @return array|Factory|View
     */
    public function index(IndexHomework $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Homework::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'course_id', 'teacher_id', 'name', 'description'],

            // set columns to searchIn
            ['id', 'name', 'description', 'homework']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.homework.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.homework.create');

        return view('admin.homework.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHomework $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreHomework $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Homework
        $homework = Homework::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/homework'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/homework');
    }

    /**
     * Display the specified resource.
     *
     * @param Homework $homework
     * @throws AuthorizationException
     * @return void
     */
    public function show(Homework $homework)
    {
        $this->authorize('admin.homework.show', $homework);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Homework $homework
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Homework $homework)
    {
        $this->authorize('admin.homework.edit', $homework);


        return view('admin.homework.edit', [
            'homework' => $homework,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateHomework $request
     * @param Homework $homework
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateHomework $request, Homework $homework)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Homework
        $homework->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/homework'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/homework');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyHomework $request
     * @param Homework $homework
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyHomework $request, Homework $homework)
    {
        $homework->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyHomework $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyHomework $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Homework::whereIn('id', $bulkChunk)->delete();

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
        return Excel::download(app(HomeworksExport::class), 'homework.xlsx');
    }
}
