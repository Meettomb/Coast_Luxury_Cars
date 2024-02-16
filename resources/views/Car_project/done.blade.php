<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('CSS\done.css')}}">
    <script src="{{asset('javascript\script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   

</head>
<body>
    @include('Car_project.header')
    <div class="con">
        <div class="child">
            <div class="check"><i id="fa" class="fa fa-check"></i></div>
            <div class="succ">
                <p>payment successfully Completed</p>
            </div>
            <div class="succ2">
                <p><a class="a" href="/search_receipt">Search Your receipt</a></p>
            </div>         
        </div>
    </div>



</body>
</html>