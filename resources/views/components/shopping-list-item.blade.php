@props(['listitem'])

<li class="flex max-w-lg">
    <form class="flex max-w-md grow" method="POST" action="/shoppinglistitem/{{$listitem->id}}">
        <input type=text name="description" 
        class="grow m-2 rounded-md border-2 border-slate-500 bg-blue-100 p-1" value="{{$listitem->description}}">
        @csrf
        @method('PUT')
        <button class="grow-0 m-2 rounded-md border-2 border-stone-700 p-1 text-center" type="submit">Update</button>
    </form>
    <form method="POST" class="grow-0" action="/shoppinglistitem/{{$listitem->id}}">
        @csrf
        @method('DELETE')
        <button class="m-2 rounded-md border-2 border-stone-700 p-1 text-center" type="submit">Delete</button>
    </form>
</li>