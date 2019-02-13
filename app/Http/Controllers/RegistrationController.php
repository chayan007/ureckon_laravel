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
        $participant->event = $request->event;
        $participant->team = $request->team;
        $participant->username2 = $request->username2;
        $participant->username3 = $request->username3;
        $participant->username4 = $request->username4;
        $participant->username5 = $request->username5;
        $participant->save();
        return back();

    }
}
