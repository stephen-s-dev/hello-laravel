<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'access_code',
        'user_id'
    ];

    // Relationship With ShoppingListItem
    public function shoppinglistitems() {
        return $this->hasMany(ShoppingListItem::class, 'shopping_list_id');
    }
}
