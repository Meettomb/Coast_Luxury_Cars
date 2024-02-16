<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Car</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    
    <link rel="stylesheet" href="{{ asset('CSS\header2.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS\index.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    
</head>
<body>
    @includeIf('Car_project/header')
    @includeIf('Car_project/header2')
<!-- 
    @if(session('user'))
        $logname = Logout;
        $loglinhk = logout;
    @else{
        $logname = Login;
        $loglinhk = login;
    }
    @endif -->


    
<div class="continer">
    <div class="con">
        <div class="con_2" >
            @foreach($info as $in)
                <div class="Con_2_data_div">
                    <div class="image_div">
                        <img src="{{asset('images/'.$in->F_Img)}}" alt="">
                    </div>
                    <div class="detail">
                        <h1>{{$in->Car_Name}}</h1>
                        <h3>&#8377; {{$in->Price}}</h3>
                        <p>
                            <span>Engine: {{$in->Engine_Type}}</span>
                            <span>Fuel type: {{$in->Fuel_Type}}</span>
                            <span>top speed: {{$in->Top_Speed}}K/h</span>
                        </p>
                    </div>
                    <div class="mora_data">
                    <a href="car_deatils/{{$in['Id']}}" class="button"><button>Show More Details</button></a>
                    </div>
                </div>
            @endforeach
        </div>     
             
    </div>

</div>
        
    @include('Car_project/footer')

    
<script>
    $(document).ready( function() {
        $(".imgmenu").click( function() {
            $("#anim_li").animate({top:'0px'},500);
            });    
    });
    $(document).ready( function() {
    $(".closenav").click( function() {
        $("#anim_li").animate({top:'-100px'},500);
        });
    });


    $(document).ready( function() {
    $(".imgmenu").click( function() {
        $(".sidenav-links-2").animate({top:'0px'},500);
        });
        
    });
    $(document).ready( function() {
    $(".closenav").click( function() {
        $(".sidenav-links-2").animate({top:'100px'},500);
        });
        
    });
</script>

</body>
</html>