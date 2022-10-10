<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    use HasFactory;

    protected $table = 'airports';

    protected $fillable = ['name', 'country', 'lat', 'lng', 'airlines_id', 'created_at', 'updated_at'];

}
