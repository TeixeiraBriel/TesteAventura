<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="jumbotron">
            <h1>Teste</h1>
        </div>
        <div class="container">
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col">
                    <input id="title" name="title" type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <select id="category_id" name="category_id" class="form-control">
                            @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->title}}</option>                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-right mt-2">
                    <button type="submit" class="btn btn-success">Criar</button>
                <a href="/"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
                </div>
            </form> 
        </div>
    </body>
</html>
