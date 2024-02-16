<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\Admin\All_Product_data.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .button{
            padding: 10px;
            border-radius: 10px;
            color:red;
            font-size:18px;
        }
        .fa{
            color: white;
            background-color: red;
            padding: 10px;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    @include('Car_project/Admin/admin_header')

    <div class="container1">
    <div class="search">
            <input type="search" name="search" id="myInput" onkeyup="search()" placeholder="Search Data" autocomplete="off">           
            
        </div>
        <div class="count">
            <span>Total Data:</span>
            <p>{{$count}}</p>
        </div>
    </div>

        <table class="table1">
            <tr class="tr1">
                <th>id</th>
                <th>Front Image</th>
                <th>Back Image</th>
                <th>Side Image</th>
                <th>Car Name</th>
                <th>Brand Name</th>
                <th>Price</th>
                <th>Price In Cr</th>
                <th>Engine Type</th>
                <th>Top Speed</th>
                <th>Vehicle Type</th>
                <th>Doors</th>
                <th>Seating Capacity</th>
                <th>Manufacturing Year</th>
                <th>Fuel Type</th> 
                <th>Delete</th>
            
            </tr>
            @foreach($info as $in)
            <tr class="tr2">
                <td>{{$loop->iteration}}</td>
                <td><img src="{{asset('images/'.$in->F_Img)}}" alt="Front Image" loading="lazy" width=100 height=65></td>
                <td><img src="{{asset('images/'.$in->B_Img)}}" alt="Back Image" loading="lazy" width=100 height=65></td>
                <td><img src="{{asset('images/'.$in->S_Img)}}" alt="Side Image" loading="lazy" width=100 height=65></td>
                <td>{{$in->Car_Name}}</td>
                <td>{{$in->Brand_Name}}</td>
                <td>{{$in->Price}}</td>
                <td>{{$in->Price_Words}} Cr</td>
                <td>{{$in->Engine_Type}}</td>
                <td>{{$in->Top_Speed}}</td>
                <td>{{$in->Vehicle_Type}}</td>
                <td>{{$in->Doors}}</td>
                <td>{{$in->Seating_Capacity}}</td>
                <td>{{$in->Manufacturing_Year}}</td>
                <td>{{$in->Fuel_Type}}</td>       
                <td><a class="button" title="Delete" href="cardata_delete/{{$in->Id}} #popup1"><i class="fa fa-trash-o"></i></a></td>
            </tr>
            @endforeach
        </table>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Data deleted successfully</h2>
                <a class="close" href="#">&times;</a>       
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