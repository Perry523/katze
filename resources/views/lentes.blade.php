<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
    <style>

        .modal{
            width: 80%;
            left: 10%;
            top: 5%;
        }
        .active{
            background-color: greenyellow !important;
            border: 2px solid green !important;
            color: black;
        }

    </style>
</head>
<body>

    <div class="navbar navbar-dark bg-light navbar-expand-lg">
        <div class="navbar-brand"></div>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <button data-toggle = "modal" data-target = "#cadastro" class="btn btn-primary mr-5">Criar</button>
                </li>
                <form class = "form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" placeholder="Filtrar por nome" type="text">
                    <select  value = "Tipo de filtro" class="form-control"></select>
                </form>
                <li class="nav-item">
                    <div class="btn btn-danger">Excluir</div>
                </li>
            </ul>

        </div>
    <a class="btn btn-danger" href="{{url('/')}}">voltar</a>
    </div>

<table class="table table-sm table-bordered" cellspacing = "10">
    <thead>
        <tr>
            <th scope="col" style="width: 2%"><input type="checkbox"></th>
            <th scope="col" style="width: 7%">Imagem</th>
            <th scope="col" style="width: 25%">Info</th>
            <th scope="col">Categorias</th>
            <th scope="col">Preço</th>
            <th scope="col">Status</th>
            <th scope="col" style="width: 5%">Estoque</th>
            <th scope="col" style="width: 5%">Editar</th>
            <th scope="col"style="width: 5%">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lentes as $lente)
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td class="text-wrap m-0 align-top"><img src="{{ asset('img/l1.jpg') }}" height="100px" alt="150px"></td>
            <td class="">
                    <div class="justify-middle">
                        {{ $lente->nome }}
                    </div>
                    <div>Codigo: {{$lente->codigo}}</div>
                    <div>Marca: {{$lente->marca}}</div>

            </td>
            <td>{{$lente->categoria}}@if ($lente->fretegratis), Frete Gratis @if ($lente->destaque)
                    , Destaque
                @endif
            @endif</td>
            <td>{{ $lente->preco }} R$</td>
                @if ($lente->ativo)
                    <td style="width: 5%"><div class="btn btn-success">Ativo</div></td>

                @else
                    <td style="width: 5%"><div class="btn btn-secondary">Inativo</div></td>

                @endif
            <td>0 Und</td>
            <td><a class="btn btn-primary" href="">Editar</a></td>
            <td><a class="btn btn-danger" href="">Excluir</a></td>

        </tr>
        @endforeach
    </tbody>

</table>
<div class="modal fade" role="dialog" tabindex="-1" id="cadastro">
    <div class="modal-content">
    <div class="modal-body">
    <form action="{{ route('lentes.store') }}" method="POST">
        @csrf
        <div class="col-8 float-right">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="#codigo">Codigo do produto</label>
                        <input id="codigo" type="text" name= "codigo" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="#marca">Marca</label>
                        <input type="text" id = "marca" name= "marca" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-8">
                    <label for="#nome">Nome</label>
                    <input type="text" id = "nome" name= "nome" class="form-control">
                </div>
            <div class="form-group col ">
                <label for="#estoque">Preço</label>
                <input type="number" id="estoque" name= "estoque" placeholder="R$" class="form-control">
            </div>
                <div class="form-group col ">
                    <label for="#preco">Desconto</label>
                    <input type="number" id="preco" name= "preco" placeholder="%" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label class="text-center" for="#categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-control">
                        <option value="Pre-venda">Pré Venda</option>
                        <option value="Artisticas">Artísticas</option>
                        <option value="Bigsize">Big Size</option>
                        <option value="Naturais">Naturais</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Cadastrar</label>
                    <div class="row">
                        <button type="button" onclick="criaCor()" class="btn btn-primary">Cores</button>
                    </div>
                </div>
                <div class="col-5">
                    <label class="text-center " for="">Preço total</label>
                    <input class="form-control" disabled>
                </div>
            </div>
            <div class="row m-3">
                <div class="col">
                    <div class="btn-group-toggle"  data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "frete" type="checkbox"> Frete Gratis
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="btn-group-toggle"data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "destaque"  type="checkbox"> Destaque
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "ativo"  type="checkbox"> Ativo
                        </label>
                    </div>
                </div>
            </div>


        </div>
    <img src="{{asset('img/Logo.png')}}" class="col-4" height="320px">
            <div class="form-group col-7 justify-content-start" id = "modal" >
                <label for="#info">Informações do produto</label>
                <textarea type="text" id = "info" name= "info" class="form-control" rows = "3"></textarea>
                <input type="submit" class="btn btn-primary float-right" onclick="val()" value="Salvar">
            </div>
            <!--<input type="submit" class="btn btn-danger float-right" value="Cancelar">-->


        </form>
    </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
    <script>
        document.getElementById('nome').value = ' '
        document.getElementById('codigo').value = ' '
        document.getElementById('preco').value = ' '
        document.getElementById('marca').value = ' '
        document.getElementById('info').value = ' '
        document.getElementById('estoque').value = ' '
    </script>
    <script>
        function criaCor() {
            modal = document.getElementById('modal')
            modal.insertAdjacentHTML("beforebegin",
            `<div class="form-inline float-right col-7">
                <select class="form-control float-right" name="cor">
                    <option value="Azul">Azul</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Verde">Verde</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Roxo">Roxo</option>
                    <option value="Preto">Preto</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Laranja">Laranja</option>
                    <option value="Branco">Branco</option>
                    <option value="Castanho">Castanho</option>
                </select>
                <input type="text" name = "tom" class="form-control col-4" placeholder="Tom">
                <input type="number" name = "estoque" class="form-control col-3" placeholder="Und">
            </div>` )

        }
        function cores() {
            produtos = document.getElementById('products')

        }
        function toggle() {
          document.querySelectorAll('.act').forEach(btn =>{
              btn.onclick = function(e){
                e.target.classList.toggle('btn-danger')
                e.target.classList.toggle('ativo')
              }
          })
        }
        function val(){
            document.querySelectorAll('.act').forEach(function(btn){
                if(btn.classList.contains('ativo')) btn.name = 'sim'
                else btn.name = 'nao'
            })
        }
    </script>
</body>
</html>
