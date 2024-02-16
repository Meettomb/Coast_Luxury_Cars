<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;

class payments_crud extends Controller
{
    //
    public function payments_search()
    {
        $info=payments::all();
        $count = payments::count();
        return view('Car_project.Admin.paymet_data',['info'=>$info,'count'=>$count]);
    }

    public function delete_book_car($id)
    {
        $info=payments::find($id);
        $info->delete();
        return redirect('paymet_data');
    }

    public function payments_add_data(Request $req)
    {   
        $data=new payments;
        $data->Full_Name=$req->firstname;
        $data->Email_Id=$req->email;
        $data->Address=$req->address;
        $data->City=$req->city;
        $data->State=$req->state;
        $data->Zip=$req->zip;
        $data->Car_Name=$req->carname;
        $data->Price=$req->price;
        $data->Price_Words=$req->price_words;

        $data->Engine=$req->engin;
        $data->Top_Speed=$req->speed;
        $data->Fuel=$req->fuel;
        $data->Brand_Name=$req->brande;
        $data->Vehicle_Type=$req->type;
        $data->Doors=$req->doors;
        $data->Seating_Capacity=$req->seating;
        $data->Manufacturing_Year=$req->year;

        $data->Card_Holder_Name=$req->cardname;
        $data->Card_Number=$req->cardnumber;
        $data->Exp_Month=$req->expmonth;
        $data->Exp_Year=$req->expyear;
        $data->Cvv=$req->cvv;

        $id=$data->save();
        return redirect('done');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $info = payments::where('Card_Number','LIKE', '%'.$search_text.'%')->get();

        return view('Car_project.receipt_find',compact('info'));    
    }

    public function get_pay_data($id){
        $info=payments::find($id);
        return view('Car_project.receipt',['info'=>$info]);
    }
   
}
