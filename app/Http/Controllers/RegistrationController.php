<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participants;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $participant = new Participants();
        $participant->user = $request->user;
        if($request->has('event'))
        {
            $participant->event = $request->event;
        }
        $participant->team = $request->team;
        if($request->has('username2'))
        {
            $participant->username2 = $request->username2;
        }
        if($request->has('username3'))
        {
            $participant->username3 = $request->username3;
        }
        if($request->has('username4'))
        {
            $participant->username4 = $request->username4;
        }
        if($request->has('username5'))
        {
            $participant->username5 = $request->username5;
        }
        $participant->save();
        return redirect('/user/dashboard');
    }
}
