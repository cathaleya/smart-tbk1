<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incot extends Model
{
    /** @use HasFactory<\Database\Factories\IncotFactory> */
    use HasFactory;
    
    protected $guarded = ['id'];
}
