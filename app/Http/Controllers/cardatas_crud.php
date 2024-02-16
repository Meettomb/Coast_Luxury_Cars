<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cardatas;

class cardatas_crud extends Controller
{
    //
    public function add_cars(Request $req)
    {
        $filename1 = $req->file('front_img')->getClientOriginalName();
        $filename2 = $req->file('back_img')->getClientOriginalName();
        $filename3 = $req->file('side_img')->getClientOriginalName();
        $destinationPath = '/images';
        $req->file('front_img')->move(public_path($destinationPath),$filename1);
        $req->file('back_img')->move(public_path($destinationPath),$filename2);
        $req->file('side_img')->move(public_path($destinationPath),$filename3);
        $product = new cardatas();
        $product->F_Img=$filename1;
        $product->B_Img=$filename2;
        $product->S_Img=$filename3;

        $product->Car_Name=$req->car_name;
        $product->Brand_Name = $req->input('brand_name');
        // $product->Brand_Name=$req->brand_name;
        $product->Price=$req->price;
        $product->Price_Words=$req->price_words;
        
        $product->Engine_Type = $req->input('engin_type');
        // $product->Engine_Type=$req->engine_type;
        $product->Top_Speed=$req->top_speed;

        
        $product->Vehicle_Type = $req->input('car_type');
        // $product->Vehicle_Type=$req->vehicle_type;
        $product->Doors=$req->doors;
        $product->Seating_Capacity=$req->seating_capacity;
        $product->Manufacturing_Year=$req->manufacturing_year;
        // $product->Fuel_Type=$req->fuel;
        $product->Fuel_Type = $req->input('fule_type');

        $id=$product->save();
        if($id>0)
        {
            return redirect('cardatas_insert');
        }
    }
    

    public function search_cars(){
        $info=cardatas::all();
        $count = cardatas::count();
        // $info=cardatas::all();
        return view('Car_project.Admin.All_Product_Data',['info'=>$info,'count'=>$count]);
        
    }

    public function search_carstoindex(){
            $info=cardatas::paginate(15);
        return view('Car_project.index',['info'=>$info]);
    }
    


