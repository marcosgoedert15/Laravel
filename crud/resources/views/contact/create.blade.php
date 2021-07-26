<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Criar contato</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Laravel</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" href="/">Página Principal</a>
            <a class="nav-link" href="create">Novo Usuário</a>
            <a class="nav-link" href="list">Lista De Usuários</a>
          </nav>
        </div>           
      </header>
    </div>
        <div class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <form method="POST" action="/create">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Preencha seu nome">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Preencha seu telefone">
                    </div>
                    <div class="form-group">
                        <label for="email">Endereço de Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Preencha seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Data de nascimento</label>
                        <input type="text" class="form-control" id="birthday" name="data_nascimento" placeholder="Preencha">
                    </div>
                    <label>Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="genderMan" value="0" checked>
                        <label class="form-check-label" for="genderMan">
                            Homem
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="genderWoman" value="1">
                        <label class="form-check-label" for="genderWoman">
                            Mulher
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                @if ($errors->any())
                    <hr>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>