<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryPostRequest;
use App\Models\Product;

class InventoryController extends Controller
{
    /**
     * Inventory Controller creation
     */
    public function __construct()
    {
    }

    /**
     * Index of Inventory Page
     *
     * @return void
     */
    public function index()
    {
        $products = Product::where('deleted_at', null)
            ->orderBy('unit')
            ->orderBy('productName', 'ASC')
            ->get();

        $params = [
            'products' => $products
        ];

        return checkAuth('Inventory/Inventory', $params);
    }

    /**
     * Save new product on our inventory database.
     *
     * @param InventoryRequest $request
     */
    public function store(InventoryPostRequest $request)
    {
        $data = $request->validated();
    }
}
