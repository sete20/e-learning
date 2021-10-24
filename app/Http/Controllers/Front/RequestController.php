<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request){
        $request->validate([
           "name" => "required",
           "phone" => "required",
            "email" => "required|email",
            "material_id" => "required"
        ]);

        $createNewTeacher = new Teacher();
        $createNewTeacher->name = $request->name;
        $createNewTeacher->phone = $request->phone;
        $createNewTeacher->email = $request->email;
        $createNewTeacher->material_id = $request->material_id;
        $createNewTeacher->save();

        alert(__('Success'), __('Your Request Has Been Send Successfully'), 'success');
        return back();
    }
}
