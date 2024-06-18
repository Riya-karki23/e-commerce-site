<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Session;

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
      $data = Product::where('name', 'like', '%' . $query . '%')
                   ->orWhere('category', 'like', '%' . $query . '%')
                   ->orWhere('description', 'like', '%' . $query . '%')
                   ->get();
   return view('search',['products'=>$data]);
     }



     public function cart(Request $req){
     if($req->session()->has('user')){
     
      $cart=new Cart();
      $cart->user_id=$req->session()->get('user')['id'];
      $cart->product_id=$req->product_id;
      $cart->save();
      return redirect("/cartList");

      }
      else{
         return redirect("/login");
      }
     }


     static function cartItem(){

     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
     }

     public function cartList(){
      $userId=Session::get('user')['id'];
     $cartList= DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->select('products.*')
      ->where('cart.user_id',$userId)
      ->get();

      return view("cartList",['cartItem'=>$cartList]);

     }

     public function removeItem($id){
      Cart::where('product_id', $id)->delete();
         return redirect("/cartList");
     }

     public function order(){
      $userId=Session::get('user')['id'];
     $total= DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->where('cart.user_id',$userId)
       ->sum('products.price');
 
      return view('order',['total'=>$total]);
     }


     public function orderSuccess(){
      return view('orderSuccess');
     }
}
