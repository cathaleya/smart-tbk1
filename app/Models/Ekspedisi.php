<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    /** @use HasFactory<\Database\Factories\EkspedisiFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function logs()
    {
        return $this->hasMany(EkspedisiLogs::class);
    }

    public function status()
    {
        return $this->belongsTo(EkspedisiStatus::class,'ekspedisi_status_id');
    }
}
