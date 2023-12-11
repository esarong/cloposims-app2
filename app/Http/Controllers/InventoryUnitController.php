<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventoryUnitCollection;
use App\Models\InventoryUnit;
use Illuminate\Http\Request;

class InventoryUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new InventoryUnitCollection(InventoryUnit::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryUnit $inventoryUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryUnit $inventoryUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryUnit $inventoryUnit)
    {
        //
    }
}
