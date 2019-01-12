<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    // public $fillable = ['title', 'description'];
    public $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

}
