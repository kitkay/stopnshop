<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Report;
use App\Models\Sale;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Ramsey\Uuid\Type\Integer;

class DashboardController extends Controller
{
    /**
     * Sturcture  DashboardController injections
     *
     * @param Product $product
     */
    public function __construct(public Product $product)
    {
    }

    /**
     * Render Dashboard Page
     *
     * @return void
     */
    public function dashboard()
    {
        $totalProducts = $this->product::with('category')->get()->count();
        $totalSales = count(Sale::with('products')->get());
        $totalReports = count(Report::with('sales')->get());
        $totalUsers = count(User::all());

        $params = [
            'checkauth' => Auth::check(),
            'totalProducts' => $totalProducts,
            'totalSales' => $totalSales,
            'totalReports' => $totalReports,
            'totalUsers' => $totalUsers
        ];

        return checkAuth('Dashboard', $params);
    }

    /**
     * Render Inventory Page
     *
     * @return void
     */
    public function inventory()
    {

        $params = [];

        return checkAuth('Inventory/Inventory', $params);
    }

    /**
     * Render Products Page
     *
     * @return void
     */
    public function products()
    {
    }

    /**
     * Render Reports Page
     *
     * @return void
     */
    public function reports()
    {
        return checkAuth('Reports/Reports');
    }

    /**
     * Render Sales Page
     *
     * @return void
     */
    public function sales()
    {
        return checkAuth('Sales/Sales');
    }

    /**
     * Render Staffs Page
     *
     * @return void
     */
    public function staffs()
    {
        return checkAuth('Staffs/Staffs');
    }
}