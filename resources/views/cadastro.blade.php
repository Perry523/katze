
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
    <style>
        body{
            background-image: url('img/galaxy6.jpg')
        }

    </style>
  </head>

  <body class="text-center">
  <form action="{{route('store')}}" method="POST" class="form-signin">
    @csrf
    <div class="form-group">
    <img class="mb-4" src="{{asset('img/logo2.png')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <input name="nome" type="text" id="Nome" class="form-control" placeholder="Nome" required autofocus>
      <input name="email" type="email" id="Email" class="form-control" placeholder="Email" required autofocus>
      <input name="senha" type="password" id="Senha" class="form-control m-0" placeholder="Senha" required autofocus>
      <input name="dma" type="date" id="DMA" class="form-control" placeholder="Data Nascimento" required autofocus>
      <input name="telefone" type="number" id="fone" class="form-control" placeholder="DDD + Numero" required autofocus>
      <div class="checkbox my-3 ">
        <p class=" text-light">Ja tem uma conta? Entrar</p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
    </div>
    </form>
  </body>
</html>
