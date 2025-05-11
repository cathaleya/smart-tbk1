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

    public function tipekendaraan()
    {
        return $this->belongsTo(VehicleType::class, 'type_kend');
    }


    public function jenissuratjalan()
    {
        return $this->belongsTo(JenisSuratJalan::class, 'type_sj');
    }
    public function incotrelation()
    {
        return $this->belongsTo(Incot::class, 'incot');
    }

    public function ekspedisi()
    {
        return $this->hasOne(Ekspedisi::class);
    }
}
