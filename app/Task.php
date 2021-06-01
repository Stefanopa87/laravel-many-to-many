<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Employee;

class Task extends Model
{
    protected $fillable = [
    'name',
    ];

    // Location <-1------N-> Employee <-N------M-> Task

    // una task può essere svolta da più employees
    public function employees() {
        return $this -> belongsToMany(Employee::class);
    }


}
