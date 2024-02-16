
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="{{ asset('CSS\index.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    
    
</head>
<body>
@php

    $logname="";
    $loglinks="";

    if(session('user')){
        $logname = 'Logout';
        $loglinks = 'logout';  
    }
    else{
        $logname = 'login';
        $loglinks = 'login';  
    }

@endphp

    <header id="up">
        <div class="web_logo">
            <img src="{{ asset('IMAGE\car-logo3.png')}}" alt="">
        </div>
        <div class="info">  
            <ul class="info-ul-1">
                <!-- <a class="info-li-a" style="cursor:pointer;" onclick="history.back()"><li class="info-li">Back</li></a> -->
                <a class="info-li-a" href="/home"><li class="info-li">Home</li></a>
                <a class="info-li-a" href="/about"><li class="info-li">About Us</li></a>
                <a class="info-li-a" href="/showroom"><li class="info-li">Our Showroom</li></a>
                
                <a class="info-li-a" href="/{{$loglinks}}"><li class="info-li">{{$logname}}</li></a>

            </ul>
                <img class="imgmenu" src="{{ asset('IMAGE\menu-bar.png')}}" onclick="sideNav()" id="navani"  alt="">
                
                <div class="sidenav side" id="sidenavbar">
                    <div class="sidenvimage-div">
                        <img class="sidenvimage" src="https://cdn.motor1.com/images/mgl/jqKnR/s1/1x1/bugatti-bolide-front.webp"alt="">
                        <img class="sidenavelogo" src="{{ asset('IMAGE\car-logo3.png')}}" alt="">
                    </div>
                    
                    <div class="sidenav-linksarea">
                        
                            <p class="closenav" id="Xnavdiv" onclick="closeNavbar()">X</p>
                       
                        <div class="sidenav-links-1" id="anim_li">
                            <li><a href="/home" class="side-nav-a"><i class="fa-sharp fa-solid fa-house"></i>home</a></li>
                            <li><a href="/showroom" class="side-nav-a"><i class="fa-regular fa-building"></i></i>Our Showroom</a></li>
                            <li><a href="/index" class="side-nav-a"><i class="fa-solid fa-car"></i>new car</a></li>

                
                            @if(session('user'))
                            <li><a href="/search_receipt" class="side-nav-a"><i class="fa fa-file-alt"></i>Search Receipt</a></li>
                            @else
                            <li><a href="/login" class="side-nav-a"><i class="fa fa-file-alt"></i>Search Receipt</a></li>
                            @endif
                            
                            
                            <li><a href="/{{$loglinks}}" class="side-nav-a"><i class="fa-solid fa-right-to-bracket"></i>{{$logname}}</a></li>
                        </div>
                        <div class="sidenav-links-2">
                            <li><a href="/whyus" class="side-nav-a"><i class="fa-sharp fa-regular fa-thumbs-up"></i>Why us</a></li>
                            <li><a href="/Career" class="side-nav-a"><i class="fa-solid fa-briefcase"></i>Career</a></li>
                            <li><a href="/about" class="side-nav-a"><i class="fa fa-info-circle"></i>about us</a></li>
                            <li><a href="/contact" class="side-nav-a"><i class="fa fa-phone"></i>contact us</a></li>
                            <li><a href="/teem" class="side-nav-a"><i class="fa-solid fa-people-group"></i>the team</a></li>
                        </div>

                        <div class="sidenav-social-link">
                            <span>follow</span>
                            <i id="instagram" class="fa-brands fa-instagram" onclick="openinsta()"></i>
                            <i id="facebook" class="fa-brands fa-facebook-f" onclick="openfecbook()"></i>
                            <i id="twiter" class="fa-brands fa-x-twitter"onclick="openx()"></i>
                        </div>
                    </div>  

                </div>
        </div>   
    </header>
<!-- ====================================== Header 2 ======================================================== -->
   


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