<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
        <h1>Daily Tasks</h1>
                <div class="row">
                    <div class="col-md-12">   

                    @foreach($errors->all() as $error)

                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>

                    @endforeach

                    <form method="post" action="/savetask">
                    
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here" required>
                        {{csrf_field()}}    
                        </br>
                        <input type="submit" class="btn btn-primary" value="Save">
                        <input type="button" class="btn btn-warning" value="Clear">
                    
                    </form>
                            </br></br>
                            <table class="table table-white">
                                <th>ID</th>
                                <th>Task</th>
                                <th>Completed Task</th>
                                <th>Acton</th>

                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->id}}</td>
                                
                                        <td>{{$task->task}}</td>
                                    
                                        <td>
                                                @if($task->iscompleated)
                                                <button class="btn btn-success">Completed</button>
                                                @else
                                                <button class="btn btn-warning">Not Completed</button>
                                                @endif
                                        </td>
                                        <td>
                                            @if(!$task->iscompleated)
                                            <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as Completed</a>
                                            @else
                                            <a href="/notcompleted/{{$task->id}}" class="btn btn-danger">Mark as not Completed</a>
                                            @endif
                                            <a href="/delete/{{$task->id}}" class="btn btn-warning">Delete</a>
                                            <a href="/update/{{$task->id}}" class="btn btn-success">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>