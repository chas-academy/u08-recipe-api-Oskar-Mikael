<?php

namespace App\Http\Controllers;

use App\Models\Shoppinglist;
use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{

    public function index()
    {
        return Shoppinglist::all();
    }

    public function show(Request $request, Shoppinglist $list)
    {
        if ($request->user()->id == $list->user_id) {
            return Shoppinglist::all()->where('list_id', $list->id);
        } else {
            return 'Unauthorized';
        }
    }
}
