<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Shoppinglist;
use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{

    public function index()
    {
        return Shoppinglist::all();
    }

    public function show(Request $request, Shoppinglist $shoppinglist)
    {
        if ($request->user()->id == $shoppinglist->user_id) {
            return Ingredient::all()->where('shoppinglist_id', $shoppinglist->user_id);
        } else {
            return 'Unauthorized';
        }
    }
}
