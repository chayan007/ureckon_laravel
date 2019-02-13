<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Participants;

class UserController extends Controller
{
    public function profile()
    {
        $participant = Participants::where('user', Auth::user()->id)->get();
        return view('views.profile', ['participants' => $participant]);
    }
}
