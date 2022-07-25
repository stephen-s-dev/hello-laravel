@extends('layouts.master')
 
@section('title', 'Show List {{$shoppinglist->id}}')
 
@section('content')
<h2 class="text-2xl text-center text-neutral-500 font-bold">
        {{$shoppinglist->title}}
    </h2>
    <h3 class="text-1xl text-center text-neutral-500 font-bold">
        {{$shoppinglist->description}}
    </h3>
    <ul>
    @foreach ($shoppinglist->shoppinglistitems as $item)
        <x:shopping-list-item :listitem="$item">
        </x:shopping-list-item>
    @endforeach
    </ul>
    <form class="flex max-w-lg" method="POST" action="/shoppinglistitem">
        <input type="hidden" name="shopping_list_id" value="{{$shoppinglist->id}}">
        <input class="grow  m-2 rounded-md border-2 border-slate-500 bg-blue-100 p-1" type="text" name="description" placeholder="Add New List Item" >
        @csrf
        <button type="submit" class="m-2 rounded-md border-2 border-stone-700 p-1 text-center">Add</button>
    </form>
    <footer class="flex items-stretch w-lg">
        <a href="/shoppinglist" class="justify-self-start m-2 rounded-md border-2 bg-blue-300 text-black border-stone-700 p-1 text-center">Back to all lists</a>
        <form class="m-2 rounded-md border-2 bg-red-700 text-white border-stone-700 p-1 text-center" method="POST" action="/shoppinglist/{{$shoppinglist->id}}">
            @csrf
            @method("DELETE")
            <button type="submit" >Delete lista</button>
        </form>
        
    </footer>
@stop