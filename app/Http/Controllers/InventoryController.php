<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('inventories.index', compact('items'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:inventories',
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
            'tanggal' => 'nullable|date',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventories.index')->with('success', 'Item added successfully.');
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'kode_barang' => 'required|unique:inventories,kode_barang,' . $inventory->id,
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
            'tanggal' => 'nullable|date',
        ]);

        $inventory->update($request->all());

        return redirect()->route('inventories.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('inventories.index')->with('success', 'Item deleted successfully.');
    }
}
