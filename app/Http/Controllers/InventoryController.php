<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct(public Inventory $inventory)
    {
    }

    public function index()
    {
    }
}