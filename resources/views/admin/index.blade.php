<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>ADMIN</title>
</head>
<body>
    <div class="container">
        <h1>SOY LA UI ADMIN STUDENT </h1>
        <table class="table table-stripped table-bordered">
            <thead>
                <tr>
                    <th>CODE</th>
                    <th>NAME</th>
                    <th>CAREER</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $st)
                <tr>
                    <td>{{$st->code}}</td>
                    <td>{{$st->name}}</td>
                    <td>{{$st->career}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-12">
                {{$student->render()}}
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>