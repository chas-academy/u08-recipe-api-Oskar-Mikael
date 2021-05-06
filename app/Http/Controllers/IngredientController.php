<?php

namespace App\Http\Controllers;

use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'list_id' => 'required',
        ]);

        $recipe = Ingredient::create([
            'name' => $request->input('name'),
            'list_id' => $user->shoppinglist()->id,
        ]);
        return new IngredientResource($recipe);
    }

    public function destroy(Ingredient $ingredient)
    {
        return $ingredient->delete();
    }
}
