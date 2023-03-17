<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($customerID){
        $customer = Customer::find($customerID);


        echo "<pre>Customer: ";
        print_r($customer->toArray());
        echo "<br>Mobile: ";
        print_r($customer->mobile->toArray());
        echo "</pre>";
        // dd($customer->toArray());
        exit;

    }

    public function indexTest($customer){

        $customer = Customer::where('name', $customer)->get();
        echo "<pre>";
        print_r($customer->toArray());
        echo "</pre>";
        exit;


    }
}
