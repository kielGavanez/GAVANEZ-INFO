<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
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
    <form method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
</body>
</html>