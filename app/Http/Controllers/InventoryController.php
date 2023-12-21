<?php

namespace App\Http\Controllers;

use App\Models\Inventory;

class InventoryController extends Controller
{
    public function __construct(public Inventory $inventory)
    {
    }

    public function index()
    {
        $params = [];
        return checkAuth('Inventory/Inventory', $params);
    }
}