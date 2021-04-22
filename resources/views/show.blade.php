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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
          <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$show->id}}</h5>
                    <h5 class="card-title">Nom compagny: {{$show->nom_compagny}}</h5>
                    <h5 class="card-title">Adresse Compagny: {{$show->adress_compagny}} ans</h5>
                    <h5 class="card-title">Tel:{{$show->phone}}</h5>
                    <h5 class="card-title">Mail: {{$show->mail}}</h5>
                    <h5 class="card-title">Nom: {{$show->firstname_user}}</h5>
                    <h5 class="card-title">Prenom: {{$show->name_user}}</h5>
                    <h5 class="card-title">Image: {{$show->image}}</h5>
        
                </div>
            </div>
      </div>
      
      


    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>