<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    
    /**
     * Index action controller for the Todos page
     * 
     * @return object an object of the view for todos view.
     */
    public function index(){
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    /**
     * Todo action controller for the Todos page to store a todo item.
     * Adds a todo to the database.
     * 
     * @param object an object of type Request
     * 
     * @return object redirect back.
     */
    public function store(Request $request){

        $todo = new Todo;

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->back();
    }

    /**
     * Action controller for the Todos page to delete a todo item.
     * Deletes a todo from the database.
     * 
     * @param int $id the id of the message to be deleted
     * 
     * @return object redirect back.
     */
    public function delete($id){

        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->back();
    }

    /**
     * Action controller for the Todos page to update a todo item.
     * Updates a todo.
     * 
     * @param int $id the id of the message to be updated
     * 
     * @return object an object of the view for updating the todo item.
     */
    public function update($id){

        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    /**
     * Action controller for the Todos page to update a todo item.
     * Saves an updated todo into the database.
     * 
     * @param multiple $request - an object of type Request, $id - an integer passed which is the id of the todo record
     * 
     * @return object redirect to todos index page.
     */
    public function save(Request $request, $id){

        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        if ( $todo->completed ) {
            $todo->completed = 0;
        }

        $todo->save();

        return redirect()->route('todos');
    }

    /**
     * Action controller for the Todos page to complete a todo item.
     * Marks a todo as completed in the database.
     * 
     * @param int $id the id of the message to be marked as completed.
     * 
     * @return object redirect to todos index page.
     */
    public function complete($id){

        $todo = Todo::find($id);

        if ( !$todo->completed ) {

            $todo->completed = 1;
            $todo->save();
        }

        return redirect()->back();
    }
}
