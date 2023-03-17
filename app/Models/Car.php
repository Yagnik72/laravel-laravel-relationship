<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // ONe to one
    public function owner(){
        return $this->hasOne(Owner::class);
    }

    // Has One many
    public function owners(){
        return $this->hasMany(Owner::class);
    }

}
