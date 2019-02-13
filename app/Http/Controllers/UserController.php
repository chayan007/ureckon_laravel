<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Participants;

class UserController extends Controller
{
    public function profile()
    {
        $participant = Participants::where('user', Auth::user()->id)->get();
        return view('views.profile', ['participants' => $participant]);
    }
}
