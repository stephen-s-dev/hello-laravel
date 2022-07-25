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
        ShoppingListItem::factory()->create([
            'description' => 'Introduce myself',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => '12+ Years of .NET Windows/Web Application Development',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'SQL Server Querying, Administration, Development',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Microsoft Certified Trainer since 2010',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        
        ShoppingListItem::factory()->create([
            'description' => 'Azure Developer Associate',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Transcript Link: https://docs.microsoft.com/en-us/users/stephensmith-8702/transcript/dr5oi12woy8yj47',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'That covers over all the stuff I won\'t be using anymore',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'But, I\'m comfortable with picking up new topics!',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'I coded this in Laravel after picking up the foundations over the weekend.',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
        ShoppingListItem::factory()->create([
            'description' => 'Github link: https://github.com/stephen-s-dev/hello-laravel',
            'shopping_list_id' => '4',
            'user_id' => 1
        ]);
    }
}
