<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Course\BulkDestroyCourse;
use App\Http\Requests\Teacher\Course\DestroyCourse;
use App\Http\Requests\Teacher\Course\StoreCourse;
use App\Http\Requests\Teacher\Course\UpdateCourse;
use App\Http\Requests\Teacher\Course\IndexCourse;
use App\Models\Course;
use App\Models\Material;
use App\Models\Teacher;
use Brackets\AdminListing\Facades\AdminListing;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use JoisarJignesh\Bigbluebutton\Facades\Bigbluebutton;

class ProfileController extends Controller
{
    public function index(){
        return view('teacher.index');
    }
    public function profile(){
        $adminUser = auth('teacher')->user();
        $adminUser->holder = image($adminUser->image);
        $adminUser->image = imageUrl($adminUser->image);
        $adminUser->material_id = Material::find($adminUser->material_id);
        return view('teacher.profile.edit-profile', [
            "adminUser" => $adminUser
        ]);
    }
    public function saveprofile(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "material_id" => "required",
            "image" => "required",
        ]);

        $getUser = Teacher::find(auth('teacher')->user()->id);
        $getUser->name = $request->name;
        $getUser->email = $request->email;
        $getUser->phone = $request->phone;
        $getUser->material_id = $request->material_id['id'];
        $getUser->image = $request->image;
        $getUser->save();

        return response()->json(["message" => __('Profile Updated Success'), "redirect"=>url('teacher/profile')]);
    }
    public function password(){
        return view('teacher.profile.edit-password');
    }
    public function savepassword(Request $request){
        $request->validate([
            "password"=> "sometimes|confirmed|min:7|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/|string"
        ]);
        $getUser = Teacher::find(auth('teacher')->user()->id);
        $getUser->password = bcrypt($request->password);
        $getUser->save();
        return response()->json(["message" => __('Password Updated Success'), "redirect" => url('teacher/password')]);
    }
    public function students(){
        return view('teacher.students');
    }

    //Courses Area
    public function courses(IndexCourse $request){
        $teacher = auth('teacher')->user();
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Course::class)
            ->modifyQuery(function($query) use ($teacher){
                $query->where('teacher_id', $teacher->id);
            })
            ->processRequestAndGet(
        // pass the request with params
            $request,

            // set columns to query
            ['id', 'teacher_id', 'name', 'price', 'discount', 'image', 'material_id', 'activated', 'description', 'slug',  'times', 'live'],

            // set columns to searchIn
            ['id', 'name', 'slug', 'description', 'image', 'material_id', 'times', 'live']
        );

        foreach ($data as $item){
            $item->teacher_id = Teacher::find($item->teacher_id);
            $item->material_id = Material::find($item->material_id);
            $item->holder = image($item->image);
            $item->image = imageUrl($item->image);
            if($item->live){
                $item->live = json_decode($item->live);
            }
        }

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('teacher.courses', ['data' => $data]);
    }

    public function storeCourses(StoreCourse $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Course
        $course = Course::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/courses'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/courses');
    }

    public function updateCourses(UpdateCourse $request, Course $course)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Course
        $course->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/courses'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/courses');
    }

    public function destroyCourses(DestroyCourse $request, Course $course)
    {
        $course->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    public function bulkDestroyCourses(BulkDestroyCourse $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Course::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    public function rooms(Request $request){
        $request->validate([
            'attendeePW' => "required|string",
            'moderatorPW' => "required|string",
            'meetingName' => "required|string",//for join meeting
        ]);

        Bigbluebutton::create([
            'meetingID' => $request->meetingID,
            'attendeePW' => $request->attendeePW,
            'moderatorPW' => $request->moderatorPW,
            'meetingName' => $request->meetingName,//for join meeting
        ]);

        $live = [
            "meetingID" => $request->meetingID,
            "username" => $request->username,
            "password" => $request->moderatorPW,
        ];
       $getCourse = Course::find($request->id);
       $getCourse->live = json_encode($live);
       $getCourse->save();

        return response()->json([
            "message" => __('The Meeting Has Been Created')
        ], 200);
    }

    public function join(Request $request){
        $request->validate([
            'meetingID' => "required|string",
            'username' => "required|string",
            'password' => "required|string",
        ]);


        $url =  Bigbluebutton::join([
            'meetingID' => $request->meetingID,
            'userName' => $request->username,
            'password' => $request->password,
            //'redirect' => false
        ]);

        return response()->json([
            "url" => $url,
        ],200);
    }

    public function end(Request $request){
        $request->validate([
            'meetingID' => "required|string",
            'moderatorPW' => "required|string",
        ]);

        Bigbluebutton::close([
            'meetingID' => $request->meetingID,
            'moderatorPW' => $request->moderatorPW //moderator password set here
        ]);

        $getCourse = Course::find($request->id);
        $getCourse->live = null;
        $getCourse->save();

        return response()->json([
            "message" => __('Meeting Is Ended')
        ],200);
    }
    //End Courses Area

    public function orders(){
        return view('teacher.orders');
    }
    public function homeworks(){
        return view('teacher.homeworks');
    }
    public function tests(){
        return view('teacher.tests');
    }
}
