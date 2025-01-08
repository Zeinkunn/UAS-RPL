<?php

namespace App\Http\Controllers;

use App\Models\Inventory;

class PageController extends Controller
{
    public function home()
    {
        $items = Inventory::all();
        return view('home', compact('items'));
    }

    public function table()
    {
        $items = Inventory::all();
        return view('guestview', compact('items'));
    }

    public function about()
    {
        $items = Inventory::all();
        return view('about', compact('items'));
    }
}
