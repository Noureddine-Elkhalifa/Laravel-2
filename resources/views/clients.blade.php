<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>List des client</h1>
    <div class="container my-4 mt-5">
    <table class=" table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
               <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td>{{$c -> id}}</td>
                    <td>{{$c -> nom}}</td>
                    <td>{{$c -> prenom}}</td>
                    <td>{{$c -> tel}}</td>
                    <td>
                        <a href={{route('clientsDetails',$c->id)}} class="btn btn-primary" method="post">Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        

    </table>
    </div>
</body>
</html>