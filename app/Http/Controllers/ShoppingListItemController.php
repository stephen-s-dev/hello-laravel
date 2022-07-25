<?php

namespace App\Http\Controllers;

use App\Models\ShoppingListItem;
use Illuminate\Http\Request;

class ShoppingListItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'description' => 'required',
            'shopping_list_id' => 'required'
        ]);
        $formFields['user_id'] = 1;
        //dd($formFields);
        ShoppingListItem::create($formFields);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shoppinglistitem = ShoppingListItem::find($id);
        $formFields = $request->validate([
            'description' => 'required'
        ]);
        $shoppinglistitem->update($formFields);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shoppinglistitem = ShoppingListItem::find($id);
        $shoppinglistitem->delete();
        return back();
    }
}
