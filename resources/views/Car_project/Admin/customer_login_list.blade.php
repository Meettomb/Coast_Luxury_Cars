<?php
    $i=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login List</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\Admin\login_list.css')}}">
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

<div class="table_div">
    <table>
        
        <tr class="tr1">
            <th>Id</th>
            <th>Full Name</th>
            <th>Email Id</th>
            <th>Phone Numbar</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Password</th>
            <th>Role</th>
            <!-- <th>Action</th> -->
        </tr>
        @foreach($info as $in)
        <tr class="tr2">
            <td>{{$loop->iteration}}</td>
            <td>{{$in['Full_Name']}}</td>
            <td>{{$in['Email_Id']}}</td>
            <td>{{$in['Phone_Number']}}</td>
            <td>{{$in['Birth_Date']}}</td>
            <td>{{$in['Gender']}}</td>
            <td>{{$in['Password']}}</td>
            <td>{{$in['Role']}}</td>
            <!-- <td><a class="button" title="Delete" href="customer_login_list/{{$in->id}}"><i class="fa fa-trash-o"></i></a></td> -->
            
        </tr>
        @endforeach
    </table>
</div>      


<script type="text/javascript" language="javascript">
    $(document).ready(function(){	
    $(".tr2:odd").css({"background-color":"#222"});
    $(".tr2:even").css({"background-color":"#111"});    
    });
</script>


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
</body>
</html>