<?php

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

if (!function_exists('checkAuth')) {

    /**
     * Check if user is authenticated
     *
     * @param string $page
     * @param ?array $params
     *
     * @return void
     */
    function checkAuth(string $page, ?array $params = [])
    {
        if (!Auth::check()) return redirect('/');

        return Inertia::render($page, $params);
    }
}