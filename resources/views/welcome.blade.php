<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Membre <span class="sr-only">(current)</span></a>
            </li>
         
          </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom compagny</th>
            <th scope="col">Adress compagny</th>
            <th scope="col">Tel</th>
            <th scope="col">Mail</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Img</th>
            <th scope="col"> </th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($compagnies as $compagny)
                <tr>
                <th scope="row">{{$compagny->id}}</th>
                    <td>{{$compagny->nom_compagny}}</td>
                    <td>{{$compagny->adress_compagny}}</td>
                    <td>{{$compagny->phone}}</td>
                    <td>{{$compagny->mail}}</td>
                    <td>{{$compagny->firstname_user}}</td>
                    <td>{{$compagny->name_user}}</td>
                    <td>{{$compagny->image}}</td>
                    <td><a class="btn btn-primary" href="/compagny-show/{{$compagny->id}}">show</a></td>
                    <td>
                        <form action="/compagny-delete/{{$compagny->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                <td><a class="btn btn-primary" href="/compagny-edit/{{$compagny->id}}">Edit</a></td>
                    
                    
                    
                </tr>
            @endforeach
            
          
        </tbody>
      </table> 

      @include('create')

    </div>
      


    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>