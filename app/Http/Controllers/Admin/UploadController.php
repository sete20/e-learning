<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function index(Request $request){
        if(isset($request->removePath)){
            File::delete(public_path($request->removePath));
            return response()->json(["message"=>__('File Removed Success')], 200);
        }
        else {
            $file = $request->file('file');
            $destinationPath = 'uploads/' . date('Y') . '/' . date('d');
            return $file->move($destinationPath, $file->getClientOriginalName());
        }

    }
}
