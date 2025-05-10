<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function incot()
    {
        return $this->belongsTo(Incot::class, 'incot');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'kode_material');
    }

    public function su()
    {
        return $this->belongsTo(ItemUnit::class, 'su');
    }

    public function typesj()
    {
        return $this->belongsTo(JenisSuratJalan::class, 'type_sj');
    }
    public function typekend()
    {
        return $this->belongsTo(VehicleType::class, 'type_kend');
    }
    public function sloc()
    {
        return $this->belongsTo(Sloc::class, 'sloc');
    }
}
