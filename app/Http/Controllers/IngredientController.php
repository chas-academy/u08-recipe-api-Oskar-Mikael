<?php

namespace App\Http\Controllers;

use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $ingredient = Ingredient::create([
            'name' => $request->input('name'),
            'shoppinglist_id' => auth()->user()->id,
        ]);
        return new IngredientResource($ingredient);
    }

    public function destroy(Ingredient $ingredient)
    {
        return $ingredient->delete();
    }
}
