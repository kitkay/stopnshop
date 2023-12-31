<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function index()
    {
        $params = [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register')
        ];

        if (Auth::check()) {
            return redirect('dashboard');
        }

        return Inertia::render('Welcome', $params);
    }
}
