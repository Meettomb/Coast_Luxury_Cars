<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <title>Registration</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('CSS\regi.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="regi" method="post" class="form">
      @csrf
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="user" placeholder="Enter full name" required autocomplete="off" />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="email" name="Email_Id" placeholder="Enter email address" required autocomplete="off" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" name="Phone_Number" maxlength="10" placeholder="Enter phone number" required autocomplete="off" />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="Birth_Date" placeholder="Enter birth date" required autocomplete="off" />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" value="Male" name="Gender" />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" value="Female" name="Gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" value="prefer not to say" id="check-other" name="Gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="password" id="password" name="Password" placeholder="Enter Password" required autocomplete="off" />
            <span class="eye" style="cursor:pointer;"><i onclick="myFunction()" class="fa-solid fa-eye"></i></span>
          </div>
          <div class="input-box">
            <label>Confirm Password</label>
            <input type="password" id="password2" name="C_Password" placeholder="Enter Confirm Password" required autocomplete="off" />
            <span class="eye2" style="cursor:pointer;"><i onclick="myFunction2()" class="fa-solid fa-eye"></i></span>
          </div>
        </div>

        <input class="button" type="submit" name="submit" value="Submit">
      </form>
    </section>

<script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    function myFunction2() {
      var x = document.getElementById("password2");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>
  </body>
</html>