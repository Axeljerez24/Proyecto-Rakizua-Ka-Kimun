<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>Pagina principal escuelita</title>
    <style>
        body{
            font-family: chocolatos !important;
        },
html {
    margin: 0;
    padding: 0;    
    
}

@font-face{
    font-family: chocolatos;
    src: url("{{ asset('fuentes/Chocolatos.ttf') }}") format('truetype');
}

    </style>
</head>
<body>
    <div class="hero">
        <div class="navbar">
            <nav>
                <img class="logo" src="/img/banner.png" alt="">
                <ul id="links">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Nosotros</a></li>
                </ul>
                <a class="btn" href="">Registrate</a>
            </nav>
    
        </div>
        

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
</body>
</html>