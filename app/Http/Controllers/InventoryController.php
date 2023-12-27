<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;

class InventoryController extends Controller
{
    public function __construct(public Inventory $inventory)
    {
    }

    public function index()
    {
        $products = Product::all();

        $params = [
            'products' => $products
        ];
        return checkAuth('Inventory/Inventory', $params);
    }
}
