<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    public $guarded = [];
    
    public function project(){
        
        return $this->belongsTo(Project::class);

    }

}
