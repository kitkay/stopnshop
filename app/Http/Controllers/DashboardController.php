<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Report;
use App\Models\Sale;
use App\Models\User;

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
     */
    public function dashboard()
    {
        $totalProducts = $this->product::with('category')->get()->count();
        $totalSales = count(Sale::with('inventories')->get());
        $totalReports = count(Report::with('sales')->get());
        $totalUsers = count(User::all());

        $params = [
            'totalProducts' => $totalProducts,
            'totalSales' => $totalSales,
            'totalReports' => $totalReports,
            'totalUsers' => $totalUsers
        ];

        return checkAuth('Dashboard', $params);
    }

    /**
     * Render Inventory Page
     */
    public function inventory()
    {

        return checkAuth('Inventory/Inventory');
    }

    /**
     * Render Products Page
     */
    public function products()
    {
    }

    /**
     * Render Reports Page
     */
    public function reports()
    {
        return checkAuth('Reports/Reports');
    }

    /**
     * Render Sales Page
     */
    public function sales()
    {
        return checkAuth('Sales/Sales');
    }

    /**
     * Render Staffs Page
     */
    public function staffs()
    {
        return checkAuth('Staffs/Staffs');
    }
}
