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
        return redirect('dashboard');
    }
    
    public function ShowAddCategory()
    {
        $categories = Category::get();
        return view('category', [
            'categories' => $categories,
        ]);
    }

    public function ShowCategorizedTask($id)
    {
        $category = Category::where('id', $id)->first();
        $tasks = $category->tasks;
        return view('categorized-task', [
           'category' => $category,
           'tasks'=> $tasks
        ]);
    }
        
    public function delete(Request $request, $id) 
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect('dashboard')->with('success', 'Category deleted successfully!');
    }
}
