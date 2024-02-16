<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feddback;

class feddback_crud extends Controller
{
    //
    public function feddback_search()
    {
        $info=feddback::all();
        $count=feddback::count();
        return view('Car_project.Admin.feedback',['info'=>$info,'count'=>$count]);
    }

    public function feddback_add_data(Request $req)
    {   
        $data=new feddback;
        $data->Your_Name=$req->name;
        $data->Location=$req->location;
        $data->Email_Id  =$req->email;
        $data->Phone=$req->phone;
        $data->Message=$req->message;

        $id=$data->save();
        if($id>0)
        {
            return redirect('contact');
        }
    }


    public function delete_data_feedback($id)
    {
        $data=feddback::find($id);
        $data->delete();
        return redirect('feedback');
    }
}
