<?php

namespace App\Http\Controllers;

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

        //Render
        return Inertia::render('Welcome', $params);
    }
}
