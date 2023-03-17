<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // onr to one
    public function mobile(){
        return $this->hasOne(Mobile::class);
    }
}
