<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class admin extends Model
{
    public function GetallData($table){
        $data = DB::table($table)->orderBy('id','DESC')->get();
        return $data;
    }

    public function insertdata($table,$data){
        $data = DB::table($table)->insert($data);
        return $data;
    }
    public function EditeItem($table,$id){
        $data = DB::table($table)->where('id',$id)->first();
        return $data;
    }
      public function EditItem($table,$fild,$id=""){
          $result = DB::table($table)->where($fild,$id)->first();
          return $result;
      }
    public function RemoveItem($table,$id){
        $data = DB::table($table)->where('id',$id)->delete();
        return $data;
    }
     public function RemoveData($table,$id){
          $result = DB::table($table)->delete($id);
          return $result;
      }

    public function insertdatagetid($table,$data){
        $data = DB::table($table)->insertGetId($data);
        return $data;
    }
    public function UpdateItem($table,$id,$data){
        $data =  DB::table($table)->where('id',$id)->update($data);
        return $data;
     }
     public function getdatabycoluman($table,$columname,$name){
        $data = DB::table($table)->where($columname,$name)->get();
        return $data;
    }
    public function checkduplicateentry($table,$fieldName,$name){
        $data = DB::table($table)->where($fieldName,$name)->first();
        return $data;
    }
    public function GetbyDataCondition($table,$data){
          $result = DB::table($table)->where($data)->orderBy('id','DESC')->get();
          return $result;
    }
    public function getdatabycolumansingal($table,$columname,$name){
     $data = DB::table($table)->where($columname,$name)->first();
     return $data;
    }
    public function getdatabycolumanlimit($table,$columname,$name){
     $data = DB::table($table)->where($columname,$name)->offset(0)->limit(10)->orderBy('id', 'DESC')->get();
            return $data;
    }
    public function gallery($id="",$request){
        $i = 1;
        $image = $request->file('image');
        if(is_array($image)){
            foreach ($image as $files) {
                $destinationPath = 'public/admin/images';
                $file_name = $i.time() . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $file_name);
                $data = new gallery();
                $data->image = $file_name;
                $data->productid = $id;
                $data->save();
                $i++;
            }
        }
    }

}
