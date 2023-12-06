<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Render Dashboard Page
     *
     * @return void
     */
    public function dashboard()
    {
        $this->checkAuth('Dashboard');
    }

    /**
     * Render Products Page
     *
     * @return void
     */
    public function products()
    {
        $this->checkAuth('Products/Products');
    }

    /**
     * Render Reports Page
     *
     * @return void
     */
    public function reports()
    {
        $this->checkAuth('Reports/Reports');
    }

    /**
     * Render Sales Page
     *
     * @return void
     */
    public function sales()
    {
        $this->checkAuth('Sales/Sales');
    }

    /**
     * Render Staffs Page
     *
     * @return void
     */
    public function staffs()
    {
        $this->checkAuth('Staffs/Staffs');
    }

    /**
     * Check if user is authenticated
     *
     * @param string $page
     *
     * @return void
     */
    public function checkAuth(string $page)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return Inertia::render($page);
    }
}
