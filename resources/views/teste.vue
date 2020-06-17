<template>
<div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                <div id="carouselExample" class="carousel slide"  data-ride="carousel" data-interval="999000"></div>
            </div>
            </div>
</div>
</template>
    
<script>
export default {
        $('.case').on('mouseover', function() {
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

}
</script>

<style>
        .card-text{
            font-size: 20px;
            font-weight: 400;
        }
        .card-title{
            font-size: 20px;
            font-weight: bold;
        }
        .case {
            overflow: hidden;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
        .card-text {
            color: green;
            font-size: 15px;
        }

        .card{
            border: 0px;
            background-color: white;
        }

        .card-img-top {
            height: 17em;
            transition: transform .5s ease-out;
        }
</style>