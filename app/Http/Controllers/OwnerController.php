<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function add_owner($car_id){
        $car = Car::find($car_id);

        $owner = new Owner();
        $owner->name = "zohn";
        // $owner->save();

        $car->owner()->save($owner);
    }


    // Get Owner based on mechanic ID
    public function show_mechanic_to_owner_data($mechanic_id){
        $mechanic = Mechanic::find($mechanic_id);
        $car = Mechanic::find($mechanic_id)->cars ? Mechanic::find($mechanic_id)->cars : Mechanic::find($mechanic_id)->car ;

        $owner = Mechanic::find($mechanic_id)->car->owners;
        $owner_hasOneThrough = Mechanic::find($mechanic_id)->owners;
        // $owner_hasOneThrough = Mechanic::find($mechanic_id)->owner;

        echo "<pre>Mechanic: ";
        print_r($mechanic->toArray());
        echo "</pre>";

        echo "<pre>Car`s: ";
        print_r($car->toArray());
        echo "</pre>";


        echo "<pre>Owner: ";
        print_r($owner->toArray());
        echo "</pre>";

        echo "<pre>owner has 'One','Many' Through: ";
        print_r($owner_hasOneThrough->toArray());
        echo "</pre>";
        exit;


    }
}
