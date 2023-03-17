<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = "JP300";

        $customer = new Customer();
        $customer->name = "janka";
        $customer->email = "janka@gmail.com";

        $customer->Save();

        $customer->mobile()->Save($mobile);

        return redirect('/');
    }

    public function show_mobile_one_to_one($id){
        $mobile = Customer::find($id)->mobile;

        echo "<pre>";
        print_r($mobile->toArray());
        echo "</pre>";
        exit;

    }


}

