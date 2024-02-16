<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Data Insert</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\Admin\cardata_insert.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

</head>
<body>
    @includeIf('Car_project.Admin.admin_header')
    <div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="/edit" method="post" enctype="multipart/form-data">
      @csrf
      <div class="formbold-form-title">
        <h2 class="">Car Details Insert</h2>
      </div>
      <input type="hidden" name="id" value="{{$data['Id']}}">

        <!-- <label class="image_lable" for="">Front Image</label><input type="file" value="{{$data['F_Img']}}" name="front_img" id="" required><br><br>
        <label class="image_lable" for="">Back Image</label><input type="file" value="{{$data['B_Img']}}" name="back_img" id="" required><br><br>
        <label class="image_lable" for="">Side Image</label><input type="file" value="{{$data['S_Img']}}" name="side_img" id="" required><br><br> -->
      <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">Enter Car Name</label>
          <input class="formbold-form-input" id="firstname" type="text" name="car_name" value="{{$data['Car_Name']}}" autocomplete="off" required>       
        </div>
        <div>
          <label for="lastname" class="formbold-form-label">Car Brand Name</label>
          <input class="formbold-form-input" type="text" name="brand_name" value="{{$data['Brand_Name']}}" autocomplete="off" required>
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Price</label>
          <input class="formbold-form-input" type="text" name="price" value="{{$data['Price']}}" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Car Engin Ttype</label>
          <input class="formbold-form-input" type="text" name="engine_type" value="{{$data['Engine_Type']}}" autocomplete="off" required >
        </div>
      </div>

      <div>
          <label for="email" class="formbold-form-label">Enter Car Price In Cr</label>
          <input class="formbold-form-input" type="text" name="price_words" value="{{$data['Price_Words']}}" autocomplete="off" required>
        </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Entar Car Top Speed</label>
          <input class="formbold-form-input" type="text" name="top_speed" value="{{$data['Top_Speed']}}" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Vehicle Type</label>
          <input class="formbold-form-input" type="text" name="vehicle_type" value="{{$data['Vehicle_Type']}}" autocomplete="off" required>
        </div>
      </div>
      
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Doors</label>
          <input class="formbold-form-input" type="text" name="doors" value="{{$data['Doors']}}" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Entar Car Seating Capacity</label>
          <input class="formbold-form-input" type="text" name="seating_capacity" value="{{$data['Seating_Capacity']}}" autocomplete="off" required>
        </div>
      </div>

      
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Manufacturing Year</label>
          <input class="formbold-form-input" type="text" name="manufacturing_year" value="{{$data['Manufacturing_Year']}}" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Entar Car Fuel Type</label>
          <input class="formbold-form-input" type="text" name="fuel" value="{{$data['Fuel_Type']}}" autocomplete="off" required>
          
        </div>
      </div>

      <button onclick="myFunction()" type="submit" name="edit" class="formbold-btn">Edit Data</button>
    </form>
  </div>
</div>
<script>
  function myFunction() {
    alert("Data Edited Successfully");
  }
</script>
</body>
</html>