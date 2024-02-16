<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExpCar Data Insert</title>

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
    <form action="/expcars_insert" method="post" enctype="multipart/form-data">
      @csrf
      
      <div class="formbold-form-title">
        <h2 class="">Expensive Car Data Insert</h2>
      </div>

        <label class="image_lable" for="">Front Image</label><input type="file" name="front_img" id="" required><br><br>
        <label class="image_lable" for="">Back Image</label><input type="file" name="back_img" id="" required><br><br>
        <label class="image_lable" for="">Side Image</label><input type="file" name="side_img" id="" required><br><br>

      <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">Enter Car Name</label>
          <input class="formbold-form-input" type="text" name="car_name" autocomplete="off" required>       
        </div>
        <div>
          <label for="lastname" class="formbold-form-label">Car Brand Name</label>
          <input class="formbold-form-input" type="text" name="brand_name" autocomplete="off" required>
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Enter Car Price</label>
          <input class="formbold-form-input" type="text" name="price" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Car Engin Ttype</label>
          <input class="formbold-form-input" type="text" name="engine_type" autocomplete="off" required >
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Entar Car Top Speed</label>
          <input class="formbold-form-input" type="text" name="top_speed" autocomplete="off" required>
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Enter Vehicle Type</label>
          <input class="formbold-form-input" type="text" name="vehicle_type" autocomplete="off" required>
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
          <input class="formbold-form-input" type="text" name="fuel" autocomplete="off" required>
        </div>
      </div>

      <button type="submit" name="Insert" class="formbold-btn">Insert Data</button>
    </form>
  </div>
</div>
    <!-- <a href="All_Product_Data">Search</a> -->
</body>
</html>