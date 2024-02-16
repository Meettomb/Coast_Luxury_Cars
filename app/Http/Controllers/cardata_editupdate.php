<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cardatas;

class cardata_editupdate extends Controller
{
    //

    public function search_cars(){
        $info=cardatas::all();
        return view('Car_project.Admin.cardata_delete',['info'=>$info]);
    }

    public function delete_data($Id)
    {
        $data=cardatas::find($Id);
        $data->delete();
        return redirect('cardata_delete');
    }


    // public function search_carsedit(){
    //     $data=cardatas::all();
    // return view('Car_project.Admin.cardata_edit_alldata',['data'=>$data]);
    // }
    public function get_all(){
        $data=cardatas::all();
        return view('Car_project.Admin.cardata_edit_alldata',['data'=>$data]);
    }

    public function get_data($Id){
        $data=cardatas::find($Id);
        // return $data;
        return view('Car_project.Admin.cardata_edit_insert',['data'=>$data]);
    }
    public function update_data(Request $req){
//        return "hello";
        //$filename1 = $req->file('front_img')->getClientOriginalName();
        //$filename2 = $req->file('back_img')->getClientOriginalName();
        //$filename3 = $req->file('side_img')->getClientOriginalName();
        //$destinationPath = '/images';
        // $req->file('front_img')->move(public_path($destinationPath),$filename1);
        // $req->file('back_img')->move(public_path($destinationPath),$filename2);
        // $req->file('side_img')->move(public_path($destinationPath),$filename3);
        $data=cardatas::find($req->id);
        //return $req->brand_name;
        //$data->Id=$req->id;
        //return $req->car_name;
        $data->Car_Name=$req->car_name;
        $data->Brand_Name=$req->brand_name;
        $data->Price=$req->price;
        $data->Engine_Type=$req->engine_type;
        $data->Top_Speed=$req->top_speed;
        $data->Vehicle_Type=$req->vehicle_type;
        $data->Doors=$req->doors;
        $data->Seating_Capacity=$req->seating_capacity;
        $data->Manufacturing_Year=$req->manufacturing_year;
        $data->Fuel_Type=$req->fuel;
        $Id=$data->save();
        return $data;
        
        return redirect('edit');
    }
}
