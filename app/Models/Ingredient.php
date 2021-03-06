<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shoppinglist_id'
    ];

    public function shoppinglist()
    {
        return $this->belongsTo(Shoppinglist::class);
    }
}
