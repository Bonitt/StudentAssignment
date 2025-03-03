<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //Enable mass assignment
    protected $fillable = ["make", "model", "year", "colour", "price", "dealer_id"];

    public function dealer(){
        return $this->belongsTo(Dealer::class);
    }
}
