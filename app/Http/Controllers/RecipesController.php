<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipesResource;
use App\Models\Recipe;
use App\Models\RecipeList;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'list_id' => 'required',
            'meal_id' => [
                'required',
                \Illuminate\Validation\Rule::unique('recipes')->where(function($query) use ($request){
                      $query->where('list_id', $request->list_id)
                          ->where('meal_id', $request->meal_id);
                    }),
                ],
        ]);

        $recipe = Recipe::create([
            'name' => $request->input('name'),
            'meal_id' => $request->input('meal_id'),
            'list_id' => $request->input('list_id'),
        ]);
        return new RecipesResource($recipe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        return $recipe->delete();
    }
}
