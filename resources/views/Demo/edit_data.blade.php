<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>
<form action="/edit" method="get">
    @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">

        <label for="Name"> Name: </label>
        <input type="text" name="name" value="{{$data['Name']}}" placeholder="Name"><br><br>
        
        <label for="Age"> Age: </label>
        <input type="text" name="age" value="{{$data['age']}}" placeholder="age"><br><br>

        <label for="Date"> Date: </label>
        <input type="date" name="date" value="{{$data['dob']}}" placeholder=""><br><br>

        <label for="Status"> Status: </label>
        <input type="text" name="status" value="{{$data['status']}}" placeholder="status"><br><br>
        <label for="Name"> Gender: </label>
        @if($data['gender']=='M')
        <input type="radio" name="gender" value="M" checked>Male
        <input type="radio" name="gender" value="F">Female<br><br>
        @else
        <input type="radio" name="gender" value="M" >Male
        <input type="radio" name="gender" value="F" checked>Female<br><br>
        @endif
        <input type="submit" name="edit">
    </form>
</body>
</html>