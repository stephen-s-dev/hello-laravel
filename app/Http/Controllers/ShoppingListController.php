<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingLists = ShoppingList::all();
        return view('shoppinglists.index', [
            'shoppinglists' => $shoppingLists
        ]);
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
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $formFields['access_code'] = Str::random(6);
        $formFields['user_id'] = 1;
        $list = ShoppingList::create($formFields);
        //return back();
        return redirect("/shoppinglist/{$list->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoppinglist = ShoppingList::with('shoppinglistitems')->find($id);
        //dd($shoppinglist->shoppinglistitems);
        return view('shoppinglists.show', [
            'shoppinglist' => $shoppinglist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = ShoppingList::find($id);
        $list->delete();
        return redirect("/shoppinglist");
    }
}
