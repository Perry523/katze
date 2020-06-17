<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Katze</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <style>
        .full-height {
            height: 100vh;
        }

        body{
            background-color: white;
        }

        .position-ref {
            position: relative;
        }

        

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .btn .nav-link {
            color: brown;
        }

        .btn-primary {
            margin: 2px;
        }

        .navbar-expand {
            margin-bottom: 30px
        }

        .carousel-indicators li{
            background-color: blue;
        }
        .carousel-control-prev-icon  {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2300f' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
            color: #3897f0;
        }
        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2300f' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
        }

    </style>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
        <nav class="navbar navbar-dark navbar-expand  w-100" style="background-image: url('{{ asset("img/galaxy6.jpg") }}'); background-size: cover;">
            <div class="nav-bg"></div>
        <img class="navbar-brand"  src = "{{ asset('img/logo2.png') }}" alt="" height="50" width="60">
                <ul class="navbar-nav mr-auto">
                    <li>
                    <a class="btn btn-danger" href="{{url('lentes')}}">lentes</a>
                    </li>
                    <li class="nav-item btn-group">
                        <button class="btn nav-link active">Cores<button class="btn dropdown-toggle dropdown-toggle-split" style="color: white;" data-toggle="dropdown"></button></button>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Amarelo</div>
                            <div class="dropdown-item">Azul</div>
                            <div class="dropdown-item">Branco</div>
                            <div class="dropdown-item">Castanho</div>
                            <div class="dropdown-item">Cinza</div>
                            <div class="dropdown-item">Laranja</div>
                            <div class="dropdown-item">Preto</div>
                            <div class="dropdown-item">Rosa</div>
                            <div class="dropdown-item">Roxo</div>
                            <div class="dropdown-item">Verde</div>
                            <div class="dropdown-item">Vermelho</div>

                        </div>
                    </li>

                    <li class="nav-item btn-group">
                        <button class="btn nav-link active btn">Tipos<button class="btn dropdon-toggle dropdown-toggle-split" style="color: white;" data-toggle="dropdown";
                            ></button></button>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Atísticas</div>
                            <div class="dropdown-item">Big Size</div>
                            <div class="dropdown-item">Natural</div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <button class="btn nav-link active">Promoção</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn nav-link active">Acessórios</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn nav-link disabled" title="Em Breve" href="#">Pre-venda</button>
                    </li>
                </ul>

                    <form action="#">
                        <input class="form-control" placeholder="Procurar por nome" type="text" value="">
                    </form>


                    <div class="btn-group ml-3">
                        <a class="btn btn-primary" href="{{url('login')}}">Login</a>
                            <button class="btn dropdown-toggle dropdown-toggle-split btn-primary" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <form class="px-4 py-3">
                                  <div class="form-group">
                                    <label for="exampleDropdownFormEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@mail.com">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleDropdownFormPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                      Lembrar-se
                                    </label>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Confirmar</button>
                                  <!--<div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with" data-auto-logout-link="true" data-use-continue-as="true"></div>
                                  --></form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Novo por aqui? Cadastre-se</a>
                                <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                              </div>
                              <a class="btn btn-danger" href="{{url('create')}}">Cadastrar</a>

                        </div>
            </nav>






            <div class="container-fluid border-1">
        <div class="fb-page float-right w-25 border-left" data-href="https://www.facebook.com/katze_lens-2335074400147870/" data-tabs="timeline" data-width="" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/katze_lens-2335074400147870/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/katze_lens-2335074400147870/">katze_lens</a></blockquote></div>
        <!--<script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-31c3a6ea-9747-4f68-b851-ebec06d605e2 w-75"></div>-->
        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B8wUu5HluOl/?utm_source=ig_embed&amp;utm_campaign=loading" style="height: 300px" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B8wUu5HluOl/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B8wUu5HluOl/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por Katze | Lentes de Contato (@katze_lens)</a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-02-19T16:24:36+00:00">19 de Fev, 2020 às 8:24 PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>        </div>



        <div class="container-fluid">
            <div class="row-cols-2">
            <div class="col float-left" id="destaques">
                <h2><div class="text-center"> Destaques </div></h2>
                <!--<div class="row row-cols-xs-12 row-cols-md-2 row-cols-lg-3 justify-content-center border-top">

                </div>-->

                <div id="carouselExampleIndicators" class="carousel slide" style="collor: black" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="row ">
                            <div class="col">
                                <div class="card">
                                    <div class = case>
                                        <img class="card-img-top" data-scale="2.4" src="{{asset('img/l1.jpg')}}">
                                    </div>
                                        <div class="card-body ">
                                        <h4><div class="card-title text-center">Lente tal</div></h4>
                                        <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class = case>
                                        <img class="card-img-top" data-scale="2.4" src="{{asset('img/l3.jpg')}}">
                                    </div>
                                        <div class="card-body ">
                                        <h4><div class="card-title text-center">Lente tal</div></h4>
                                        <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l2.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                            <h4><div class="card-title text-center">Lente tal</div></h4>
                                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l4.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                            <h4><div class="card-title text-center">Lente tal</div></h4>
                                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                <div id="carouselExample" class="carousel slide"  data-ride="carousel" data-interval="999000">

                </div>
            </div>
            </div>

            <div class="col float-right" id="maisvendidos">
                <h2><div class = "text-center">Promoção</div></h2>
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l1.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                            <h4><div class="card-title text-center">Lente tal</div></h4>
                                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l3.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                                <h4><div class="card-title text-center">Lente tal</div></h4>
                                                <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top"src="{{asset('img/l4.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                            <h4><div class="card-title text-center">Lente tal</div></h4>
                                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class = case>
                                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l6.jpg')}}">
                                        </div>
                                            <div class="card-body ">
                                            <h4><div class="card-title text-center">Lente tal</div></h4>
                                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9999000"></div>
                </div>
        </div>
        </div>
        <div class="container-fluid">
            <div id="products" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            </div>
        </div>
    <!--@foreach ($lentes as $lente)
        <div class="card">
            <div class = case>
                <img class="card-img-top"src="{{asset('img/l4.jpg')}}">
            </div>
                <div class="card-body ">
                <h4><div class="card-title text-center">{{$lente->nome}}</div></h4>
                <h6><div class="text-center card-text"> R$ 75 </div></h6>
                <a class="btn btn-primary" href="#"> Comprar </a>
            </div>
        </div>
    @endforeach-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>



    <script>


            //cardtitle.classList.add('')
            /*<div class="col">
                    <div class="card">
                        <div class = case>
                            <img class="card-img-top" data-scale="2.4" src="{{asset('img/l3.jpg')}}">
                        </div>
                            <div class="card-body ">
                            <h4><div class="card-title text-center">Lente tal</div></h4>
                            <h6><div class="text-center card-text"> R$ 75 </div></h6>
                        </div>
                    </div>
                </div>*/
        })
    </script>
   <script>

        products = document.getElementById('products')
        products.innerHTML = products.innerHTML +
            `
            <div class="col" id="test">
                <div class="card">
                    <div class = case>
                        <img class="card-img-top" data-scale="2.4" src="{{asset('img/l6.jpg')}}">
                    </div>
                    <div class="card-body ">
                        <h4><div class="card-title text-center">Lente tal</div></h4>
                        <h6><div class="text-center card-text"> R$ 75 </div></h6>
                    </div>
                </div>
            </div>
            `
        $.get('api/lentes',function(data){
            lentes = JSON.parse(data)
            lentes.forEach(lente => {
                products.innerHTML = products.innerHTML +
                `<div class="col">
                        <div class="card">
                            <div class = "case">
                                <img class="card-img-top" data-scale="2.4" src="{{asset('img/l3.jpg')}}">
                            </div>
                                <div class="card-body ">
                                <div class=" text-muted text-center">${lente.marca}</div>
                                <h4><div class="card-title text-center">${lente.nome}</div></h4>
                                <h6><div class="text-center card-text"> R$ ${lente.preco} </div></h6>
                            </div>
                        </div>
                    </div>`
            })
            x = document.getElementById('test')
            x.style.display = "none"




            /*col = document.createElement('div')
            col.classList.add('col')
            products.append(col)
            card = document.createElement('div')
            card.classList.add('card')
            col.append(card)
            divcase = document.createElement('div')
            divcase.classList.add('case')
            card.append(divcase)
            img = document.createElement('img')
            img.classList.add('card-img-top')
            img.setAttribute('src',"{{asset('img/l3.jpg')}}")
            divcase.append(img)
            cardbody = document.createElement('div')
            cardbody.classList.add('card-body')
            card.append(cardbody)
            cardtitle = document.createElement('div')
            cardtitle.append('Product-1')
            cardtitle.classList.add('card-title','text-center')
            cardbody.append(cardtitle)
            cardtext = document.createElement('div')
            cardtext.append('50$')
            cardtext.classList.add('text-center', 'card-text')
            cardbody.append(cardtext)*/
        })
        setTimeout(() => {
            $('.case')

        .on('mouseover', function() {
            $(this).children('.card-img-top').css({
                'transform': 'scale(2.4)'
            })
         })
        .on('mouseout', function() {
            $(this).children('.card-img-top').css({
                'transform': 'scale(1)'
            });
        })
        .on('mousemove', function(e) {
            $(this).children('.card-img-top').css({
                'transform-origin': ((e.pageX - $(this).offset().left)
                / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
            });
        })
        }, 1000);

        /*.each(function(){
        $(this)
            // add a photo container
            .append('<div class="photo"></div>')
            // set up a background image for each tile based on data-image attribute
            .children('.photo').css({'background-image': 'url('+ $(this).attr(' ') +')'});
        })*/
</script>
    </body>
</html>
