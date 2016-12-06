<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Task;
use App\Category;
use URL;

class CategoryController extends Controller
{
    public function AddCategory(Request $request)
    {
//        $categories = Category::get();
            
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('success', 'Category Added')
    }
    
    public function ShowAddCategory()
    {
        $categories = Category::get();
        return view('categoy', [
            'category' => null,
            'page' => 'add',
            'id' => ''
        ]);
    }

    public function ShowCategorizedTask()
    {
        $category = Category::where('id', $id)->first();
        $task_ids = $category->task_id;
        $tasks = Task::where('id',$task_ids);
        return('view', [
           'category' => $category,
           'id'=> $category->id
        ]);
    }
        
    public function delete(Request $request, $id) 
    {
        $category = Category::whre('id', $id)->first();
        $category->delete();
        return redirect('dashboard')->with('success', 'Category Deleted');
    }
}
