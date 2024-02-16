<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car All Data</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\.png')}}">
    <link rel="stylesheet" href="{{asset('CSS\Admin\All_Product_data.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    

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

        <table class="table1" id="product-list">
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

            </tr>
            <!-- <tbody class="myTable"> -->
            @foreach($info as $in)
            <tr class="tr2">
                <td>{{$loop->iteration}}</td>
                <td><img src="{{asset('images/'.$in->F_Img)}}" alt="Front Image" width=100 height=65 loading="lazy"></td>
                <td><img src="{{asset('images/'.$in->B_Img)}}" alt="Back Image" width=100 height=65 loading="lazy"></td>
                <td><img src="{{asset('images/'.$in->S_Img)}}" alt="Side Image" width=100 height=65 loading="lazy"></td>
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
            </tr>
            @endforeach
            <!-- </tbody> -->

            <tbody class="tr2" id="content">
            </tbody>
        </table>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){    //This Id Is Search Field Id
            var value = $(this).val().toLowerCase();
            $(".tr2").filter(function(){        //This Class Is My Tag Where Search Data
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