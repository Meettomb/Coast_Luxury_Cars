<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_cardatas;

class user_cardatas_crud extends Controller
{
    //

    public function add_user_cars(Request $req)
    {
        $filename1 = $req->file('front_img')->getClientOriginalName();
        $filename2 = $req->file('back_img')->getClientOriginalName();
        $filename3 = $req->file('side_img')->getClientOriginalName();
        $destinationPath = '/images';
        $req->file('front_img')->move(public_path($destinationPath),$filename1);
        $req->file('back_img')->move(public_path($destinationPath),$filename2);
        $req->file('side_img')->move(public_path($destinationPath),$filename3);
        $product = new user_cardatas();
        $product->F_Img=$filename1;
        $product->B_Img=$filename2;
        $product->S_Img=$filename3;

        $product->Car_Name=$req->car_name;
        $product->Brand_Name=$req->brand_name;
        $product->Price=$req->price;
        $product->Engine_Type=$req->engine_type;
        $product->Top_Speed=$req->top_speed;
        $product->Vehicle_Type=$req->vehicle_type;
        $product->Doors=$req->door;
        $product->Seating_Capacity=$req->seating_capacity;
        $product->Manufacturing_Year=$req->manufacturing_year;
        $product->Fuel_Type=$req->fuel;

        $id=$product->save();
        if($id>0)
        {
            return redirect('user_cardatas_insert');
        }
    }

    public function search_user_cars(){
        // $info=user_cardatas_crud::paginate(10);
        $info=user_cardatas::all();
        return view('Car_project.Admin.user_cars',['info'=>$info]);
        
    }

    public function used_cars(){
        // $info=user_cardatas_crud::paginate(10);
        $info=user_cardatas::all();
        return view('Car_project.used_cars',['info'=>$info]);
        
    }
}
