<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <title>Our Showroom</title>
    <link rel="stylesheet" href="{{ asset('CSS\showroom.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <script src="{{asset('javascript\jQuery.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="{{asset('CSS\swiper-bundle.min.css')}}">
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
                <a class="info-li-a" href="home"><li class="info-li">Home</li></a>
                <a class="info-li-a" href="about"><li class="info-li">About Us</li></a>
                <a class="info-li-a" href="showroom"><li class="info-li">Our Showroom</li></a>
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
                            <li><a href="home" class="side-nav-a"><i class="fa-sharp fa-solid fa-house"></i>home</a></li>
                            <li><a href="/showroom" class="side-nav-a"><i class="fa-regular fa-building"></i></i>Our Showroom</a></li>
                            <li><a href="index" class="side-nav-a"><i class="fa-solid fa-car"></i>new car</a></li>
                            @if(session('user'))
                            <li><a href="/search_receipt" class="side-nav-a"><i class="fa fa-file-alt"></i>Search Receipt</a></li>
                            @else
                            <li><a href="/login" class="side-nav-a"><i class="fa fa-file-alt"></i>Search Receipt</a></li>
                            @endif
                            <li><a href="/{{$loglinks}}" class="side-nav-a"><i class="fa-solid fa-right-to-bracket"></i>{{$logname}}</a></li>
                        </div>
                        <div class="sidenav-links-2">
                            <li><a href="whyus" class="side-nav-a"><i class="fa-sharp fa-regular fa-thumbs-up"></i>Why us</a></li>
                            <li><a href="Career" class="side-nav-a"><i class="fa-solid fa-briefcase"></i>Career</a></li>
                            <li><a href="about" class="side-nav-a"><i class="fa fa-info-circle"></i>about us</a></li>
                            <li><a href="contact" class="side-nav-a"><i class="fa fa-phone"></i>contact us</a></li>
                            <li><a href="teem" class="side-nav-a"><i class="fa-solid fa-people-group"></i>the team</a></li>
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
        
        <span class="our">our showroom</span>
    </header>

</div>

<!-- =========================================== CONTENT ========================================== -->

<div class="content">
    <div class="content_div_1 reveal">
        <div class="car_sale_spane_1">
            <span class="car_sale_span_1-1">STATE OF THE ART </span>
            <span class="car_sale_span_1-2">"hood"</span>
            <div class="car-sale-data">             
                <span><i class="fa-solid fa-satellite"></i><p>Automated Showroom <br> Technology</p></span>
                <span><i class="fa-solid fa-chair"></i><p>Guest<br>Lounge Area</p></span>
                <span><i class="fa-solid fa-hands-bubbles"></i><p>Covid Protective<br>Measures</p></span>
                <span><i class="fa-solid fa-car"></i><p>State Of The Art<br>Interiors </p></span>
            </div>      
        </div>
        <div class="car_sale_spane_2">
            <img src="{{asset('IMAGE\image2.jpg')}}" alt="">
        </div>
    </div>
</div>


<div class="showRoom_name_link">
    <a href="#delhi">delhi showroom</a>
    <a href="#mumbai">mumbai showroom</a>
    <a href="#hyderabad">hyderabad showroom</a>
    <a href="#ahmedabad">ahmedabad showroom</a>
</div>

<div class="showRoom_name_div" id="delhi">
    <span class="show_room_name_span_1-1">delhi </span>
    <span class="show_room_name_span_1-2">showrrom</span>
    <p>Coast Luxury cars, Showroom is a multibrand dealer located at Gurgaon. It offers used cars &
        services across a wide range of and available car models in the market.</p>

    <p class="address_p"><span class="address">address: </span>Plot No. 134, Sector 37, Pace City 1, Gurgaon, Haryana, 122001</p>
</div>

<div class="content-2">
    
    <div class="content_div_2 reveal2">
      <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\1.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\2.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\3.jpg')}}" alt="">
        </div>  
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\4.jpg')}}" alt="">
        </div> 
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\5.jpg')}}" alt="">
        </div>   
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\delhi\7.jpg')}}" alt="">
        </div>      
    </div>
</div>


<div class="showRoom_name_div" id="mumbai">
    <span class="show_room_name_span_1-1">mumbai </span>
    <span class="show_room_name_span_1-2">showrrom</span>
    <p>Coast Luxury cars, Mumbai is a multibrand dealer. It offers used cars and services across a wide
    range of and available car models in the market.</p>

    <p style="width:80%" class="address_p"><span class="address">address: </span> Shop No 7, Hubtown Sunmist, Solaris, Telli Galli, Opposite HubTown, Vijay Nagar, Andheri East, Mumbai, 400053</p>
</div>

<div class="content-2">
    
    <div class="content_div_2 reveal2">
      <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\2.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\1.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\3.jpg')}}" alt="">
        </div>  
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\4.jpg')}}" alt="">
        </div> 
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\5.jpg')}}" alt="">
        </div>        
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\mumbai\6.jpg')}}" alt="">
        </div>      
    </div>
</div>

<div class="showRoom_name_div" id="hyderabad">
    <span class="show_room_name_span_1-1">HYDERABAD </span>
    <span class="show_room_name_span_1-2">showrrom</span>
    <p>Coast Luxury cars, The Hyderabad branch marks BBT's first of many branch offices in Southern India. The new
    branch of Big Boy Toyz with an area of 2,000 sq. ft. and is located in Banjara Hills.</p>

    <p style="width:80%" class="address_p"><span class="address">address: </span> Road No 2, Banjara Hills Shangrila Plaza, opp. KBR, Hyderabad, Telangana - 34</p>
</div>

<div class="content-2">   
    <div class="content_div_2 reveal2">
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\hyderabad\1.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\hyderabad\3.jpg')}}" alt="">
        </div>  
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\hyderabad\4.jpg')}}" alt="">
        </div> 
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\hyderabad\5.jpg')}}" alt="">
        </div>        
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\hyderabad\6.jpg')}}" alt="">
        </div>      
    </div>
</div>


<div class="showRoom_name_div" id="ahmedabad">
    <span class="show_room_name_span_1-1">AHMEDABAD </span>
    <span class="show_room_name_span_1-2">showrrom</span>
    <p>Big Boy Toyz Ahmedabad branch is a Diamond hub for buying and selling luxury supercars in western India. The facility is spread across 8,000 sq. ft. at Cama Motors. As the fourth branch, it marks the arrival of Big Boy Toyz in Gujarat.</p>

    <p style="width:80%" class="address_p"><span class="address">address: </span> Cama Motors, Rustom Cama Marg, Old City, Lal Darwaja, Ahmedabad, Gujarat 380001</p>
</div>
<div class="content-2">   
    <div class="content_div_2 reveal2">
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\1.jpg')}}" alt="">
        </div>
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\2.jpg')}}" alt="">
        </div>  
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\3.jpg')}}" alt="">
        </div> 
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\4.jpg')}}" alt="">
        </div>        
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\5.jpg')}}" alt="">
        </div>      
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\6.jpg')}}" alt="">
        </div>      
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\7.jpg')}}" alt="">
        </div>      
        <div class="expensive_div">
            <img src="{{asset('IMAGE\showroom\ahmedabad\8.jpg')}}" alt="">
        </div>      
    </div>
</div>

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