<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert" method="post">
    @csrf
        <label for="Name"> Name: </label>
        <input type="text" name="name" placeholder="Name"><br><br>
        
        <label for="Age"> Age: </label>
        <input type="text" name="age" placeholder="age"><br><br>

        <label for="Date"> Date: </label>
        <input type="date" name="date" placeholder=""><br><br>

        <label for="Status"> Status: </label>
        <input type="text" name="status" placeholder="status"><br><br>
        <label for="Name"> Gender: </label>
        Male<input type="radio" name="gender" value="M">
        Female<input type="radio" name="gender" value="F"><br><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>