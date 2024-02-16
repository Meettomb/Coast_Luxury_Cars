<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Us</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">

    <link rel="stylesheet" href="{{ asset('CSS\whyus.css')}}">
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
        <div class="page_name">
            <p class="page_name_span1">coast luxury cars</p><br>
            <p class="page_name_span2">Why us</p>
        </div>
    </header>

</div>

<div class="container">
    <p>BEST CAR INSPECTION</p><br>
    <p class="p_edit">Teem in india</p>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class='fas fa-file-signature'></i>
            </div>
            <div class="data_div">
                <h2>ZERO TOLERANCE POLICY</h2><br>
                <span>We believe in transparent and fair dealings,no refurbished cars.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fa-regular fa-thumbs-up"></i>
            </div>
            <div class="data_div">
                <h2>150 check points</h2><br>
                <span>Car comes with 360° inspection report with comfort and ease in driving pleasure.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
            <i class='fas fa-shield-alt'></i>
            </div>
            <div class="data_div">
                <h2>NON ACCIDENTAL CARS</h2><br>
                <span>We don't buy car's with any accidental record not even a body part been changed as per service history.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fas fa-book"></i>
            </div>
            <div class="data_div">
                <h2>RTO PHYSICAL CHECK</h2><br>
                <span>We do a complete check of owner and vehicle history with no litigation case on it.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fa fa-legal"></i>
            </div>
            <div class="data_div">
                <h2>NCR CHECK</h2><br>
                <span>Every car goes through a National Crime Record check at the time of procurement to eliminate any possibility of purchasing a car with an NCR case</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fas fa-lock"></i>
            </div>
            <div class="data_div">
                <h2>FIXED PRICE</h2><br>
                <span>Our complete stock is listed online as we don't believe in inflating the prices to waste your time.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fa-regular fa-handshake"></i>
            </div>
            <div class="data_div">
                <h2>BUY BACK AGREEMENT</h2><br>
                <span>Assured buy back policy - drive any car from BBT for a year with 25% 
                    depreciation with kms limitation on it and 75% will be refunded back to your account.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fa-solid fa-key"></i>
            </div>
            <div class="data_div">
                <h2>HASSLE FREE BUYING PROCESS</h2><br>
                <span>We have 24*7 active boardline with constant update of our stock over social 
                    media and have a dedicated website to book your dream 
                    car online with secured banking options available Pan India.</span>
            </div>       
        </div>
    </div>

    <div class="width">
        <div class="container2">
            <div class="qualty">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="data_div">
                <h2>SERVICE & INSURANCE HISTORY CHECK</h2><br>
                <span>Cars comes with complete previous service history checked with authorised dealership and we also check that the previous insurance 
                    policy doens't comes with any kind of accidental claims on it.</span>
            </div>       
        </div>
    </div>

</div>

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