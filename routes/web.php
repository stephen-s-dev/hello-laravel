<?php

use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\ShoppingListItemController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Actions Handled By Resource Controller
Verb	    URI 	                Action	    Route Name
GET	        /photos	                index	    photos.index
GET	        /photos/create	        create	    photos.create
POST	    /photos	                store	    photos.store
GET	        /photos/{photo}	        show	    photos.show
GET	        /photos/{photo}/edit    edit	    photos.edit
PUT/PATCH	/photos/{photo}	        update	    photos.update
DELETE	    /photos/{photo}	        destroy	    photos.destroy
*/
Route::get('/', function () {
    return view('index');
});

Route::resource('shoppinglist', ShoppingListController::class);

Route::resource('shoppinglistitem', ShoppingListItemController::class)->only([
    'store','update','destroy'
]); 