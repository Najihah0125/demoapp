<?php

namespace App\Http\Controllers;
use App\Http\Models\Purchase;

use Illuminate\Http\Request;

class dummyapi extends Controller
{
    function getData(){
        return ["name"=>"testing"];
    }

    //test api get
    function getList(){
        return Purchase::all();
    }
}
