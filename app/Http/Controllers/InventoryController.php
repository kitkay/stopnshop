<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryPostRequest;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Inventory Controller creation
     */
    public function __construct(
        public Product $product,
        public Inventory $inventory
    ) {
    }

    /**
     * Index of Inventory Page
     *
     * @return void
     */
    public function index()
    {
        $params = [
            'products' => $this->products()
        ];

        return checkAuth('Inventory/Inventory', $params);
    }

    public function addInventory()
    {
        $params = [
            'inventories' => $this->inventories(),
            'products' => $this->products()
        ];

        return checkAuth('Inventory/CreateInventory', $params);
    }

    /**
     * Save new product on our inventory database.
     *
     * @param InventoryPostRequest $request
     */
    public function store(InventoryPostRequest $request)
    {
        if ($request->isMethod('post') && $request->validated()) {
            Inventory::create($request->validated());

            return redirect()->route('inventory.add')
                ->with('message', 'New inventory has been created.');
        } else {
            return redirect()->route('inventory.index');
        }
        // dd('hi');
        // Inventory::create($request->validated());

        // return redirect('inventory.add')
        // ->with('message', 'New inventory has been created.');
    }

    /**
     * Create a list of products just for this page
     *
     * @return void
     */
    private function products()
    {
        return $this->product::query()
            ->orderBy('unit')
            ->orderBy('productName', 'ASC')
            ->get();
    }

    /**
     * Create a list of inventories just for this page
     *
     * @return void
     */
    private function inventories()
    {
        return $this->inventory::query()
            ->with('staff')
            ->get();
    }
}