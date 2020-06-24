<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    //
    protected $table = 'todolist';
    protected $fillable = ['title', 'content'];
}
