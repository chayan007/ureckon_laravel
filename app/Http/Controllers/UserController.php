<?php

namespace App\Http\Controllers;

use App\User;
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

    public function uploadDP(Request $request)
    {
        $participant = User::where('id', Auth::user()->id)->first();
        $file = $request->image;
        $path = $file->store('public/dp');
        $participant->image_url = $path;
        return redirect('/profile');
    }
}
