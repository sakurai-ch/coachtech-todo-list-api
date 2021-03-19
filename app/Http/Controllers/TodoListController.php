<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function get(Request $request){
        $todo_list = TodoList::orderBy('id', 'ASC')->get();
        return response()->json([
            'message' => 'list got successfully',
            'data' => $todo_list
        ], 200);
    }

    public function post(Request $request){
        $todo_list = new TodoList;
        $todo_list->todo = $request->todo;
        $todo_list->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $todo_list
        ], 200);
    }

    public function put(Request $request)
    {
        $todo_list = TodoList::where('id', $request->id)->first();
        $todo_list->todo = $request->todo;
        $todo_list->save();
        return response()->json([
            'message' => 'Updated successfully',
            'data' => $todo_list
        ], 200);
    }

    public function delete(Request $request)
    {
        TodoList::where('id', $request->id)->delete();
        return response()->json([
            'message' => 'Deleted successfully',
        ], 200);
    }
}
