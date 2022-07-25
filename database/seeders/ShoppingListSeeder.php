<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ShoppingList::factory()->create([
            'title' => 'Bi-Lo Breakfast',
            'description' => 'Getting some Breakfast Items',
            'access_code' => 'aaaaaa',
            'user_id' => 1
        ]);
        \App\Models\ShoppingList::factory()->create([
            'title' => 'Best Buy',
            'description' => 'Grabbing some desktop peripherals',
            'access_code' => 'bbbbbb',
            'user_id' => 1
        ]);
        \App\Models\ShoppingList::factory()->create([
            'title' => 'Lowe\'s',
            'description' => 'Yard Maintenance and household repairs',
            'access_code' => 'cccccc',
            'user_id' => 1
        ]);
        \App\Models\ShoppingList::factory()->create([
            'title' => 'Tech Interview',
            'description' => 'The 2:00 meeting with Trevett\'s Tech team ',
            'access_code' => 'dddddd',
            'user_id' => 1
        ]);
    }
}
