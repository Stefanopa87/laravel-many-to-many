<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Employee;

class Location extends Model
{
   protected $fillable = [
   'street',
   'state',
   ];

   // Location <-1------N-> Employee <-N------M-> Task

   // in una location ci stanno tanti employees
   public function employees(){
      return $this -> hasMany(Employee::class);
   }

}
