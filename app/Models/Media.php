<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'image', 
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
}