    public function search()
    {
        $search_text = $_GET['query'];
        $info = cardatas::where('Brand_Name','LIKE', '%'.$search_text.'%')
        ->orwhere('Car_Name','LIKE', '%'.$search_text.'%')
        ->orwhere('Vehicle_Type','LIKE', '%'.$search_text.'%')->get();

        return view('Car_project.search',compact('info'));    
    }





// ====================================== Footer Links Code ================================================


public function ferrai_cars(){
    $info=cardatas::where('Brand_Name','Ferrari')->get();
    return view('Car_project.Footer_links.Ferrari',['info'=>$info]);
    
}
public function Aston_Martin(){
    $info=cardatas::where('Brand_Name','Aston Martin')->get();
    return view('Car_project.Footer_links.Aston_Martin',['info'=>$info]);
}
public function audi(){
    $info=cardatas::where('Brand_Name','Audi')->get();
    return view('Car_project.Footer_links.Audi',['info'=>$info]);
}
public function Bentley(){
    $info=cardatas::where('Brand_Name','Bentley')->get();
    return view('Car_project.Footer_links.Bentley',['info'=>$info]);
}
public function Bugatti(){
    $info=cardatas::where('Brand_Name','Bugatti')->get();
    return view('Car_project.Footer_links.Bugatti',['info'=>$info]);
}
public function Bmw(){
    $info=cardatas::where('Brand_Name','Bmw')->get();
    return view('Car_project.Footer_links.Bmw',['info'=>$info]);
}
public function Chevrolet(){
    $info=cardatas::where('Brand_Name','Chevrolet')->get();
    return view('Car_project.Footer_links.Chevrolet',['info'=>$info]);
}
public function Ford(){
    $info=cardatas::where('Brand_Name','Ford')->get();
    return view('Car_project.Footer_links.Ford',['info'=>$info]);
}
public function Jaguar(){
    $info=cardatas::where('Brand_Name','Jaguar')->get();
    return view('Car_project.Footer_links.Jaguar',['info'=>$info]);
}
public function Koenigsegg(){
    $info=cardatas::where('Brand_Name','Koenigsegg')->get();
    return view('Car_project.Footer_links.Koenigsegg',['info'=>$info]);
}
public function Lamborghini(){
    $info=cardatas::where('Brand_Name','Lamborghini')->get();
    return view('Car_project.Footer_links.Lamborghini',['info'=>$info]);
}
public function Land_Rover(){
    $info=cardatas::where('Brand_Name','Land Rover')->get();
    return view('Car_project.Footer_links.Land Rover',['info'=>$info]);
}
public function Lexus(){
    $info=cardatas::where('Brand_Name','Lexus')->get();
    return view('Car_project.Footer_links.Lexus',['info'=>$info]);
}
public function Meserati(){
    $info=cardatas::where('Brand_Name','Maserati')->get();
    return view('Car_project.Footer_links.Meserati',['info'=>$info]);
}
public function Maybach(){
    $info=cardatas::where('Brand_Name','Mercedes')->get();
    return view('Car_project.Footer_links.Maybach',['info'=>$info]);
}
public function Mclaren(){
    $info=cardatas::where('Brand_Name','Mclaren')->get();
    return view('Car_project.Footer_links.Mclaren',['info'=>$info]);
}
public function Nissan(){
    $info=cardatas::where('Brand_Name','Nissan')->get();
    return view('Car_project.Footer_links.Nissan',['info'=>$info]);
}
public function Porsche(){
    $info=cardatas::where('Brand_Name','Porsche')->get();
    return view('Car_project.Footer_links.Porsche',['info'=>$info]);
}
public function Pagani(){
    $info=cardatas::where('Brand_Name','Pagani')->get();
    return view('Car_project.Footer_links.Pagani',['info'=>$info]);
}
public function Rolls_Royce(){
    $info=cardatas::where('Brand_Name','Rolls Royce')->get();
    return view('Car_project.Footer_links.Rolls-Royce',['info'=>$info]);
}
public function Volvo(){
    $info=cardatas::where('Brand_Name','Volvo')->get();
    return view('Car_project.Footer_links.Volvo',['info'=>$info]);
}


// ======================================== Footer Style Links ===========================================


public function Suv(){
    $info=cardatas::where('Vehicle_Type','Suv')->get();
    return view('Car_project.Footer_links.Style_links.Suv',['info'=>$info]);
}
public function Sedan(){
    $info=cardatas::where('Vehicle_Type','Sedan')->get();
    return view('Car_project.Footer_links.Style_links.Sedan',['info'=>$info]);
}
public function Convertible(){
    $info=cardatas::where('Vehicle_Type','Luxury Car')->get();
    return view('Car_project.Footer_links.Style_links.Convertible',['info'=>$info]);
}
public function Coupe(){
    $info=cardatas::where('Vehicle_Type','Coupe')->get();
    return view('Car_project.Footer_links.Style_links.Coupe',['info'=>$info]);
}
public function Sports(){
    $info=cardatas::where('Vehicle_Type','Sports')->orWhere('Vehicle_Type','Sports Car')->get();
    return view('Car_project.Footer_links.Style_links.Sports',['info'=>$info]);
}
public function Hyper(){
    $info=cardatas::where('Vehicle_Type','Hyper')->orWhere('Vehicle_Type','Hyper Car')->get();
    return view('Car_project.Footer_links.Style_links.Sports',['info'=>$info]);
}
public function Battery(){
    $info=cardatas::where('Fuel_Type','Battery')->orWhere('Vehicle_Type','Battery Car')->get();
    return view('Car_project.Footer_links.Style_links.Battery',['info'=>$info]);
}
    

// ============================================================================================================


    public function get_car_data($Id){
        $info=cardatas::find($Id);
        return view('Car_project.car_deatils',['info'=>$info]);
    }


    public function get_car_pay($Id){
        $info=cardatas::find($Id);
        return view('Car_project.pay_form',['info'=>$info]);
    }
 
    
 
    

//================================================ DELETE ===========================================


public function search_car(){
    $info=cardatas::all();
    $count = cardatas::count();
    return view('Car_project.Admin.cardata_delete',['info'=>$info,'count'=>$count]);
}

public function delete_data($Id)
{
    $data=cardatas::find($Id);
    $data->delete();
    return redirect('cardata_delete');
}


// =============================================== EDIT ================================================


// public function search_carsedit(){
//     $data=cardatas::all();
// return view('Car_project.Admin.cardata_edit_alldata',['data'=>$data]);
// }
public function get_all(){
    $data=cardatas::all();
    $count = cardatas::count();
    return view('Car_project.Admin.cardata_edit_alldata',['data'=>$data,'count'=>$count]);
}

public function get_data($Id){
    $data=cardatas::find($Id);
    // return $data;
    return view('Car_project.Admin.cardata_edit_insert',['data'=>$data]);
}
public function update_data(Request $req){
    $data=cardatas::find($req->id);

    $data->Car_Name=$req->car_name;
    $data->Brand_Name=$req->brand_name;
    $data->Price=$req->price;
    $data->Price_Words=$req->price_words;
    $data->Engine_Type=$req->engine_type;
    $data->Top_Speed=$req->top_speed;
    $data->Vehicle_Type=$req->vehicle_type;
    $data->Doors=$req->doors;
    $data->Seating_Capacity=$req->seating_capacity;
    $data->Manufacturing_Year=$req->manufacturing_year;
    $data->Fuel_Type=$req->fuel;
    

    $Id=$data->save();
    return redirect('edit');
}


}