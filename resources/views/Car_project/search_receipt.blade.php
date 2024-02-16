<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Receipt</title>

    <link rel="stylesheet" href="{{ asset('CSS\search_receipt.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   

</head>
<body>
    @include('Car_project.header')
    
    <h1>Finde Your Receipt</h1>
    <div class="search">
        <form action="receipt_find" method="get">
            <input type="text" name="query" id="" maxlength="16" placeholder="Enter Your Card Number" autocomplete="off">
            <button name="search">Search</button>
        </form>
    </div>
</body>
</html>