<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldItem extends Model
{
    use HasFactory;

    public function merchandise(){
        return $this->belongsTo(Merchandise::class);
    }

    public function sale(){
        return $this->belongsTo(Sale::class);
    }

}
