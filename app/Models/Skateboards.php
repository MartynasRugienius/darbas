<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skateboards extends Model
{
    use HasFactory;

    protected $table = 'skateboards';

    protected $fillable = ['name', 'image', 'description', 'created_at', 'updated_at'];
}
