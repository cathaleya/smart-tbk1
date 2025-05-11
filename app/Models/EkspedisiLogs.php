<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkspedisiLogs extends Model
{
    /** @use HasFactory<\Database\Factories\EkspedisiLogsFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    public function ekspedisi()
    {
        return $this->belongsTo(Ekspedisi::class);
    }
}
