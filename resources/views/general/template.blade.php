<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js%22%3E"></script>
    <!--Conexion Css -->
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style>
        body,
html {
    margin: 0;
    padding: 0;
    height: 100%;
}
.user_card {
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background: #0cda73ad;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
}
.brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: #af9a53;
    padding: 10px;
    text-align: center;
}
.brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
    background-image: url("{{ asset('img/logo.png') }}");
}
.form_container {
    margin-top: 100px;
}
.login_btn {
    width: 100%;
    background: #e6bc3083 !important;
    color: white !important;
}
.login_btn:hover {
    width: 100%;
    background: #e6303083 !important;
    color: black !important;
}
.login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
}
.login_container {
    padding: 0 2rem;
}
.input-group-text {
    background: #e0c10f !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c5e416 !important;
}
#formulario1 {
    background-image: url(../img/mapuches.png);
    background-position: absolute;
    background-size: 120px;
}
        :root {
            --dark: #1a1a1a;
            --white: #ffffff;
            --primary: rgba(46, 57, 157, 0.9);
            --warning: rgba(46, 57, 157, 0.3); 
        
        }
        
        html {
            scroll-behavior: smooth;
          }
        
        
        body{
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            letter-spacing: .03rem;
            background-color: #ced6e2 !important;
        }
        
        br{
            font-size: 20px;
            color: var(--primary) !important;
        }
        
        h1{
            font-family: 'Oswald', sans-serif;   
        }
        h2, h3 , .navbar-brand{
            font-weight: 500 !important;
            font-family: 'Oswald', sans-serif;
            line-height: 1.5 !important;
            font-size: 30px;
        }
        #first h1{
            font-size: 60px;
            color: var(--primary);
        }
        
        #first h1:hover{
            font-size: 63px;
        }
        
        #first p{
            padding-top: 30px;
            font-size: 22px;
            color: var(--primary);
        }
        .bg-primary{
            background-color: var(--primary) !important;
        }
        
        .bg-warning{
            background-color: var(--warning) !important;
        }
        
        .navbar{
            min-height: 6rem;
            background-color: #0A0045; 
            transition: all 1s ease;
            background-image: url("{{ asset('img/banner.png') }}") ; 
            background-size: 100% 150% !important;
            background-repeat: no-repeat;
            max-width: 100% !important;

        }
        
        .nav-link{
            color: var(--white) !important;
            font-size: 1.0rem;
        }
        
        .nav-link:hover{
            color: var(--white) !important;
            opacity: 55%;
        
        }

        
        .btn{
            color: var(--white);
            border: 1.5px solid var(--white);
            border-radius: 20px;
            min-width: 30px;
        }
        
        #first .btn{
            color: var(--primary) !important;
            border: 1.5px solid var(--primary) !important;
            /*border-color: var(--primary) !important;*/
        }
        
        
        #first .btn:hover{
            color: var(--white) !important;
            border-color: var(--primary) !important;
            background-color: var(--primary) !important;
        }
        
        #estilo a{
            color: var(--white);
        }
        
        #estilo a:hover{
            color: var(--primary) !important;
            font-weight: 400;
            text-decoration: none;
        }
        
        #first img{
            /*position: relative;*/
            border-radius: 15px;
            margin: 20px 20px;
        }
        
        /* Seccion us */
        #us h3{
            color: var(--primary);
            font-size: 45px;
            font-weight: 100;
        }
        
        #us p{
            color: var(--primary);
            font-size: 23px;
            padding-top: 60px;
        }
        .navbar-brand{
            color: var(--white);
        }
        
        
        .navbar-brand:hover{
            color: var(--white);
            opacity: 80%;
        }
        
        ion-icon{
            color: var(--white);
            font-size: 30px;
            border: none;
            text-decoration: none;
        }
        
        .section{
            padding: 6rem 0;
        }
        
        
        #slider img{
            background-position: center center !important;
            background-size: cover !important;
            position: relative;
            height: 800px;
            width: 100%;
        }
        #slider{
            padding: 0;
            margin: 0;
        }
        
        #slider p{
            color: var(--white);
        }
        
        /*.img-perfil img{
            width: 50px;
        }*/
        
        
        #slider ion-icon{
            color: white !important;
            font-size: 50px !important;
        }
        .divider {
            border-bottom: 2px solid var(--primary);
        }
        .divider2 {
            border-bottom: 2px solid var(--white);
            padding: 80px 0 0 0;
        }
        .divider3{
            border-bottom: 2px solid var(--white);
        }
        .margin-y{
            padding-top: 20px;
        }
        
        .margin-btn{
            padding:10px 180px;
        }
        
        
        /* Seccion about us */
        #about-us{
            background-image: url("{{ asset('img/mapuche1.png') }}") !important;
        }
        
        #about-us h1 , h2{
            color: var(--white);
            padding-top: 35px;   
        }
        
        #about-us p{
            font-size: 18px;
            color: var(--white);
            padding-bottom: 80px;
            margin: 0;
        }
        
        #about-us h4{
            color: var(--white);
            padding-top: 40px;
            font-weight: 100 !important;
            font-size: 28px;
        }
        
        .content-center {
            max-width: 800px;
            margin: 0 auto 0 auto;
            text-align: center;
        }
        
        .carousel{
            padding: 0;
            margin: 0;
        }
        .carousel-item{
            max-height: 600px !important;
            padding: 0;
        }
        
        /*Seccion formulario */
        #formulario {
            background-image: url("{{ asset('img/logo.png') }}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 50%;
        }
        
        #formulario h3{
            color: var(--white) !important;
            font-size: 45px;
            font-weight: 100;
        }
        
        #formulario p{
            color: var(--white);
            font-size: 23px;
            padding-top: 60px;
        }
        
        #formulario .btn{
            color: var(--white) !important;
            border: 1.5px solid var(--white) !important;
            /*border-color: var(--primary) !important;*/
        }
        
        
        #formulario .btn:hover{
            color: var(--primary) !important;
            border-color: var(--white) !important;
            background-color: var(--white) !important;
        }
        
        
        /* Seccion clientes*/
        
        #clientes h1{
            color: var(--primary);
        }
        #clientes p{
            color: var(--primary);
            padding: 20px;
            font-size: 20px;
        }
        #clientes img{
            width: 340px;
            height: 250px;
        }
        
        .margin-xy{
            padding-top: 80px;
            padding-bottom: 50px;
        }
        
        /* Seccion description */
        
        #description{
            padding: 0;
            margin: 0;
            padding-top: 35px;
            padding-bottom: 35px;
        }
        
        #description a:hover{
            text-decoration: none;
            opacity: 55%;
            color: var(--primary);
        }
        
        #description h1{
            color: var(--primary) !important;    
        }
        
        #description h3:hover{
            opacity: 75%;
        }
        
        #description p, h3 , ion-icon{
            color: var(--primary) !important;
        }
        
        #description h5{
            color: var(--primary);
            font-weight: 400;
        }
        #description img{
            border-radius: 150px;
        }
        
        
        #send h1{
            font-size: 70px;
            color: var(--primary);
            padding: 40px;
        }
        
        #send h4{
            color: var(--primary);
        }
        
        /* Seccion para footer*/

        .blog-footer{
            min-height: 6rem;
            background-color: var(--primary) !important; 
            color: white !important;

            
        }

        #footer {
            background-image: url(../img/img1v3.jpg);
            
        
        }
        
        #footer h4{
            font-weight: 100;
            font-size: 19px;
            color: var(--white);
        }
        #footer h4:hover{
            opacity: 75%;
        }
        #footer a:hover{
            text-decoration: none;
        }
        
        #footer i{
            color: var(--white) !important;
        }
        
        #footer nav{
            background-color: var(--primary);
        }
        
        
        /* Seccion aislacion*/
        
        #aislacion h1, h5{
            color: var(--primary);
            font-weight: 400;
        }
        
        #aislacion p{
            color: var(--primary);
            font-size: 23px;
            padding-top: 60px;
        }
        
        #aislacion .carousel{
            width: 600px;
            height: 400px;
            /*padding-top: 30px;*/
        }
        
        #aislacion img{
            width: 600px;
            height: 400px;
        }
        
        #aislacion ion-icon, h3{
            color: var(--white);
        }
        
        
        /* --- --- CAROUSEL --- --- */
        .carousel__contenedor {
            position: relative;
        }
        
        .carousel__anterior,
        .carousel__siguiente {
            position: absolute;
            display: block;
            width: 30px;
            height: 30px;
            border: none;
            top: calc(50% - 35px);
            cursor: pointer;
            line-height: 30px;
            text-align: center;
            background: none;
            color: var(--primary);
            opacity: 40%;
        }
        
        .carousel__anterior:hover,
        .carousel__siguiente:hover {
            opacity: 100%;
        }
        
        .carousel__anterior {
            left: -30px;
        }
        
        .carousel__siguiente {
            right: -30px;
        }
        
        .carousel__lista {
            overflow: hidden;
        }
        
        .carousel__elemento {
            text-align: center;
        }
        
        .carousel__indicadores .glider-dot {
            display: block;
            width: 30px;
            height: 4px;
            background:var(--primary);
            opacity: .2;
            border-radius: 0;
        }
        
        .carousel__indicadores .glider-dot:hover {
            opacity: .5;
        }
        
        .carousel__indicadores .glider-dot.active {
            opacity: 1;
        }
        
        
        .contenedor {
            max-width: 1200px !important;
            width: 90% !important;
            margin: auto !important;
        }

        .bg-inverse{
            background-color: white !important;
            color: var(---primary) !important;
            transition: all 1s ease;
        }

        .card{
            background-color: transparent !important;
        }
        #formfoto{
            background-image: url("{{ asset('img/mapuche1.png') }}") !important;
            opacity: 15%;
        }
        
    </style>
</head>

<body class="antialiased" style="">
    @include('general.partials.nav')
    @yield('content')
    @include('general.partials.footer')

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>