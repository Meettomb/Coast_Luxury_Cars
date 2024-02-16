<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Data</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\.png')}}">
    <link rel="stylesheet" href="{{asset('CSS\Admin\payment.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    @include('Car_project/Admin/admin_header')
    
<div class="con">
<div class="container1">
        <div class="search">
            <input type="search" name="search" id="myInput" onkeyup="search()" placeholder="Search Data" autocomplete="off">               
        </div>
        <div class="count">
            <span>Total Data:</span>
            <p>{{$count}}</p>
        </div>
</div>

<div class="scrrol">
<table class="table1" id="product-list">
    <tr class="tr1">
        <th>id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Street</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Car Name</th>
        <th>Price</th>
        <th>Price Cr</th>
        <th>Engine</th>
        <th>Top Speed</th>
        <th>Fuel</th>
        <th>Brand Name</th>
        <th>Vehicle Type</th>
        <th>Doors</th>
        <th>Seating Capacity</th>
        <th>Manufacturing Year</th>
        <th>Card Holder Name</th>
        <th>Card Number</th>
        <th>Exp Month</th>
        <th>Exp Year</th>
        <th>Cvv</th>
        <th>Action</th>
            
        </tr>
        <!-- <tbody class="myTable"> -->
        @foreach($info as $in)
            <tr class="tr2">
                <td>{{$loop->iteration}}</td>
                <td>{{$in->Full_Name}}</td>   
                <td>{{$in->Email_Id}}</td>   
                <td>{{$in->Address}}</td>   
                <td>{{$in->City}}</td>   
                <td>{{$in->State}}</td>   
                <td>{{$in->Zip}}</td>   
                <td>{{$in->Car_Name}}</td>   
                <td>{{$in->Price}}</td>   
                <td>{{$in->Price_Words}} Cr</td>   
                <td>{{$in->Engine}}</td>   
                <td>{{$in->Top_Speed}}</td>   
                <td>{{$in->Fuel}}</td>   
                <td>{{$in->Brand_Name}}</td>   
                <td>{{$in->Vehicle_Type}}</td>   
                <td>{{$in->Doors}}</td>   
                <td>{{$in->Seating_Capacity}}</td>   
                <td>{{$in->Manufacturing_Year}}</td>   
                <td>{{$in->Card_Holder_Name}}</td>   
                <td>{{$in->Card_Number}}</td>   
                <td>{{$in->Exp_Month}}</td>   
                <td>{{$in->Exp_Year}}</td>   
                <td>{{$in->Cvv}}</td>    
                <td><a class="button" href="/paymet_data/{{$in->id}} #popup1" title="Delete"><h2><i class="fa fa-trash-o"></i></h2></a></td>
            </tr>
        @endforeach
        <!-- </tbody> -->
        
    </table>
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Data deleted successfully</h2>
                <a class="close" href="#">&times;</a>       
            </div>
        </div>
    </div>
    
</div>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){
            var value = $(this).val().toLowerCase();
            $(".tr2").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);                      
            });
        });
    });
    
</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function(){	
        $(".tr2:odd").css({"background-color":"#222"});
        $(".tr2:even").css({"background-color":"#111"});    
    });
</script>

</body>
</html>