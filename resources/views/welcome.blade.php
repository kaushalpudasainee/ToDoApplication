<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
        }
        </style>
</head>

<body>
    <h1>Todo application</h1>
    <div>
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <input type ="text" name="todo">
            <button type="submit">Save</button>
    </form>
   
    <!-- <ul>
        @foreach($lists as $value)
        <li>{{$value->title}}</li>
        @endforeach
    </ul> -->
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach($lists as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>
                <a href="{{url('/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{url('/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
