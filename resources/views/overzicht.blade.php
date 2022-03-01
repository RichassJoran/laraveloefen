@extends('layout')

@section('content')
    @foreach($Todos as $Todo)
        <div class = "todoItem">
            <div class = "contentTodo">
                {{$Todo ->content}}
                <a href="{{route('deleteTodo', $Todo->id)}}"> delete</a>
            </div>
        </div>
    @endforeach
    <form action="add" method="post" class="Postadd"">
        @csrf
        <label for=""> name</label>
        <input type="text" name="TodoItem">
    </form>
@endsection('content')
