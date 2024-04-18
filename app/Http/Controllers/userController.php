<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class userController extends Controller
{
 


   public function index(Request $req){
   $user= User::where(['email'=>$req->email])->first();
     if(!$user || !Hash::check($req->password,$user->password)){
        return view('error');
     }
     else{
        $req->session()->put('user',$user);
        return redirect("/home");
     }
   }
}
