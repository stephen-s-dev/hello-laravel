<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingListItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'shopping_list_id',
        'user_id'
    ];

    // Relationship With ShoppingList
    public function shoppinglist() {
        return $this->belongsTo(ShoppingList::class, 'shopping_list_id');
    }
}
