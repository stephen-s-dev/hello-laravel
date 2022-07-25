<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index($id)
    {
        return view('shoppinglist.index', [
            'shoppinglists' => ShoppingList::all($id)
        ]);
    }
}
