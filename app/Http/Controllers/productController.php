<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class productController extends Controller
{
    public function home(){
        $data= Product::all();
        return view("product",["products"=>$data]);
     }

     public function details($id){
        $data=Product::find($id);
        return view('details',['products'=>$data]);
     }

     public function search(Request $req){
         // $data=Product::find(where='$req';)
         // return $req->input();

         $query = $req->input('query');
      $data = Product::where('name', 'like', '%' . $query . '%')->get();
   return view('search',['products'=>$data]);
     }



     public function cart(Request $req){
     if($req->session()->has('user')){
     
      $cart=new Cart();
      $cart->user_id=$req->session()->get('user')['id'];
      $cart->product_id=$req->product_id;
      $cart->save();
      return redirect("/home");

      }
      else{
         return redirect("/login");
      }
     }
    
}
