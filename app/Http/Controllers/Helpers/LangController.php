<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Brackets\AdminAuth\Models\AdminUser;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function change($lang){
        if($lang){
            $user = AdminUser::find(auth('admin')->user()->id);
            $user->language = $lang;
            $user->save();
            return back();
        }
        else {
            return back();
        }
    }
}
