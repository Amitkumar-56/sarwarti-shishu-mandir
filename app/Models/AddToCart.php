<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class AddToCart extends Model
{

        protected $table = 'add_to_cart';

        public function AddToCartItem($request){
          $data = new AddToCart();
          $data->userid = Session::get('cartid');
          $data->title = $request->title;
          $data->price = $request->price;

          $data->productid = $request->id;
          $data->qty = $request->qty;
          if($data->save()){
              return true;
          } else {
              return false;
          }
        }

        public function AddToCartItem1($request){
            $data = new AddToCart();
            $data->userid = Session::get('users')['id'];
            $data->type = $request->typevendor;
            $data->title = $request->title;
            $data->price = $request->price;

            $data->productid = $request->id;
            $data->qty = $request->qty;
            if($data->save()){
                return true;
            } else {
                return false;
            }
          }
        // update cart item
        public function UpdateCartItem($request){
            $data = AddToCart::where('productid',$request->id)->first();
            $data->userid = Session::get('cartid');
            $data->title = $request->title;
            $data->price = $request->price;

            $data->productid = $request->id;
            $data->qty = $request->qty;
            if($data->save()){
                return true;
            } else {
                return false;
            }
        }
        public function UpdateCartItem1($request){
            $data = AddToCart::where('productid',$request->id)->first();
            $data->userid = Session::get('users')['id'];
            $data->title = $request->title;
            $data->price = $request->price;
            $data->productid = $request->id;
            $data->qty = $request->qty;
            if($data->save()){
                return true;
            } else {
                return false;
            }
        }
        // chekitem product
        public function CartChekItem($request,$cartid){
            $chack = AddToCart::where('userid',$cartid)
            ->Where('productid',$request->id)->get();
            if(count($chack) > 0){
               return true;
            } else {
                return false;
            }
        }

}
