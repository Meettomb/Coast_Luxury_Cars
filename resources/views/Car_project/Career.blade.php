<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">

    <link rel="stylesheet" href="{{ asset('CSS\career.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <script src="{{asset('javascript\jQuery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
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

<div class="header_image_div-main_image">
    <img class="back_image_header" src="{{asset('IMAGE/team_2.jpg')}}" alt="">
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
                        
                            <p class="closenav" id="Xnavdiv" onclick="closeNavbar()"><i class="fa-solid fa-x"></i></p>
                       
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

</div>
<!-- ================================================ Containt ============================================ -->

<div class="container">
    <div class="container_2">
        <h1 class="container_2_h1">VISION</h1><p><span>A compny whith a</span></p>       

        <div class="container_2_2">
            <i class="fa-solid fa-quote-left"></i>
            <span>Our Vision is to grow along with the team to be Number one luxury car dealers in India</span>
            <i class="fa-solid fa-quote-right"></i>
        </div>
        <div class="container_2_2_1">
            <p class="container_2_2_1_p">CLC believes that its future depends on its people who are capable enough to generate new ideas & plans that altogether 
                will help in talking the business to a new height.</p>
        </div>

        <div class="container_2_3">
            <h1>OUR WORK CULTURE</h1>
            <h4>BBT believes that its future depends on its people who are capable enough to generate new ideas & plans that altogether will help in talking the business to a new height.</h4>
        
            <div class="container_2_3_div">
                <div class="container_2_3_image_div">
                    <h3>TEAM SPIRIT
                        <img src="{{asset('IMAGE\culture\culture_1.png')}}" alt="">
                    </h3>
                    
                </div>
                <div class="container_2_3_image_div">
                    <h3>INTEGRITY
                        <img src="{{asset('IMAGE\culture\culture_2.png')}}" alt="">
                    </h3>            
                </div>
                <div class="container_2_3_image_div">
                    <h3>PASSION TO PERFORM
                    <img src="{{asset('IMAGE\culture\culture_3.png')}}" alt="">
                    </h3>
                    
                </div>
                <div class="container_2_3_image_div">
                    <h3>CUSTOMER CENTRISM
                    <img src="{{asset('IMAGE\culture\culture_4.png')}}" alt="">
                    </h3>
                    
                </div>
                <div class="container_2_3_image_div">
                    <h3>SOCIAL & WELL-BEING
                        <img src="{{asset('IMAGE\culture\culture_5.png')}}" alt="">
                    </h3>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- =============================================== FOOTER ======================================================= -->
@include('Car_project/home_footer')    

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