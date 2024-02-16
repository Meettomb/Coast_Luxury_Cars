<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="icon" type="image/x-icon" href="{{asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\receipt.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <script src="{{asset('javascript\script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

    <script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
			integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
</head>
<body>
    <div class="but">
        <button id="btn-print"><i class="fa fa-download"></i></button>
        <button id="btn-print" onclick="history.back()"><i class="fa fa-arrow-circle-left"></i></button>
    </div>

<div class="con" >
    <div class="par" id="content">
        <div class="par2">
        <div class="bac_image">
            <img src="{{asset('IMAGE\car-logo3.png')}}" alt="" >
        </div>
        <div class="web_info">
            <div class="logo"><img src="{{asset('IMAGE\car-logo3.png')}}" alt=""></div>
            <p class="what">Car buy Receipt</p>
        </div>

        <div class="addrash">
            <p>Full Name: <span>{{$info['Full_Name']}}</span></p><br>
            <p>Email: <span>{{$info['Email_Id']}}</span></p><br>
            <p>Street: <span>{{$info['Address']}}</span></p><br>
            <p>City: <span>{{$info['City']}}</span></p><br>
            <p>State: <span>{{$info['State']}}</span></p><br>
            <p>zip: <span>{{$info['Zip']}}</span></p>
        </div>

        <div class="car_info">
            <div class="heading"><h1>Car Info</h1></div>

            <div class="left">
                <p>Car Name: <span>{{$info['Car_Name']}}</span></p>
                <p>Price: <span>{{$info['Price']}} ({{$info['Price_Words']}} Cr)</span></p>
                <p>Engine: <span>{{$info['Engine']}}</span></p>
                <p>Top Speed: <span>{{$info['Top_Speed']}}</span></p>
                <p>Fuel: <span>{{$info['Fuel']}}</span></p>
            </div>

            <div class="right">
                <p>Brand Name: <span>{{$info['Brand_Name']}}</span></p>
                <p>Vehicle Type: <span>{{$info['Vehicle_Type']}}</span></p>
                <p>Doors: <span>{{$info['Doors']}}</span></p>
                <p>Seating Capacity: <span>{{$info['Seating_Capacity']}}</span></p>
                <p>Manufacturing Year: <span>{{$info['Manufacturing_Year']}}</span></p>
            </div>
        </div>

        <div class="pay_info">
            <div class="heading"><h1>Payment Info</h1></div>

            <p>Car Holder Name: <span>{{$info['Card_Holder_Name']}}</span></p><br>
            <p>Card Number: <span>{{$info['Card_Number']}}</span></p><br>
            <p>Exp Month: <span>{{$info['Exp_Month']}}</span></p><br>
            <p>Exp year: <span>{{$info['Exp_Year']}}</span></p><br>
            <p>cvv: <span>{{$info['Cvv']}}</span></p>
        </div>
        <div class="lorem">
            <span class="lorem_span">The Seller certifies that they are the legal owner of the above-mentioned vehicle and have the right to sell it. 
                The Buyer acknowledges that they have inspected the vehicle and accept it in its current condition. 
                The vehicle is sold "as-is," without any warranties or guarantees, express or implied. <br><br>
                 <span>you got 1 year servis free. If Any Problem contect nearest Servis Center of yor servis center.</span>
            </span>
        </div>
        <div class="sign">
            <img src="{{asset('IMAGE\sign\2(2).png')}}" alt="">
        </div>
        </div>
    </div>
</div>

<script>
   jQuery(document).ready(function (){
        $('#btn-print').click(function(){
            window.print();
        });
   });
</script>
</body>
</html>