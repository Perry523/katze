
<!doctype html>
<html lang="en">
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
  </head>

  <body class="text-center">
    <form class="form-signin">
    <img class="mb-4" src="{{asset('img/logo2.png')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-2">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-se
        </label>
        <p class=" text-muted">Não tem uma conta? Cadastre-se</p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
    </form>
  </body>
</html>
