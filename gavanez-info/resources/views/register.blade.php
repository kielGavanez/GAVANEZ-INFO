<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-block: .5rem;
        }
        form{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            height: 300px;
            width: 400px;
        }
        form input{
            font-size: 20px;
            text-transform: capitalize;
        }
        a{
            font-size: 20px;
            border: 1px solid black;
            border-radius: 5px;
            padding: .5rem;
            background-color: rgb(230   , 230  , 230 );
            text-decoration: black;
            text-decoration-color: black;
        }
        .container{
            padding-top: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form  method="POST">
            <h1>Registration Page</h1>
            @csrf
            <div><input type="text" name="name" id="name" placeholder="Name"></div>
            <div><input type="email" name="email" id="email" placeholder="email"></div>
            <div><input type="password" name="password" id="password" placeholder="password"></div>
            <div><input type="submit" value="Submit"></div>
            <a href="{{route('login')}}">Login</a>
        </form>
    </div>
    
    
</body>
</html>