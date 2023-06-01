<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home');
    }
}
