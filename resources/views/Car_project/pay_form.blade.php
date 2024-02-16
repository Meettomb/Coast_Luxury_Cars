<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <title>Registration</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('CSS\pay-form.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

@include('Car_project.header')


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/pay_form" method="post" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" autocomplete="off" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" autocomplete="off" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" autocomplete="off" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Ahmedabad" autocomplete="off" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Gujarat" autocomplete="off" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="380051" autocomplete="off" required>
              </div>
            </div>


            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Car Name</label> -->
                <input type="text" id="carname" name="" value="{{$info['Car_Name']}}" placeholder="Audi R8" autocomplete="off" disabled required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Car price</label> -->
                <input type="text" id="price" name="" value="{{$info['Price_Words']}} Cr" placeholder="40000000" autocomplete="off" disabled required>
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Car Name</label> -->
                <input type="hidden" id="carname" name="carname" value="{{$info['Car_Name']}}" placeholder="Audi R8" autocomplete="off" required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Car price</label> -->
                <input type="hidden" id="price" name="price" value="{{$info['Price']}}" placeholder="40000000" autocomplete="off" required>
              </div>

              <div class="col-50">
                <!-- <label for="price">Car price</label> -->
                <input type="hidden" id="price" name="price_words" value="{{$info['Price_Words']}}" placeholder="40000000" autocomplete="off" required>
              </div>
            </div>


            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Engine</label> -->
                <input type="hidden" id="carname" name="engin" value="{{$info['Engine_Type']}}" placeholder="Audi R8" autocomplete="off" required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Top Speed</label> -->
                <input type="hidden" id="price" name="speed" value="{{$info['Top_Speed']}}" placeholder="40000000" autocomplete="off" required>
              </div>
            </div>


            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Fuel</label> -->
                <input type="hidden" id="carname" name="fuel" value="{{$info['Fuel_Type']}}" placeholder="Audi R8" autocomplete="off" required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Brand Name</label> -->
                <input type="hidden" id="price" name="brande" value="{{$info['Brand_Name']}}" placeholder="40000000" autocomplete="off" required>
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Vehicle Type</label> -->
                <input type="hidden" id="carname" name="type" value="{{$info['Vehicle_Type']}}" placeholder="Audi R8" autocomplete="off" required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Doors</label> -->
                <input type="hidden" id="price" name="doors" value="{{$info['Doors']}}" placeholder="40000000" autocomplete="off" required>
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <!-- <label for="carname">Seating Capacity</label> -->
                <input type="hidden" id="carname" name="seating" value="{{$info['Seating_Capacity']}}" placeholder="Audi R8" autocomplete="off" required>
              </div>
              <div class="col-50">
                <!-- <label for="price">Manufacturing Year</label> -->
                <input type="hidden" id="price" name="year" value="{{$info['Manufacturing_Year']}}" placeholder="40000000" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
              <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
              <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
              <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" autocomplete="off" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" minlength="16" maxlength="16" placeholder="1111-2222-3333-4444" autocomplete="off" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" autocomplete="off" required>
            
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" maxlength="4" placeholder="2027" autocomplete="off" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="352" autocomplete="off" required>
              </div>
            </div>


            <div class="row">
              <img src="{{asset('images/'.$info->F_Img)}}" name="fimage" alt="Front Image" width=100 height=65 loading="lazy">
              <img src="{{asset('images/'.$info->B_Img)}}" name="bimage" alt="Front Image" width=100 height=65 loading="lazy">
              <img src="{{asset('images/'.$info->S_Img)}}" name="simage" alt="Front Image" width=100 height=65 loading="lazy">
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" name="sameadr" required> Confirm Payment?
        </label>
        <input type="submit" name="insert" value="Payment" class="btn">
      </form>
    </div>
  </div>

</div>



    @include('Car_project.footer')



  </body>
</html>