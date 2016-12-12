<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    
    public function category () 
    {
        return $this->belongsTo('App\Category','category_id');
    }
    
}
