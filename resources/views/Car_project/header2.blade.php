<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS\header2.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
</head>
<body>
    

<div class="header2">
    <span class="span1">Hello,<span class="span2">{{session('user')}}</span></span>
    <span class="pagedown"><a href="#down">Go Down</a></span>

    <input id="myInput" class="search_text" type="text" name="search" placeholder="Serch Car hear" autocomplete="off">
    <button class="search_button">Search</button>
        
</div>

    <hr class="hr1">


<script>
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){
            var value = $(this).val().toLowerCase();
            $(".Con_2_data_div").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);                      
            });
        });
    });
    
</script>


</body>
</html>