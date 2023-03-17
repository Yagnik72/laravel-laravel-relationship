<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    // One to one
    public function car(){
        return $this->hasOne(Car::class);
    }

    // One to many
    public function cars(){
        return $this->hasMany(Car::class);
    }


    // Has One through
    public function owner(){
        return $this->hasOneThrough(Owner::class, Car::class);
    }

    // Has Many through
    public function owners(){
        return $this->hasManyThrough(Owner::class, Car::class);
    }


}
