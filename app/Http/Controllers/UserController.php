<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Participants;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->year = $request->year;
        $user->institute = $request->institute;
        $user->phone = $request->phone;
        $user->course = $request->course;
        $user->username = $request->username;
        $user->save();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            return redirect('/user/profile');
        }
        else
        {
            return back();
        }
    }
}
