<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Student extends Model
{
   protected $fillable = ["name", "email", "phone", "address", "date_of_birth"];


   protected $casts = [
       "date_of_birth" => "date"
   ];


   function age(): Attribute
   {
       return Attribute::make(
           get: fn() => $this->date_of_birth?->age
       );
   }
}
