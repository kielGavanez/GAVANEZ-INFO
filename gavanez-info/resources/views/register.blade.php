<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registration Page</h1>
    <form  method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Submit">
    </form>
    <a href="{{route('login')}}">Login</a>
</body>
</html>