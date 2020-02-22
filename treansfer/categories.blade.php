<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aventura1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Aventura.html">Aventura</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Jogar<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Diario.html">Diario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="itens.html">Itens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Habilidades</a>
            </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">{{ $category->title }}</h1>
                <p class="lead">{{ $category->desc }}</p>
                <p class="lead font-weight-bold">Faça sua Escolha:</p>
            </div>
        </div>
    </header>    
    <main>
        <div class="container">
            <div class="card-columns">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div  class="card-header text-center">
                        <a class="btn btn-dark" href="esgoto.html" role="button">Escolher</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Entrar pelo Esgoto</h5>
                        <p class="card-text">A entrada do esgoto é nojenta e cheia de mendigos. Porém não vê nenhum guarda.</p>
                    </div>
                </div>     
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
     
     
     <ul>
        @if(count($categories) > 0)
            @foreach ($categories as $category)
                <li>{{ $category->title }}</li>
                <ul>
                    @if(count($category->childCategories))                        
                        @foreach ($category->childCategories as $subCategories)
                            <li>{{$subCategories->title}}</li>
                        @endforeach
                    @endif
                </ul>
            @endforeach
        @endif
    </ul>