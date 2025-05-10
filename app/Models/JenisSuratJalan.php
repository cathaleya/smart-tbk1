<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSuratJalan extends Model
{
    /** @use HasFactory<\Database\Factories\JenisSuratJalanFactory> */
    use HasFactory;

    protected $guarded = ['id'];
}
