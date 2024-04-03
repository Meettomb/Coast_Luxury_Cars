<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Car_project.home');
});

Route::get('/home',function (){
    return view('Car_project.home');
});

Route::get('admin_home_page',function (){
    return view('Car_project.Admin.admin_home_page');
});

Route::get('regi',function(){
    return view('Car_project.regi');
});

Route::get('teem',function(){
    return view('Car_project.teem');
});

Route::get('showroom',function(){
    return view('Car_project.showroom');
});



Route::get('about',function(){
    return view('Car_project.about');
});

Route::get('Career',function(){
    return view('Car_project.Career');
});

Route::get('whyus',function(){
    return view('Car_project.whyus');
});





Route::get('customer_login_list','App\Http\Controllers\Crud@search');


Route::get('cardatas_insert',function(){
    return view('Car_project.Admin.cardatas_insert');
}); 


Route::post('cardatas_insert','App\Http\Controllers\cardatas_crud@add_cars'); //Add Car Data
Route::get('All_Product_Data','App\Http\Controllers\cardatas_crud@search_cars'); //Search Data in Admin Side

Route::get('index','App\Http\Controllers\cardatas_crud@search_carstoindex'); //Search Data in Clint Side

Route::view('regi','Car_project.regi');
Route::post('regi','App\Http\Controllers\login_crud@insert_data');

//Route::view('index','Car_project.index');

Route::get('login',function(){
    if(session()->has('user')){
        return redirect('index');
    }
    
    return view('Car_project.login');
});

Route::post('login','App\Http\Controllers\login_crud@index_crud');
Route::get('logout',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    
    return redirect('home');
});




// Route::get('cardata_edit','App\Http\Controllers\cardatas_crud@search_carsedit');



// Route::get('Ferrari',function(){
//     return view('Car_project.Ferrari');
// });



Route::get('search','App\Http\Controllers\cardatas_crud@search');

// Route::get('All_Product_Data_search','App\Http\Controllers\cardatas_crud@search_all_data');


// Route::get('search','App\Http\Controllers\cardatas_crud@search_all_data');



Route::get('Ferrari','App\Http\Controllers\cardatas_crud@ferrai_cars');
Route::get('Aston_Martin','App\Http\Controllers\cardatas_crud@Aston_Martin');
Route::get('Audi','App\Http\Controllers\cardatas_crud@audi');
Route::get('Bentley','App\Http\Controllers\cardatas_crud@Bentley');
Route::get('Bugatti','App\Http\Controllers\cardatas_crud@Bugatti');
Route::get('Bmw','App\Http\Controllers\cardatas_crud@Bmw');
Route::get('Chevrolet','App\Http\Controllers\cardatas_crud@Chevrolet');
Route::get('Ford','App\Http\Controllers\cardatas_crud@Ford');
Route::get('Jaguar','App\Http\Controllers\cardatas_crud@Jaguar');
Route::get('Koenigsegg','App\Http\Controllers\cardatas_crud@Koenigsegg');
Route::get('Lamborghini','App\Http\Controllers\cardatas_crud@Lamborghini');
Route::get('Land Rover','App\Http\Controllers\cardatas_crud@Land_Rover');
Route::get('Lexus','App\Http\Controllers\cardatas_crud@Lexus');
Route::get('Meserati','App\Http\Controllers\cardatas_crud@Meserati');
Route::get('Maybach','App\Http\Controllers\cardatas_crud@Maybach');
Route::get('Mclaren','App\Http\Controllers\cardatas_crud@Mclaren');
Route::get('Nissan','App\Http\Controllers\cardatas_crud@Nissan');
Route::get('Porsche','App\Http\Controllers\cardatas_crud@Porsche');
Route::get('Pagani','App\Http\Controllers\cardatas_crud@Pagani');
Route::get('Rolls-Royce','App\Http\Controllers\cardatas_crud@Rolls_Royce');
Route::get('Volvo','App\Http\Controllers\cardatas_crud@Volvo');




Route::get('Suv','App\Http\Controllers\cardatas_crud@Suv');
Route::get('Sedan','App\Http\Controllers\cardatas_crud@Sedan');
Route::get('Convertible','App\Http\Controllers\cardatas_crud@Convertible');
Route::get('Coupe','App\Http\Controllers\cardatas_crud@Coupe');
Route::get('Sports','App\Http\Controllers\cardatas_crud@Sports');
Route::get('Hyper','App\Http\Controllers\cardatas_crud@Hyper');
Route::get('Battery','App\Http\Controllers\cardatas_crud@Battery');




// Route::post('user_cardatas_insert','App\Http\Controllers\user_cardatas_crud@add_user_cars');


Route::view('user_cardatas_insert','Car_project.user_cardatas_insert');


Route::post('user_cardatas_insert','App\Http\Controllers\user_cardatas_crud@add_user_cars');
Route::get('user_cars','App\Http\Controllers\user_cardatas_crud@search_user_cars');
Route::get('used_cars','App\Http\Controllers\user_cardatas_crud@used_cars');









Route::get('car_deatils/{Id}','App\Http\Controllers\cardatas_crud@get_car_data');
Route::get('pay_form/{Id}','App\Http\Controllers\cardatas_crud@get_car_pay');


Route::get('cardata_delete','App\Http\Controllers\cardatas_crud@search_car'); //Search Data in Delete Page
Route::get('cardata_delete/{Id}','App\Http\Controllers\cardatas_crud@delete_data');


// ======================================= EDIT ===================================================


Route::get('edit/{Id}','App\Http\Controllers\cardatas_crud@get_data');
Route::get('edit','App\Http\Controllers\cardatas_crud@get_all');
Route::post('edit','App\Http\Controllers\cardatas_crud@update_data');
// =============================================================================

Route::post('pay_form','App\Http\Controllers\payments_crud@payments_add_data');

Route::get('paymet_data','App\Http\Controllers\payments_crud@payments_search');
Route::get('paymet_data/{id}','App\Http\Controllers\payments_crud@delete_book_car');



Route::get('contact',function(){
    return view('Car_project.contact');
});

Route::post('contact','App\Http\Controllers\feddback_crud@feddback_add_data');
Route::get('feedback','App\Http\Controllers\feddback_crud@feddback_search');

// ====================================================================================

Route::get('feedback/{id}','App\Http\Controllers\feddback_crud@delete_data_feedback');





// Route::get('receipt',function(){
//     return view('Car_project.receipt');
// });



Route::get('done',function(){
    return view('Car_project.done');
});

Route::get('search_receipt',function(){
    return view('Car_project.search_receipt');
});

Route::get('receipt_find','App\Http\Controllers\payments_crud@search');


Route::get('receipt/{id}','App\Http\Controllers\payments_crud@get_pay_data');

// ========================================================================================

Route::get('expcars_insert',function(){
    return view('Car_project.Admin.expcars_insert');
}); 


Route::post('expcars_insert','App\Http\Controllers\expcars_crud@add_cars'); //Add Car Data

Route::get('expcars_data','App\Http\Controllers\expcars_crud@search_cars'); //Search Data in Admin Side
Route::get('home','App\Http\Controllers\expcars_crud@search_cars_home'); //Search Data in Admin Side
