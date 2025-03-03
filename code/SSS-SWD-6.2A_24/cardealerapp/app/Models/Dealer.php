<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;


    //Enable mass assignment
    protected $fillable = ["name","email","phone","address"];
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
