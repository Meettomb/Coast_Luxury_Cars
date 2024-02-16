<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\.png')}}">
    <link rel="stylesheet" href="{{asset('CSS\Admin\All_Product_data.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .button{
            padding: 10px;
            border-radius: 10px;
            color:red;
            font-size:18px;
        }
        td{
            padding: 15px 0 15px 0;
        }
        .fa{
            color: white;
            background-color: red;
            padding: 10px;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    
@include('Car_project/Admin/admin_header')

<div class="container1">
<div class="search">
            <input type="search" name="search" id="myInput" onkeyup="search()" placeholder="Search Data" autocomplete="off">               
        </div>
        <div class="count">
            <span>Total Data:</span>
            <p>{{$count}}</p>
        </div>
</div>

    <table class="table1" id="product-list">
        <tr class="tr1">
            <th>id</th>
            <th>Name</th>
            <th>Location</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Delete</th>

        </tr>
        <!-- <tbody class="myTable"> -->
        @foreach($info as $in)
        <tr class="tr2">
            <td>{{$loop->iteration}}</td>
            <td>{{$in->Your_Name}}</td>   
            <td>{{$in->Location}}</td>   
            <td>{{$in->Email_Id}}</td>   
            <td>{{$in->Phone}}</td>   
            <td>{{$in->Message}}</td>   
            <td><a class="button" title="Delete" href="/feedback/{{$in->id}} #popup1"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        @endforeach
        <!-- </tbody> -->

        <tbody class="tr2" id="content">
        </tbody>
    </table>
   
    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>message deleted successfully</h2>
            <a class="close" href="#">&times;</a>       
        </div>
	</div>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){
            var value = $(this).val().toLowerCase();
            $(".tr2").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);                      
            });
        });
    });
    
</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function(){	
    $(".tr2:odd").css({"background-color":"#222"});
    $(".tr2:even").css({"background-color":"#111"});    
    });
</script>

<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
</body>
</html>