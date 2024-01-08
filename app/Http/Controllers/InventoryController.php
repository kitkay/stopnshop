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
        // dd($params);

        return checkAuth('Inventory/Inventory', $params);
    }

    public function addInventory()
    {
        $params = [
            'inventories' => $this->inventories(),
            'products' => $this->products()
        ];
        $prods = $this->products();

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
        }
        return redirect()->route('inventory.index');
    }

    /**
     * Create a list of products just for this page
     *
     * @return void
     */
    private function products()
    {
        return collect($this->product::orderBy('unit')
            ->orderBy('productName', 'ASC')
            ->cursorPaginate(5)
            ->through(function ($item) {
                return [
                    'productName' => $item->productName,
                    'sku' => $item->sku,
                    'unit' => $item->unit,
                    'description' => $item->description,
                ];
            }));
    }

    /**
     * Create a list of inventories just for this page
     *
     * @return void
     */
    private function inventories()
    {
        return collect($this->inventory::with('staff')
            ->cursorPaginate(5)
            ->through(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'staff' => $item->staff->name,
                ];
            }));
    }
}
