<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TodoController extends Controller
{
    public function ShowTodo()
    {
        $Todos = DB::table('Todos')->where('todoid', '=', Auth::user()->id)->get();
        return view('overzicht', ['Todos' => $Todos]);
    }
    public function DeleteTodo($id)
    {
        DB::table('todos')->where('id','=', $id)->delete();
        return redirect('/');
    }
    public function PostTodo(Request $request)
    {
//        DB::insert('insert into Todos (name) values  (?)', [1, 'Marc']);
//        return redirect('/');
          $request->validate([
              'TodoItem'=>'required'
          ]);
          DB::table('Todos')->insert([
              'content'=>$request->input('TodoItem'),
              'todoid'=> Auth::user()->id
          ]);
          return redirect('/');
    }
}
