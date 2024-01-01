<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryPostRequest;
use App\Models\Inventory;
use App\Models\Product;
use Inertia\Inertia;

class InventoryController extends Controller
{
    /**
     * Inventory Controller creation
     */
    public function __construct(public Product $product)
    {
    }

    /**
     * Index of Inventory Page
     *
     * @return void
     */
    public function index()
    {
        $products = $this->product::where('deleted_at', null)
            ->orderBy('unit')
            ->orderBy('productName', 'ASC')
            ->get();

        $params = [
            'products' => $products
        ];

        return checkAuth('Inventory/Inventory', $params);
    }

    public function addInventory()
    {
        return checkAuth('Inventory/AddInventory', []);
    }

    /**
     * Save new product on our inventory database.
     *
     * @param InventoryRequest $request
     */
    public function store(InventoryPostRequest $request)
    {
        if ($request->isMethod('post') === $request->method() && $request->valiadted()) {
            Inventory::create($request->validated());

            return redirect('inventory')
                ->with('status', 'New product has been added to our inventory.');
        }
    }
}
