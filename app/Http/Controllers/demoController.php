<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{

    //get - display list of purchase req
    function listPurchaseReq(){
        return Purchase::all();
    }

    //search specific purchase req - for update & delete button
    function findPurchaseReqId($purchase_id){
        return Purchase::find($purchase_id);
    }

    //search specific purchase req - for users to search (search bar)
    function findPurchaseReqName($name){
        return Purchase::where("name", "like", "%".$name."%")->get();
    }

    //homepage
    // function index(){
    //     $purchase = Purchase::paginate(5);
    //     return view('home', ['list'=>$purchase]);
    // }

    //create new purchase request - requestor details
    function createReq(Request $req){

        $purchase = new Purchase;
        //id stay hidden sebab dia auto inc
        $purchase->purchase_id = $req->purchase_id;
        $purchase->name = $req->name;
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
        // // $purchase->attachment = $req->attachment;

        $result = $purchase->save();

        if($result){
            return ["Result"=>"Data has been submitted!"];
        }
        else{
            return ["Result"=>"Operation failed!"];
        }

        
        // return redirect('home'); //nama url
    }

    //display list of purchase req
    function displayPurchase(){
        $purchase = Purchase::paginate(5);
        return view('home', ['list'=>$purchase]);
    }

    //search purchase req to be updated
    function toUpdPurchase($purchase_id){
        $purchase = Purchase::find($purchase_id);
        return view('updateForm', ['x'=>$purchase]);
    }

    //update purchase req @ form
    function updatePurchase(Request $req){
        $purchase = Purchase::find($req->purchase_id);
        $purchase->purchase_id = $req->purchase_id;
        $purchase->name = $req->name;
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
        // $purchase->attachment = $req->attachment;

        $result = $purchase->save();

        if($result){
            return ["Result"=>"Data has been updated!"];
        }
        else{
            return ["Result"=>"Operation failed!"];
        }

        // return redirect('home');
    }

    //delete purchase req - for delete button
    function deletePurchase($id){
        $purchase = Purchase::find($id);
        $purchase->delete();
        return redirect('home');
    }
}
