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
<table class="table table-bordered">
  <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Opções</th>
  </tr>
  @foreach($contacts as $contact)
  <tr>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>
      <a class="nav-link" href={{$contact->id}}>
        <button>Editar</button>
      </a>
      <button onclick="mouseClicked({{ $contact->id }})">Deletar</button>
    </td>
  </tr>
  @endforeach

</table>
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

</body>

</html>

<script>
  function mouseClicked (id) {
    fetch('/' + id, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    })    
   // window.alert("O Registro Foi Apagado!")
    // dar reload na pagina
   // window.location.reload()
  }
</script>