<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginclint;
use Illuminate\Support\Facades\Hash;

class login_crud extends Controller
{
    //
    public function insert_data(Request $req)
    {
        if($req->Password==$req->C_Password)
        {
            $info=new loginclint;
            $info->Full_Name=$req->user;
            $info->Email_Id=$req->Email_Id;
            $info->Phone_Number=$req->Phone_Number;
            $info->Birth_Date=$req->Birth_Date;
            $info->Gender=$req->Gender;
            $info->Password=Hash::make($req->Password);
            $id=$info->save();
            
            return view('Car_project.login');
            if($id>0)
            {
                $req -> session()->put('user',$req->user);
                return redirect('index');
            }
            else{
                return redirect()->back()->withErrors(['failure'=>'Password And Confirm Password Must Be Same.']);
            }
        }
    }

    public function index_crud(Request $req)
    {
        $data=loginclint::where('Email_Id',$req->user)->get();
        //return $data;
        $logorout="";
        if($data->isNotEmpty())
        {
            if(Hash::check($req->Password,$data[0]->Password))
            {
                if($data[0]->Role=='user')
                {
                    $req->session()->put('user',$data[0]->Full_Name);
                    return redirect('index');
                }
                if($data[0]->Role=='admin')
                {
                    $req->session()->put('user','admin');
                    return redirect('admin_home_page');
                }
            }
            else
            {
                return redirect()->back()->withErrors(['failure'=>'Invalid Username Or Password.']);
            }
        }
    }
}
