<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show_customer_one_to_one_inverse($id){
        $customer = Mobile::find($id)->customer;

        echo "<pre>";
        print_r($customer->toArray());
        echo "</pre>";
        exit;

    }
}
