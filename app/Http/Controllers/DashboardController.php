<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $products = Product::with('category')->get();
        $params = [
            'checkauth' => Auth::check(),
            'products' => $products,
        ];

        return $this->checkAuth('Dashboard', $params);
    }

    /**
     * Render Products Page
     *
     * @return void
     */
    public function products()
    {
        return $this->checkAuth('Products/Products');
    }

    /**
     * Render Reports Page
     *
     * @return void
     */
    public function reports()
    {
        return $this->checkAuth('Reports/Reports');
    }

    /**
     * Render Sales Page
     *
     * @return void
     */
    public function sales()
    {
        return $this->checkAuth('Sales/Sales');
    }

    /**
     * Render Staffs Page
     *
     * @return void
     */
    public function staffs()
    {
        return $this->checkAuth('Staffs/Staffs');
    }

    /**
     * Check if user is authenticated
     *
     * @param string $page
     * @param ?array $params
     *
     * @return void
     */
    public function checkAuth(string $page, ?array $params = [])
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return Inertia::render($page, $params);
    }
}
