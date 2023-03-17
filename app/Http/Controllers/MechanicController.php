<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{

    public function  add_mechanic(){
        $mechanic = new Mechanic();
        $mechanic->name = "Mechanic 02";
        $mechanic->save();
    }
}
