<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{

    public function view(): \Illuminate\Contracts\View\View
    {
        $users = User::all();

        return View::make('welcome', ['users' => $users]);
    }
}
