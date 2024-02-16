<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginclint;

class Crud extends Controller
{
    //

    public function search(){
        $info=loginclint::all();
        $count = loginclint::count();
        return view('Car_project.Admin.customer_login_list',['info'=>$info,'count'=>$count]);
    }

    public function add_data(Request $req){
        $data=new loginclint;
        $data->Full_Name=$req->Full_Name;
        $data->Email_Id=$req->Email_Id;
        $data->Phone_Number=$req->Phone_Number;
        $data->Birth_Date=$req->Birth_Date;
        $data->Gender=$req->Gender;
        $data->Password=$req->Password;
        $data->Role=$req->Role;
        $data->save();
            return redirect('login');
    }

    public function delete_data($id)
{
    $data=loginclint::find($id);
    $data->delete();
    return redirect('customer_login_list');
}

    
}
