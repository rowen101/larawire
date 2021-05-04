<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

     protected $table = "todos";
    protected $fillable =['user_id','title','completed'];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
