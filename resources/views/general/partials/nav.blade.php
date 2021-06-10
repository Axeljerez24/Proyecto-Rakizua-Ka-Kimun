<div>
    <nav class="navbar navbar-expand-lg navbar-inverse sticky-top" id="menu" >
    <div class="container">
        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu-outline"></ion-icon>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-right">
                <li class="nav-item">
                    <a class="nav-link mb-5"  href="/"><img src="{{ asset('img/banners.png') }}"  alt="inicio" style="max-width: 195px;"></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-2">
                <a class="nav-link" href="/nosotros" style="text-align: center; color: black;">Nosotros </a>
                    </li>
                <li class="nav-item px-2">
                <a class="nav-link" href="/ingresar" style="text-align: center; color: black;">Ingresar</a>
                </li>
                
                <div id="estilo">
                    <!--<button  type="button" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;"> <a href="#formulario"  >Realiza una cotización</a></button>-->
                    <a href="/registro" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;">Registrate aquí</a>    
                
                </div>
                </ul>
        </div>
    </div>
  </nav>
</div>
<br>
<script>
        $(window).scroll(function(){
            if ($("#menu").offset().top > 56) {
                $("#menu").addClass("bg-inverse");
            }else
                $("#menu").removeClass("bg-inverse");
            }
        });
</script>