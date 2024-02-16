<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    
    <link rel="stylesheet" href="{{ asset('CSS\Car_Details.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
</head>
<body>
    @includeIf('Car_project.header')
    <!-- @includeIf('Car_project.header2') -->

<div class="section">
    <div class="cotainer">
        <div class="car_detail">
            <div class="car_detail_div">
                <span class="span1">{{$info['Car_Name']}}</span>
                <span class="span2">{{$info['Price_Words']}} Cr ( &#x20B9; {{$info->Price}} )</span>
            </div>
            <div class="car_detail_div_2">
                <span class="span1">Engine: {{$info['Engine_Type']}}</span>
                <span class="span1">Fuel Type: {{$info['Fuel_Type']}}</span>
                <span class="span1">Top Speed: {{$info['Top_Speed']}}K/h</span>
            </div>
            <div class="car_detail_div_3">
                @if(session('user'))
                    <a href="/pay_form/{{$info['Id']}}"><button>Book This Car</button></a>
                @else
                    <a href="/login"><button>Book This Car</button></a>
                @endif
            </div>
        </div>
        
        <div class="content-2">   
            <div class="content_div_2 reveal2">
                <div class="expensive_div">
                    <img src="{{asset('images/'.$info->F_Img)}}" alt="">
                </div>
                <div class="expensive_div">
                    <img src="{{asset('images/'.$info->B_Img)}}" alt="">
                </div>
                <div class="expensive_div">
                    <img src="{{asset('images/'.$info->S_Img)}}" alt="">
                </div>           
            </div>  
        </div>

        <div class="Summary"><p>Car Summary</p></div>
        <div class="car_extra_details_div">
            <div class="car_extra_details">
                <img src="{{asset('IMAGE\car_details_icon\brand-image.png')}}" alt="">
                <span>Brand Name: </span><p>{{$info['Brand_Name']}}</p>
            </div>
            <div class="car_extra_details">
                <img src="{{asset('IMAGE\car_details_icon\vehicle_type.png')}}" alt="">
                <span>Vehicle Type: </span><p>{{$info['Vehicle_Type']}}</p>
            </div>
            <div class="car_extra_details">
                <img src="{{asset('IMAGE\car_details_icon\car-door.png')}}" alt="">
                <span>Doors: </span><p>{{$info['Doors']}}</p>
            </div>
            <div class="car_extra_details">
                <img src="{{asset('IMAGE\car_details_icon\seat.png')}}" alt="">
                <span>Seating Capacity: </span><p>{{$info['Seating_Capacity']}}</p>
            </div>
            <div class="car_extra_details">
                <img src="{{asset('IMAGE\car_details_icon\calendar.png')}}" alt="">
                <span>Manufacturing Year: </span><p>{{$info['Manufacturing_Year']}}</p>
            </div>
        </div>

    </div>
</div>

    @includeIf('Car_project.footer')
</body>
</html>