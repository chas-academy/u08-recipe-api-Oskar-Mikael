<?php

namespace App\Policies;

use App\Models\RecipeList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(Request $request, RecipeList $list)
    {
        if ($request->user()->id == $list->user_id) {
            return true;
        } else {
            return "You're not authorized";
        }
    }
}
