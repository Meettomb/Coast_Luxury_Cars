<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <table border=2>
        <tr>
            <th >ID</th>
            <th >Name</th>
            <th >Age</th>
            <th >DOB</th>
            <th >status</th>
            <th >Gender</th>
            <th >Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($info as $in)
        <tr>
            <td >{{$in['id']}}</td>
            <td>{{$in['Name']}}</td>
            <td>{{$in['age']}}</td>
            <td>{{$in['dob']}}</td>
            <td>{{$in['status']}}</td>
            <td>{{$in['gender']}}</td>
            <td><a href="delete/{{$in['id']}}">Delete</a></td>
            <td><a href="edit/{{$in['id']}}">Edit</a></td>

        </tr>
        @endforeach
    </table>
    
    
    <form action="insert" method="get">
        <input type="submit" name="submit" value="Add Data">
    </form>
</body>
</html>