<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShoppingListItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShoppingListItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShoppingListItem::factory()->create([
            'description' => 'Eggs',
            'shopping_list_id' => '1',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Milk',
            'shopping_list_id' => '1',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Bacon',
            'shopping_list_id' => '1',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Grape Juice',
            'shopping_list_id' => '1',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Keyboard',
            'shopping_list_id' => '2',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Mouse',
            'shopping_list_id' => '2',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Printer Ink',
            'shopping_list_id' => '2',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Speakers',
            'shopping_list_id' => '2',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Rake',
            'shopping_list_id' => '3',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Yard Trash Bags',
            'shopping_list_id' => '3',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Ant Killer',
            'shopping_list_id' => '3',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Weed Killer',
            'shopping_list_id' => '3',
            'user_id' => 1
        ]);
        
    }
}
