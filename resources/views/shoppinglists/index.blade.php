@extends('layouts.master')
 
@section('title', 'Current Lists')
 
@section('content')
    <h2 class="text-2xl text-center text-neutral-500 font-bold">
        Current Lists
    </h2>
    <div class="flex flex-col items-center">
    @foreach ($shoppinglists as $shoppinglist)
            <a href="/shoppinglist/{{$shoppinglist->id}}" 
                class="w-1/2 m-2 rounded-lg border-2 border-slate-500 bg-green-100">
                {{$shoppinglist->title}}
            </a>
    @endforeach
    </div>
    <form class="text-center" method="POST" action="/shoppinglist">
        @csrf
        <fieldset>
            <legend class="text-2xl text-center text-neutral-500 font-bold">Create a new list</legend>
            <input class="m-2 rounded-md border-2 border-slate-500 bg-blue-100 p-1" type="text" name="title" placeholder="Title">
            <input class="m-2 rounded-md border-2 border-slate-500 bg-blue-100 p-1" type="text" name="description" placeholder="Description">
            <button class="m-2 rounded-md border-2 border-stone-700 p-1 text-center" type="submit">Create >></button>
        </fieldset>
    </form>
@stop