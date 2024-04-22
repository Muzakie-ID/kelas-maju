<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->where("role_id", "=", "9bae0006-2480-4f34-9856-cc605550b9b4")->take(8)->get();

        return view('home', [
            "users" => $users
        ]);
    }

    public function showAllStudent()
    {
        $users = User::query()->latest()->where("role_id", "=", "9bae0006-2480-4f34-9856-cc605550b9b4")->get();

        return view('home-students', [
            "users" => $users
        ]);
    }
}
