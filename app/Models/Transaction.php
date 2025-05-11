<?php

namespace App\Models;

use App\Models\Sloc;
use App\Models\ItemUnit;
use App\Models\Material;
use App\Models\Transport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $guarded = ['id'];



    public function material()
    {
        return $this->belongsTo(Material::class, 'kode_material');
    }

    public function su()
    {
        return $this->belongsTo(ItemUnit::class, 'su');
    }

    public function slocrelation()
    {
        return $this->belongsTo(Sloc::class, 'sloc');
    }

    public function itemunit()
    {
         return $this->belongsTo(ItemUnit::class, 'su');
    }

    public function tipecustomer()
    {
         return $this->belongsTo(CustomerType::class, 'type_customer');
    }
    

    public function transport()
    {
        return $this->belongsTo(Transport::class,'transport_id');
    }
}
