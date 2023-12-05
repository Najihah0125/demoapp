<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{
    //homepage
    function index(){
        return view('/');
    }

    //create new purchase request - requestor details
    function createReq(Request $req){
        $purchase = new Requestor;
        $purchase->req_id = $req->req_id;
        $purchase->req_name = $req->req_name;
        $purchase->date = $req->date;
        $purchase->position = $req->position;
        $purchase->support = $req->support;
        $purchase->payment_term = $req->payment_term;
        $purchase->edd = $req->edd;
        $purchase->item_code = $req->item_code;
        $purchase->description = $req->description;
        $purchase->supplier = $req->supplier;
        $purchase->quantity = $req->quantity;
        $purchase->claim = $req->claim;
        $purchase->unit_price = $req->unit_price;
        $purchase->total_price = $req->total_price;
        $purchase->reason = $req->reason;
        $purchase->attachment = $req->attachment;

        $purchase->save();

        return redirect('/'); //nama url
    }

    function display(){
        $purchase = Requestor::paginate(5);
        return view('display', ['list'=>$purchase]);
    }
}
