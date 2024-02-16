<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\contact.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <script src="{{asset('javascript\smtp.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
</head>
<body>
    @includeIf('Car_project/header')

<div class="container">
    <div class="container2">
        <div class="left_side">
            <div class="contact">
                <h1>contact us</h1>
            </div>
            <div class="detail">
                    <i class="fa-regular fa-envelope"></i>
                    <div><a href="">costluxury@hotmail.com</a> <br>
                        <p>The best way to get answer faster.</p>
                    </div>
            </div>
            <div class="detail">
                <i class="fa-solid fa-phone-volume"></i>
                <div>
                    <p class="first_p">For Preowned Cars</p><br>
                    <a href="">(+91) 9999 9999 83</a> <br>
                    <p>We are happy to help (10am to 10pm)</p>
                </div>
            </div>
            <div class="detail">
                <i class="fa-solid fa-phone-volume"></i>
                <div>
                    <p class="first_p">For Vintage & Classic Cars</p><br>
                    <a href="">(+91) 9999 9990 17</a> <br>
                    <p>or email us at vintage@clc.com</p>
                </div>
            </div>



            <div class="contact">
                <h1>Our Showroom</h1>
                <h2>Gurgaon Headquarters</h2>
                <p>Plot No. 134, Sector 37, Pace City 1, Gurgaon, Haryana - 122001</p>


                <h2>Mumbai Studio</h2>
                <p>7, Hubtown Sunmist, Opposite Hubtown Solaris, Telli Galli, Andheri East N S Phadke Marg Mumbai - 400053</p>
            

                <h2>Hyderabad Studio</h2>
                <p>Road no 2, Banjara Hills, Shangrila Plaza, Opp.KBR Park Hyderabad, Telangana-500034</p>
            

                <h2>Ahmedabad Studio</h2>
                <p>Cama Motors, Rustom Cama Marg, Old City, Lal Darwaja, Ahmedabad, Gujarat 380001</p>
            </div>
        </div>

        <div class="right_side">
            <div class="login_box">
                <div>
                    <div class="heading">
                        <h1>Feedback</h1><br>
                        <h2>Drop us a line by using the below form</h2>

                        <form action="contact" onsubmit="sendEmail(); reset(); return false;" method="post">
                            @csrf
                            <input type="text" name="name" id="" placeholder="Your Name *" required autocomplete="off">
                            
                            <input type="text" name="location" id="" placeholder="location *" required autocomplete="off"><br>

                            <input type="email" name="email" id="email" placeholder="email *" required autocomplete="off">
                            <input type="text" name="phone" maxlength="10" id="" placeholder="Phone *" required autocomplete="off"><br>

                            <textarea name="message" id="" cols="45" rows="6" placeholder="message*" required autocomplete="off"></textarea>
                            
                            <div class="terms">
                                <input type="checkbox" name="terms" id="terms" required><label for="terms">i'm not robot</label>
                            </div>

                            <input type="submit" name="insert">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@includeIf('Car_project.footer')

<!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
<!-- <script>
    function sendEmail(){
        Email.send({
        Host : "smtp.gmail.com",
        Username : "coastluxurycar@gmail.com",
        Password : "494060EB0DDFD1A565EDB54607666C7BA04E",
        To : 'coastluxurycar@gmail.com',
        From : document.getElementById("email").value,
        Subject : "This is Feedback",
        Body : "And this is the body"
            }).then(
            message => alert(message)
            );
        }
</script> -->
</body>
</html>