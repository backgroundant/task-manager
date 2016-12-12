<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Task;
use App\Category;
use URL;

class TaskController extends Controller
{
    // Show the add task page
    public function showAddTask() 
    {
        $categories = Category::get();
        return view('task', [
           'task' => null,
           'page' => 'add',
           'id' => '',
           'categories' => $categories
        ]);
    }
    
    // Process the added task data
    public function AddTask(Request $request)
    {
            
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        
        $task->save();
        
        if (!empty($request->category)) {
            $category_id = $request->category;
            $category = Category::where('id', $category_id)->first();
            $task->category_id = $request->category;
            $task->save();
        }
        
        return redirect('dashboard')->with('success', 'Task created successfully');
    }
    
    // Show the added task detail
    public function ShowTask($id) 
    {
        $task = Task::where('id', $id)->first();
        $category = Category::where('id', $task->category_id)->first();
        return view('task', [
            'task' => $task,
            'page' => 'show',
            'id' => '/' . $id,
            'category' => $category
        ]);
    }
    
    // Delete the added task
    public function delete(Request $request, $id) 
    {
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('dashboard')->with('success', 'Task deleted successfully!');
    }                               
}
