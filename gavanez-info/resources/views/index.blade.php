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
        form input, table th, table td{
            font-size: 20px;
        }
        form input{
            margin-top: 2rem;
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
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
        }
        .table{
            height: 60%;
            overflow-x: hidden;
            overflow-y: scroll; 
        }
        .table thead th {
            position:sticky;
            top:0;
            background-color: #fff;
        }
        h1{
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="border: 1px solid black; 
                    display: flex; 
                    flex-direction:column;
                    justify-content:center; 
                    align-items:center;
                    padding-inline: 50px;
                    height: 400px;
                    margin-top: 150px;">
        <h1>Dashboard</h1>
            <div class="table">
            <table border="1px solid black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $a)
                        <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            <td><a href="{{route('delete', $a)}}">Delete</a></td>
                        </tr>
                    @empty
                        <tr>
                            <span>No Data</span>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            <form method="POST">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </div>
    </div>
</body>
</html>