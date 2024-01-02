<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryPostRequest;
use App\Models\Inventory;
use App\Models\Product;

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
        $params = [
            'products' => $this->inventory()
        ];

        return checkAuth('Inventory/Inventory', $params);
    }

    public function addInventory()
    {
        $params = [
            'products' => $this->inventory()
        ];

        return checkAuth('Inventory/AddInventory', $params);
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

    /**
     * Create a list of products just for this page
     *
     * @return void
     */
    private function inventory()
    {
        return $this->product::query()
            ->orderBy('unit')
            ->orderBy('productName', 'ASC')
            ->get();
    }
}
