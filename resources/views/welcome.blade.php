@extends('general.template')
@section('content')
      <body>
        
    
         <section id="first">
            <div class="row no-gutters ">
                <div class="col-lg-5 d-flex">
                    <div class="container margin-y px-5">
                        <br>
                        <h1 class="divider"></h1>
                        <h1 class="my-2">Tu escuela online de Mapudungun!</h1>
                        <h1 class="divider"></h1>
                        <p class="lead-xl">Bienvenido a Rakizua Ka Kimun, tu nueva escuela de Mapudungun. Aquí aprenderás nuestra lengua ancestral de manera didactica, entretenida y gratuitamente.</p>
                       
                        <div class="">
                            <a href="/registro" class="btn btn-outline-primary " >Registrate ahora!</a> <br>   
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="col-lg-7  my-3" >
                    <img src="{{  asset('img/escuela.png') }}"  class="img-fluid" width="750px" alt="Principal">
                    
                </div>
    
            </div>
            <br>
        </section> 
    
        <section id="about-us" style="background-image: url("{{ asset('img/mapuche1.png') }}");" >
            <div class="container-fluid bg-primary"  id="NuestroTrabajo">
                <div class="content-center">
                    <h1 class="">¿Quienes somos?</h1>
                    <h1 class="divider2"></h1>
                    <h4>"<b>Somos una asociación indígena llamada Tripay Antu conformada por socios de etnia mapuche,</b> en su mayoría, de la comuna de Maipú"</h4>
                    <h1 class="divider2"></h1>
                    <p>(*) El presidente de nuestra asociación es Mauricio Llaitul Acum.</p>
                </div>
          
            </div>
        </section>
    
    
        <section id="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block" src="{{ asset('img/mapuche1.png') }}" alt="First slide">
                    <div class="carousel-caption">
                        <h3 class="d-block ">Algo</h3>
                        <p class="lead pb-5" style="color:black;">Algo mas.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block " src="{{ asset('img/logo.png') }}" alt="Second slide">
                    <div class="carousel-caption">
                        <h3 class="d-block ">Algo</h3>
                        <p class="lead d-none d-sm-block" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eosksjadkasjldkjksjkds aksjaksj lskdlsajajjajajajajalskal</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" heigth = 50px src="/img/img3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="d-block ">Algo</h3>
                        <p class="lead d-none d-sm-block" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eosksjadkasjldkjksjkds aksjaksj lskdlsajajjajajajajalskal</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/img4.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="d-block ">Algo</h3>
                        <p class="lead d-none d-sm-block" style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eosksjadkasjldkjksjkds aksjaksj lskdlsajajjajajajajalskal</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev bg-dark text-black" style="color:black;" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <ion-icon name="chevron-back-circle-outline"></ion-icon>
                </a>
                <a class="carousel-control-next bg-dark text-black" style="color:black;" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <ion-icon name="chevron-forward-circle-outline"></ion-icon> 
                </a>
              </div>    
        </section>
    
    
         
    
        
    
        
        
    
        
            
       
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>
        <!-- Para carousel-->
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
        <script>window.addEventListener('load', function(){
            new Glider(document.querySelector('.carousel__lista'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: '.carousel__indicadores',
                arrows: {
                    prev: '.carousel__anterior',
                    next: '.carousel__siguiente'
                },
                responsive: [
                    {
                      // screens greater than >= 775px
                      breakpoint: 450,
                      settings: {
                        // Set to `auto` and provide item width to adjust to viewport
                        slidesToShow: 2,
                        slidesToScroll: 2
                      }
                    },{
                      // screens greater than >= 1024px
                      breakpoint: 800,
                      settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                      }
                    }
                ]
            });
        });</script>
    </body>
</html>
@endsection


