<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class customerController extends Controller


{
    public function index(){

$coustmer = User::where('role','customer')->get();
   return view('customers.index')->with('customers',$coustmer);
    }
}
