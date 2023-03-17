<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function add_car($mechanic_id){
        $mechanic = Mechanic::find($mechanic_id);
        $car = new Car();
        $car->model = "AUDI";

        $mechanic->car()->save($car);
    }
}
