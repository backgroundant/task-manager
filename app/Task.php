<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    
    public function category () 
    {
        return $this->hasOne('App\Category','task_id');
    }
    
    
}
