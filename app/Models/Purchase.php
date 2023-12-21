<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function purchase_item(){
        return $this->hasMany(Purchase_item::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
