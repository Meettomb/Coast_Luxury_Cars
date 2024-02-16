<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Data Insert</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\Admin\cardata_insert.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script> 
    <script src="{{asset('javascript\script.js')}}"></script>  
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

</head>
<body>
    @includeIf('Car_project.Admin.admin_header')
    <div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="/cardatas_insert" method="post" enctype="multipart/form-data">
      @csrf
      
      <div class="formbold-form-title">
        <h2 class="">Car Details Insert</h2>
      </div>

        <label class="image_lable" for="">Front Image</label>
          <input type="file" name="front_img" accept="image/*" onchange="displayImage1()" id="imageInput1" required>
          <img class="chose_img" id="selectedImage1" style="max-width: 100%; max-height: 300px; margin-top: 20px; display: none;" alt=""><br><br>
        
        <label class="image_lable" for="">Back Image</label>
          <input type="file" name="back_img" accept="image/*" id="imageInput2" onchange="displayImage2()" required>
          <img class="chose_img" id="selectedImage2" style="max-width: 100%; max-height: 300px; margin-top: 20px; display: none;" alt=""><br><br>

        <label class="image_lable" for="">Side Image</label>
          <input type="file" name="side_img" accept="image/*" id="imageInput3" onchange="displayImage3()" required>
          <img class="chose_img" id="selectedImage3" style="max-width: 100%; max-height: 300px; margin-top: 20px; display: none;" alt=""><br><br>

      <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">Enter Car Name</label>
          <input class="formbold-form-input" type="text" name="car_name" autocomplete="off" required>       
        </div>
        <div>
          <label for="lastname" class="formbold-form-label">Car Brand Name</label>
          <!-- <input class="formbold-form-input" type="text" name="brand_name" autocomplete="off" required> -->
          <select class="formbold-form-input" name="brand_name" id="B_N">
            <option value="Aston Martin">Aston Martin</option>
            <option value="Audi">Audi</option>
            <option value="Bentley">Bentley</option>
            <option value="Bugatti">Bugatti</option>
            <option value="Bmw">Bmw</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Ford">Ford</option>
            <option value="Jaguar">Jaguar</option>
            <option value="Koenigsegg">Koenigsegg</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Land Rover">Land Rover</option>
            <option value="Lexus">Lexus</option>
            <option value="Maserati">Maserati</option>
            <option value="Mercedes">Mercedes</option>
            <option value="McLaren">McLaren</option>
            <option value="Nissan">Nissan</option>
            <option value="Porsche">Porsche</option>
            <option value="Pagani">Pagani</option>
            <option value="Rolls Royce">Rolls Royce</option>
            <option value="Volvo">Volvo</option>
          </select>
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Price</label>
          <input class="formbold-form-input" type="text" name="price" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Car Engin Ttype</label>
          <select class="formbold-form-input" name="engin_type" id="">
            <option value="V3">V3</option>
            <option value="V4">V4</option>
            <option value="V6">V6</option>
            <option value="V8">V8</option>
            <option value="V10">V10</option>
            <option value="V12">V12</option>
            <option value="W8">W8</option>
            <option value="W12">W12</option>
            <option value="W16">W16</option>
            <option value="No">No</option>
          </select>
          <!-- <input class="formbold-form-input" type="text" name="engine_type" autocomplete="off" required > -->
        </div>
      </div>

      <div>
          <label for="email" class="formbold-form-label">Enter Car Price In Cr</label>
          <input class="formbold-form-input" type="text" name="price_words" placeholder="5.65" autocomplete="off" required>
        </div>
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Entar Car Top Speed</label>
          <input class="formbold-form-input" type="text" name="top_speed" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Vehicle Type</label>
          <select class="formbold-form-input" name="car_type" id="">
            <option value="Sports Car">Sports Car</option>
            <option value="Suv">Suv</option>
            <option value="Sedan">Sedan</option>
            <option value="Luxury Car">Luxury Car</option>
            <option value="Coupe">Coupe</option>
            <option value="Hyper Car">Hyper Car</option>
            <option value="Electric Car">Electric Car</option>
          </select>
          <!-- <input class="formbold-form-input" type="text" name="vehicle_type" autocomplete="off" required> -->
        </div>
      </div>
      
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Doors</label>
          <input class="formbold-form-input" type="text" name="doors" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Entar Car Seating Capacity</label>
          <input class="formbold-form-input" type="text" name="seating_capacity" autocomplete="off" required>
        </div>
      </div>

      
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Manufacturing Year</label>
          <input class="formbold-form-input" type="text" name="manufacturing_year" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Entar Car Fuel Type</label>    
          <select class="formbold-form-input" name="fule_type" id="">
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
            <option value="Battery">Battery</option>
          </select>
          <!-- <input class="formbold-form-input" type="text" name="fuel" autocomplete="off" required> -->
        </div>
      </div>

      <button onclick="myFunction()" type="submit" name="Insert" class="formbold-btn">Insert Data</button>
      
    </form>
  </div>
</div>


<script>
  function myFunction() {
    alert("Data Inserted Successfully");
  }
</script>
</body>
</html>