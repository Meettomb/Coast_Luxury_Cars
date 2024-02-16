<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Car</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\home.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <script src="{{asset('javascript\jQuery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

    <style>
        .requird{
            color:red;
            margin-top: 10px;
            font-size: 20px;
        }
    </style>
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

        <div class="header_image_div">
            <!-- <img class="header_image_div-main_image" src="{{asset('IMAGE\back3.jpg')}}" alt=""> -->

            <div class="header_image_div_2">
                <p class="header_image_p1">LET'S KEEP IT SIMPLE.</p>
                <p class="header_image_p2">we are the best when it comes to Exotic Cars.</p>
                <!-- <input class="search" type="text" name="search" id="" placeholder="Search Your Dream Car" autocomplete="off">
                 <button class="search_button"><img src="{{asset('IMAGE/right-arrow.png')}}" alt=""></button> -->
                
                 <form class="form" id="form" action="search" method="get">
                    <input class="search" type="text"  name="query" id="search" placeholder="Search Your Dream Car" autocomplete="off">
                    
                    <div class="search_button_div">
                        <button class="search_button" name="search"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        
                    </div>
                 
                    <p class="requird" id="n_error"></p>
                </form>
                <div class="browse_div">
                    <a href="index"><button type="submit" class="brows">BROWSE COLLECTION</button></a>
                </div>
                
                <span class="down_arrow">
                    <a href="#down" id="fa-1" class="fa-solid fa-chevron-down"><br>
                    <a href="#down" id="fa-2" class="fa-solid fa-chevron-down"></a>
                </span>
            </div>        
        </div>
    </header>
</div>

<script>
    const nam = document.getElementById('search');
    const foem = document.getElementById('form');

    
    const n_error = document.getElementById('n_error');
    form.addEventListener('submit',(e)=>
    {
        if(nam.value === '' || nam.value==null)
        {
            e.preventDefault();
            n_error.innerHTML = "Enter Your Dream Car";
        }
    })
</script>

<!-- HEADER END -->
<!-- ================================================= Content ========================================= -->
<div class="content">
    <div class="content_div_1 reveal">
        <div class="car_sale_spane_1">
            <p class="car_sale_span_1-1">Planning to Buy?</p>
            <p class="car_sale_span_1-2">Buy your car <br> in 30 miniuts.</p>
            <div class="car-sale-data">             
                <span><i class="fa-solid fa-percent"></i><p>Outright Sale</p></span>
                <span><i class="fa-regular fa-clock"></i><p>best offer <br> in 30 day's</p></span>
                <span><i class="fa-solid fa-user-plus"></i><p>1000 + Satisfied<br>Customers</p></span>
                <span><i class="fa-solid fa-mug-saucer"></i><p>Hassle Free <br>Processing</p></span>
            </div>

            <a class="button_a" href="/index"><button class="car_sale_button">Buy car</button></a>      
        </div>
        <div class="car_sale_spane_2">
            <img src="{{asset('IMAGE\image1.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="content-2">
    <div class="child reveal2">
        <video autoplay muted loop>
            <source src="{{asset('video\video1.mp4')}}" type="video/mp4">
        </video>

        <div class="child-right">
            <span>HOW TO Book Your CAR.</span>
        </div>
    </div>
    
</div>

<div class="how_it_work">
    <p class="how_it_work1 reveal3">How It Works ?</p><br>
    <p class="how_it_work2 reveal3">Buying luxury cars in India was never this easy. You can now own your dream luxury car in just 4 simple steps at coast luxury cars, India's trusted luxuer car Salling Compny.</p>

    <div class="how_it_work_img_div reveal3">
        <div class="how_it_work_img">
            <img src="{{asset('IMAGE\howitworks_img_1.png')}}" alt="">
            <p>BROWSE FROM OUR COLLECTION</p>
        </div>
        <div class="how_it_work_img">
            <img src="{{asset('IMAGE\howitworks-img_2.png')}}" alt="">
            <p>BOOK ONLINE OR VISIT our SHOWROOM</p>
        </div>
        <div class="how_it_work_img">
            <img src="{{asset('IMAGE\howitworks-img_3.png')}}" alt="">
            <p>INSTANT PAYMENT & TRANSFER</p>
        </div>
        <div class="how_it_work_img">
            <img src="{{asset('IMAGE\howitworks-img_4.png')}}" alt="">
            <p>and your good go!!</p>
        </div>
    </div>

    <p class="how_it_work3">It's That Too Simple To Own Your Dream Car</p>
</div>


<!-- CONTENT END -->
<!-- ================================================= FOOTER ============================================ -->

@include('Car_project.home_footer')

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