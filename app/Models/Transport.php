<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    /** @use HasFactory<\Database\Factories\TransportFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function transporter()
    {
        return $this->belongsTo(Transporter::class);
    }


}
