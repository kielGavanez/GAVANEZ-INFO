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
        }
        a{
            font-size: 20px;
            border: 1px solid black;
            border-radius: 1px;
            padding: .15rem .3rem;
            background-color: rgb(230   , 230  , 230 );
            text-decoration: none;        
        }
        a:link, a:active, a:visited{
            color: black;
        }
        a:hover{
            background-color: rgb(164, 255, 255);
        }
        .container{
            padding-top: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form  method="POST">   
            <h1>Login Page</h1>
            @csrf
            <div><input type="email" name="email" id="email" placeholder="E-mail"></div>
            <div><input type="password" name="password" id="password" placeholder="Password"></div>
            <div><input type="submit" value="Submit"></div>
            <div><a href="{{route('register')}}">Register</a></div>
        </form>

        
    </div>
</body>
</html>