<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Task;
use App\Category;

class DashboardController extends Controller
{
    public function show() 
    {
        $tasks = Task::get();
        $categories = Category::get();
        
        return view('dashboard', [
            'tasks' => $tasks,
            'categories' => $categories,
        ]);
    }
}
