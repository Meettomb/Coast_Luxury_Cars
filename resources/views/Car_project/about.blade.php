<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">

    <link rel="stylesheet" href="{{ asset('CSS\about.css')}}">
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

                            
                            <!-- <a class="info-li-a" href="/{{$loglinks}}"><li class="info-li">{{$logname}}</li></a> -->
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
<!-- ============================================== Containt ==================================================== -->

<div class="container">
    <div class="container_2">
        <h1>Coast Luxury Cars, a pre-owned luxury car dealer deals with 24 brands</h1>
        <p>CLC started in 2009 as a benchmark model for the Pre-Used, or how we prefer to see it as, Pre-Loved Car Brand. The mission was simple, direct and drove effect - delivering a new dimension of luxury while standardising & raising platforms for the used car market in India.</p>
        <p>Since our inception our primary aim has been our passion for delivering excellence which became our mission. YOU (our patrons) are the driving force behind our company and making sure you get the best is what we thrive on.</p>


        <h1>MISSION</h1>
        <p>The journey began in 2009 when CLC was founded in New Delhi, India. Since then our mission has been to provide quality exotic cars with highly personalized care at a competitive price. Creating a new benchmark for excellence in every aspect of our business.</p>
    
    
        <div class="littel_carear">
            <div class="littel_carear_data">
                <h1>2009</h1>
                <p>Arrival of the wavwmaker</p>
                <h2>Came Into being year 2009 in the heart of south delhi</h2>
            </div>
            <div class="littel_carear_data">
                <h1>2017</h1>
                <p>year full of heppenings</p>
                <h2>2017 auto car show in mumbai</h2>
                <h2>hyderabad auto show 2017</h2>
            </div>
            <div class="littel_carear_data">
                <h1>2023</h1>
                <p>touching the pillars of success</p>
                <h2>continuing further with superseding its sales targets and achieving exemplary financil figures...</figure></h2>
            </div>
        </div>

        <div class="cvolity">
            <div class="image_div">
                <img src="{{asset('IMAGE\repair.jpg')}}" alt="">
                <span>151 Quality Checkpoints</span>
                <p>At CLC, we offer you comparisons across various parameters thereby helping you choose the ideal one.</p>
            </div>
            <div class="image_div2">
                <img src="{{asset('IMAGE\car_brand.jpg')}}" alt="">
                <span>30 Luxury Car Brands</span>
                <p>At CLC, we offer you comparisons across various parameters thereby helping you choose the ideal one.</p>
            </div>
        </div>
    </div>
</div>

<!-- End Containt -->

@includeIf('Car_project.home_footer')

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