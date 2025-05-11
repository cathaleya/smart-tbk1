<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkspedisiStatus extends Model
{
    /** @use HasFactory<\Database\Factories\EkspedisiStatusFactory> */
    use HasFactory;
    protected $guarded = ['id'];
}
