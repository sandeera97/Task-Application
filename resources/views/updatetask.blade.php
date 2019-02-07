<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UpdateTask</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
<br>
    
        <form action="/updatetaskdata" method="post">
        {{csrf_field()}} 
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
            <input type="hidden" name="btn" value="{{$taskdata->id}}">
            <br>
            <input type="submit" class="btn btn-danger" name="btn1" id="btn1" value="Update"/>&nbsp; &nbsp;
            <input type="button" class="btn btn-primary" name="btn2" id="btn2" value="Cancel"/>

        </form>  
    </div>
</div>
</body>
</html>