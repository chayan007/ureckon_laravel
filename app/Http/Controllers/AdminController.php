<?php

namespace App\Http\Controllers;

use App\Participants;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        $users = User::paginate(30);
        return view('admin.dashboard', ['users'=>$users]);
    }

    public function getParticipants()
    {
        $participants = Participants::paginate(30);
        return view('admin.dash', ['participants'=>$participants]);
    }
}
