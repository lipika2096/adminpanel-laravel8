<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = array(
        "name"=>"Lipika",
        "email"=>"lipika.software@gmail.com",
        "phone"=>"+91 9996149081"
        ); //array pass
        return view('layoutdashboard', compact('name','users'));
    }

    public function addcategory() {
        return view('addcategory');
    }
}
