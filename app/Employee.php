<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Task;
use App\Location;

class Employee extends Model
{
    protected $fillable = [
    'firstname',
    'lastname',
    //chiave esterna
    'location_id',
    ];

    // Location <-1------N-> Employee <-N------M-> Task

    // tante tasks vengono gestite da tanti employees
    public function tasks() {
        return $this -> belongsToMany(Task::class);
    }

    // l'employee lavora in una location
    public function location(){
        return $this -> belongsTo(Location::class);
    }

}
