<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JoisarJignesh\Bigbluebutton\Facades\Bigbluebutton;

class RoomsController extends Controller
{
    public function index(){
        $rooms = Bigbluebutton::all();
        return view('admin.rooms.index', [
            "rooms" => $rooms
        ]);
    }

    public function create(Request $request){

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

        $rooms = Bigbluebutton::all();

        return response()->json([
            "rooms" => $rooms,
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

        $rooms = Bigbluebutton::all();

        return response()->json([
            "rooms" => $rooms,
            "message" => __('Meeting Is Ended')
        ],200);
    }
}
