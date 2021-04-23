<?php

namespace App\Http\Controllers;

use App\Models\RecipeList;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Resources\ListsResource;
use Illuminate\Support\Facades\Auth;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  ListsResource::collection(RecipeList::all());
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
        $list = RecipeList::create([
            'name' => $request->input('name'),
            'user_id' => auth()->user()->id,
        ]);
        return new ListsResource($list);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeList  $list
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeList $list)
    {
        return Recipe::all()->where('list_id', $list->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeList  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeList $list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecipeList  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeList $list)
    {
        if ($request->user()->id == $list->user_id) {
            $list->update([
                'name' => $request->input('name')
            ]);

            return new ListsResource($list);
        } else {
            return 'Unauthorized';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeList  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, RecipeList $list)
    {
        if ($request->user()->id == $list->user_id) {
            $list->delete();

            return response(null, 204);
        } else {
            return 'Unauthorized';
        }
    }

    /**
     * Search for a name.
     *
     * @param  str $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return RecipeList::where('name', 'like', '%' . $name . '%');
    }
}
