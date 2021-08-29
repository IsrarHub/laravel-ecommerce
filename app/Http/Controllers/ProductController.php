<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    //
    public function index(){
        $product=Product::all();
        return view('Product',compact('product'));
    }
    public function details($id){
      $product= Product::find($id);
      return view('detail',compact('product'));
    }
    public function search(Request $req){
      $search=Product::where('name','like', "%".$req->input('search')."%")->get();
      return view('search',compact('search'));
    }
    public function addTocart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart();
            $cart->product_id=$req->product_id;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    public static function cartItem(){
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();

    }
}

