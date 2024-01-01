<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProducController extends Controller
{
    public function __construct(public Product $product)
    {
    }

    public function index()
    {
        $products = $this->product::with('category')
            ->limit(10)
            ->offset(0)
            ->get();

        $params = [
            'products' => $products
        ];

        return checkAuth('Products/Products', $params);
    }
}
