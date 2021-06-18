@extends('general.template1')
@section('content')

<body>

        
        

        <div class="row">
            <div class="col-1">
                <img src="/img/man.png" alt="">
                <img class="elements" src="/img/elements.png" alt="">
            </div>
            <div class="col-2">
                <h1>Escuela de Mapudungun <span>"Rakizuam Kakimun"</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, iure reiciendis fuga aliquam, accusantium dignissimos, quod eius enim recusandae provident neque! Maxime saepe magni iste doloribus qui accusantium, enim dolores?</p>
                <a class="btn" href="">Registrate</a>
                <a href="">Más sobre nosotros</a>
                <img class="estrellas" src="/img/estrellas.png" alt="">
                <img class="estrellas1" src="/img/estrellas.png" alt="">
                <img class="estrellas2" src="/img/estrellas.png" alt="">
                <img class="estrellas3" src="/img/estrellas.png" alt="">
                <img class="estrellas4" src="/img/estrellas.png" alt="">
                <img class="estrellas5" src="/img/estrellas.png" alt="">
                <img class="estrellas6" src="/img/estrellas.png" alt="">
                <img class="estrellas7" src="/img/estrellas.png" alt="">
                <img class="estrellas8" src="/img/estrellas.png" alt="">
                <img class="estrellas9" src="/img/estrellas.png" alt="">       
            </div>
        </div>
    </div>


    <!-- Secciones siguientes -->

    <div class="categories">
        <div class="small-container">   
           <h1 class="tittle">¿Quienes somos?</h1>
            <div class="row">
                <div class="container">
                    <h3>"Somos una asociacion indigena, la cual busca que todos volvamos a estar conectados
                        con nuestras raices y tambien con el pueblo mapuche."
                    </h3>
                </div>
            </div>

           <div class="row">
                <div class="col-3">
                    <img src="/img/logobandera.png" alt="">
                </div>
                <div class="col-3">
                    <img src="/img/logobandera.png" alt="">
                </div>
                <div class="col-3">
                    <img src="/img/logobandera.png" alt="">
                </div>
            </div>
        </div>    
    </div>

    
    <!-- Secciones siguientes -->
<section id="proposito">
    <div class="proposito">
        <div class="small-container">   
            <div class="row">
                <div class="col-6">
                    <h1 class="tittle">Misión</h1>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae deleniti expedita, possimus rerum fuga beatae quae 
                        incidunt, aliquam dolorum accusamus, maiores alias dolores sapiente? Minima sed aut est dolores velit?</h3>
                </div>
                <div class="col-6">
                    <h1 class="tittle">Visión</h1>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae deleniti expedita, possimus rerum fuga beatae quae 
                        incidunt, aliquam dolorum accusamus, maiores alias dolores sapiente? Minima sed aut est dolores velit?</h3>
                </div>
            </div>
        </div>    
    </div>

</section>
    
    <!-- Nosotros -->

    <div class="small-container">
        <h2 class="tittle">Nosotros</h2>
        <div class="row">
            <div class="col-4">
                <img src="/img/logo.png" alt="">
                <h3>Axel Jerez</h3>
                <p>Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso</p>
            </div>
            <div class="col-4">
                <img src="/img/logo.png" alt="">
                <h3>Axel Jerez</h3>
                <p>Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso</p>
            </div>
            <div class="col-4">
                <img src="/img/logo.png" alt="">
                <h3>Axel Jerez</h3>
                <p>Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso Breve descripcion de lo que se hara durante el curso</p>
            </div>
        </div>
    </div>


    <!-- La escuela -->
    <div class="escuela">{
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <h1>Aprende con nosotros ahora!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe architecto repudiandae perferendis qui 
                        beatae? A vitae architecto ad, ratione, illum impedit earum, su
                        scipit sunt quod voluptas autem. Laudantium, aut. Magnam?</p>
                        <a class="btn" href="">Registrate</a>
                </div>
                <div class="col-1">
                    <img src="/img/banner.png" alt="" class="escuela-img">
                </div>
            </div>
        </div>
    </div>

    <!-- Secciones siguientes -->

    <div class="categories">
        <div class="small-container">   
           <h1 class="tittle">¿Quienes somos?</h1>
            <div class="row">
                <div class="container">
                    <h3>"Somos una asociacion indigena, la cual busca que todos volvamos a estar conectados
                        con nuestras raices y tambien con el pueblo mapuche."
                    </h3>
                </div>
            </div>
        </div>    
    </div>

    <!-- colaboradores -->
    <div class="colaboradores">
        <div class="small-container">
            <h1 class="tittle">Colaboradores</h1>
            <div class="row">
                <div class="col-5">
                    <img src="/img/bandera.png" alt="">
                </div>
                <div class="col-5">
                    <img src="/img/logo-core-2019.png" alt="">
                </div>
                <div class="col-5">
                    <img src="/img/logo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="/img/gore.png" alt="">
                </div>
                <div class="col-5">
                    <img src="/img/bandera.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--- Footer -->

    
<script>
    var links = document.getElementById("links");
    links.style.maxHeight = "0px";
    function menutoggle(){
        if(links.style.maxHeight == "0px"){
            links.style.maxHeight = "200px";
        }else{
            links.style.maxHeight = "0px" 
        }
    }    
        
</script>
</body>

<script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>
</html>
@endsection