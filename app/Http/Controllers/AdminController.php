<?php

namespace App\Http\Controllers;

use App\Participants;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        $users = User::all()->paginate(30);
        return view('admin.dashboard', ['users'=>$users]);
    }

    public function getParticipants()
    {
        $participants = Participants::all()->paginate(30);
        return view('admin.dash', ['participants'=>$participants]);
    }
}
