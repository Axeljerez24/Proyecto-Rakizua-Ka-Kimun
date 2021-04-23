<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js%22%3E"></script>    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Rakizuam Ka Kimun</title>
    
    <style>
        body{
            font-family: chocolatos !important;
        },
html {
    margin: 0;
    padding: 0;
    height: 100%;
    
}

@font-face{
    font-family: chocolatos;
    src: url("{{ asset('fuentes/Chocolatos.ttf') }}") format('truetype');
}

.user_card {
    border-color: #0a9aee !important;
    border-width: 100%;
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background-color: #0A0045 !important;
    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;
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
    background: #0A0045;
    padding: 10px;
    text-align: center;
}
.brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid #0a9aee ;
    background-image: url("{{ asset('img/escuela.png') }}") !important;
}
.form_container {
    margin-top: 100px;
}
.login_btn {
    width: 100%;
    background: #e0c10f !important;
    color: white !important;
}
.login_btn:hover {
    width: 100%;
    background: #e6303083 !important;
    color: white !important;
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
    background-color: #eb0d0d !important;
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
            background-color: white !important;
        }
        
        br{
            font-size: 20px;
            color: var(--primary) !important;
        }
        
        
        h2, h3 , .navbar-brand{
            font-weight: 500 !important;
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
            
            background-size: 9% !important;
            background-position-y: 13px;
            background-position-x: 24%;
            background-repeat: no-repeat;
            max-width: 100% !important;

        }
        
        .nav-link{
            color: var(--white) !important;
            font-size: 1.5rem;
            max-height: 2rem;
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
            color: #0A0045!important;
            font-weight: 400;
            text-decoration: none;
        }
        
        .btn:hover{
            color: #0A0045 !important;
            border: 1.5px solid var(--primary);
            border-radius: 20px;
            min-width: 30px;
            background-color:  #1F8100;
        }
        #first img{
            /*position: relative;*/
            border-radius: 15px;
            margin: 20px 20px;
        }
        #first h2{
            clor: ;#0A0045 !important
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
            border-bottom: 2px solid #0A0045;
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
            background-repeat: no-repeat;
            background-position: center;
            background-size: 55%;
            
            
            
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
            background-image: url("{{ asset('img/fondo1.png') }}") !important; 
            background-repeat: no-repeat;
            
            background-position: center center !important;
            background-size: 100%;
        }
        
        #formulario h3{
            color:#033cf5;
            font-size: 50px;
            font-weight: 900;
            font-family: 'chocolatos';
            
        }
        
        #formulario p{
            color: var(--white);
            font-size: 23px;
            padding-top: 60px;
        }
        
        #formulario .btn{
            color: var(--white) !important;
            border: 1.5px solid #0A0045 !important;
            background-color:  #0A0045 !important;
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
        .margin-xy1{
            margin-left: 120px !important;
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
            background-color: #0A0045 !important; 
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

        .box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
body{background-color:#f1f1f2}
.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}
.box1 .icon,.box1 .title{margin:0;position:absolute}
.box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
.box1:after{top:auto;bottom:0;transform-origin:0 100%}
.box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
.box1 img{height:auto;transform:scale(1) rotate(0)}
.box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
.box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
.box1:hover .title{opacity:1;transform:scale(1)}
.box1 .icon{padding:7px 5px;list-style:none;background:#004cbf;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
.box1:hover .icon{top:0}
.box1 .icon li{display:block;margin:10px 0}
.box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
.box2 .icon li a,.box3 .icon a:hover,.box4 .icon li a:hover,.box5 .icon li a,.box6 .icon li a{border-radius:50%}
.box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
@media only screen and (max-width:990px){.box1{margin-bottom:30px}
}
/*********************** Demo - 2 *******************/
.box2{position:relative}
.box2 img{width:100%;height:auto}
.box2 .box-content{width:100%;height:100%;position:absolute;top:50%;left:50%;z-index:2;transform:translate(-50%,-50%)}
.box2 .box-content:after,.box2 .box-content:before,.box2:after,.box2:before{content:"";width:80%;height:80%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) rotate(45deg);transition:all .5s ease 0s}
.box2:before{background:linear-gradient(45deg,rgba(0,0,0,.2) 49%,transparent 50%);left:-100%}
.box2:after{background:linear-gradient(45deg,transparent 49%,rgba(0,0,0,.2) 50%);left:160%}
.box2 .box-content:after,.box2 .box-content:before{width:65%;height:65%;background:linear-gradient(45deg,rgba(0,0,0,.3) 49%,transparent 50%);left:-100%;transition-delay:.1s}
.box1 .box-content:after{background:linear-gradient(45deg,transparent 49%,rgba(0,0,0,.3) 50%);left:160%}
.box2:hover .box-content:after,.box2:hover .box-content:before,.box2:hover:after,.box2:hover:before{left:50%}
.box2 .inner-content{width:50%;height:50%;color:#fff;padding:40px 0;position:absolute;top:50%;left:50%;z-index:2;transform:translate(-50%,-50%) scale(0);transition:all .3s ease .2s}
.box2 .inner-content:after{width:100%;height:100%;background:rgba(255,79,79,.8);position:absolute;top:50%;left:50%;z-index:-1;transform:translate(-50%,-50%) rotate(45deg)}
.box2:hover .inner-content{transform:translate(-50%,-50%) scale(1);transition:all .3s ease 0s}
.box2 .title{font-size:18px;font-weight:700;text-transform:uppercase;margin-bottom:5px}
.box2 .post{display:block;font-size:14px;text-transform:capitalize;margin-bottom:7px}
.box10 .title,.box11 .title,.box4 .title,.box5 .title,.box6 .box-content,.box7 .title{text-transform:uppercase}
.box2 .icon{padding:0;margin:0;list-style:none;transform:rotateY(360deg) scale(0);transition:all .3s ease 0s}
.box2:hover .icon{transform:rotateY(0) scale(1)}
.box2 .icon li{display:inline-block;margin:0 3px}
.box2 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:16px;color:#505050;transition:all .3s ease 0s}
.box2 .icon li a:hover{box-shadow:0 0 0 5px rgba(0,0,0,.5);background:#fff;color:#ff4f4f}
@media only screen and (max-width:990px){.box2{margin-bottom:30px}
}
@media only screen and (max-width:320px){.box2 .inner-content{padding:25px 0}
.box2 .title{font-size:16px}
}
/*********************** Demo - 3 *******************/
.box3{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box3 .box-content,.box3:after,.box3:before{position:absolute;left:7%;right:7%;transition:all .3s}
.box3:after,.box3:before{display:block;background:rgba(0,0,0,.3);top:10%;bottom:10%;z-index:1;transform:scale(0,1)}
.box3:after{top:10.8%;bottom:10.8%;transform:scale(1,0)}
.box3:hover:after,.box3:hover:before{transform:scale(1);animation:animate 1.5s}
.box3:hover:before{border-top:3px solid #fff;border-bottom:3px solid #fff}
.box:hover:after{border-left:3px solid #fff;border-right:3px solid #fff}
.box img{width:100%;height:auto;transition:all .3s}
.box3:hover img{transform:scale(1.2);filter:blur(5px);-moz-filter:blur(5px);-webkit-filter:blur(5px)}
.box3 .box-content{padding:30px 10px;top:10%;bottom:10%;opacity:0;z-index:2}
.box3:hover .box-content{box-shadow:0 0 0 35px rgba(255,255,255,.3);opacity:1;transition:all .3s}
.box3 .title{font-size:24px;font-weight:600;color:#88c425;margin:0 0 5px}
.box3 .post{display:block;margin:0 0 5px;font-size:14px;color:rgba(255,255,255,.8)}
.box3 .description{font-size:14px;color:#fff;margin:0 0 20px}
.box3 .icon{padding:0;margin:0;list-style:none}
.box3 .icon li{display:inline-block;margin:0 10px 0 0}
.box3 .icon li a{display:block;width:30px;height:30px;line-height:30px;color:#fff;background:#88c425;transition:all .5s}
.box3 .icon a:hover{text-decoration:none;animation:animate-hover .5s;transition:all .3s}
@keyframes animate{0%,100%{opacity:1}
}
@keyframes animate-hover{0%{box-shadow:0 0 0 10px rgba(255,255,255,.3)}
50%{box-shadow:0 0 0 5px rgba(255,255,255,.3)}
100%{box-shadow:0 0 0 0 rgba(255,255,255,.3)}
}
.box10,.box11,.box12,.box14,.box4,.box5,.box6,.box7,.box9{box-shadow:0 0 3px rgba(0,0,0,.3)}
@media only screen and (max-width:990px){.box3{margin-bottom:30px}
.box3 .box-content{padding:10px}
.box3 .description{margin-bottom:10px}
}
@media only screen and (max-width:479px){.box3 .title{margin:0}
}

/*********************** Demo - 4 *******************/
.box4{position:relative}
.box4:before{width:0;height:200%;background:rgba(0,0,0,.5);position:absolute;top:0;left:-250px;bottom:0;transform:skewX(-36deg);transition:all .5s ease 0s}
.box4:hover:before{width:200%}
.box4 img{width:100%;height:auto}
.box4 .box-content{width:100%;height:100%;padding-top:20%;position:absolute;top:0;left:0;transform:scale(0);transition:all .3s ease 0s}
.box4 .icon,.box5 .icon{list-style:none;padding:0}
.box4:hover .box-content{transform:scale(1)}
.box4 .title{font-size:22px;font-weight:700;color:#fff;margin:0 0 10px}
.box4 .post{display:block;font-size:15px;font-weight:600;color:#fff;margin-bottom:20px}
.box4 .icon{margin:0}
.box4 .icon li{display:inline-block}
.box4 .icon li a{display:block;width:35px;height:35px;line-height:35px;font-size:20px;background:#fff;color:#ee4266;margin-right:10px;transition:all .3s ease 0s}
.box5 .icon,.box5 .icon li{display:inline-block}
@media only screen and (max-width:990px){.box4{margin-bottom:30px}
}
@media only screen and (max-width:767px){.box4:before{left:-400px}
.box4:hover:before{width:300%}
}

/*********************** Demo - 5 *******************/
.box5{background:#444;position:relative}
.box5:after,.box5:before{width:50px;height:50px;border-radius:50%;background:#10a5b8;position:absolute;top:-80px;left:15px;opacity:0;z-index:1;transition:all .35s ease}
.box5:after{top:auto;left:auto;bottom:-80px;right:15px}
.box5:hover:after,.box5:hover:before{opacity:.75;transform:scale(8);transition-delay:.15s}
.box5 img{width:100%;height:auto;transition:all .35s ease-out 0s}
.box5:hover img{opacity:.4}
.box5 .icon{margin:0;position:absolute;bottom:15px;right:15px;z-index:2;transform:scale(0);transition:all .35s ease-out}
.box5:hover .icon{transform:scale(1);transition-delay:.15s}
.box5 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:18px;color:#444;margin-right:10px;position:relative;transition:all .5s ease 0s}
.box5 .icon li a:hover{background:#444;color:#fff}
.box5 .box-content{padding:20px 15px;position:absolute;top:0;left:0;z-index:1}
.box5 .title{font-size:20px;font-weight:800;color:#fff;margin:0 0 5px;opacity:0;transform:translate(-20px,-20px);transition:all .35s ease-out}
.box5:hover .title{opacity:1;transform:translate(0,0);transition-delay:.15s}
.box5 .post{display:inline-block;font-size:16px;color:#fff;opacity:0;transform:translate(-20px,-20px);transition:all .35s ease-out}
.box5:hover .post{opacity:1;transform:translate(0,0);transition-delay:.15s}
.box6 .title,.box6 img,.box6:after{transition:all .35s ease 0s}
@media only screen and (max-width:990px){.box5{margin-bottom:30px}
}
/*********************** Demo - 6 *******************/
.box6{background:#000;position:relative}
.box6:after{background:rgba(0,0,0,.7);position:absolute;top:0;left:-30%;bottom:0;right:70%;transform:skew(20deg) translateX(-75%)}
.box6:hover:after{transform:skew(20deg) translateX(0)}
.box6 img{width:100%;height:auto}
.box6:hover img{opacity:.5}
.box6 .box-content{padding:20px;text-align:right;position:absolute;top:0;right:0;z-index:1}
.box6 .icon,.box7 .icon{padding:0;list-style:none}
.box10 .icon li a,.box11,.box12,.box13,.box14,.box6 .icon li a,.box7,.box7 .icon li a,.box8,.box8 .icon li a{text-align:center}
.box6 .title{font-size:20px;font-weight:900;color:#fff;margin:0 0 10px;transform:scale(0)}
.box6:hover .title{transform:scale(1)}
.box6 .icon li,.box6 .post{opacity:0;transform:translateX(40px);transition:all .35s ease 0s}
.box6 .post{display:block;font-size:14px;color:#fff;margin-bottom:5px}
.box6 .icon{display:inline-block;margin:0}
.box6:hover .icon li,.box6:hover .post{opacity:1;transform:translateX(0)}
.box6:hover .icon li:first-child{transition-delay:.1s}
.box6:hover .icon li:nth-child(2){transition-delay:.2s}
.box6 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:18px;color:#605f5f;margin-bottom:5px;transition:all .35s ease}
.box6 .icon li a:hover{background:#605f5f;color:#fff}
@media only screen and (max-width:990px){.box6{margin-bottom:30px}
}

/*********************** Demo - 7 *******************/
.box7{position:relative}
.box7:after,.box7:before{width:100%;height:100%;background:rgba(47, 11, 11, 0.9);position:absolute;top:0;left:0;opacity:0;transition:all .5s ease 0s}
.box7:after{background:rgba(255,255,255,.3);border:2px solid #ab0d0d;top:0;left:170%;opacity:1;z-index:1;transform:skewX(45deg);transition:all 1s ease 0s}
.box7:hover:before{opacity:1}
.box7:hover:after{left:-170%}
.box7 img{width:100%;height:auto}
.box7 .box-content{width:100%;position:absolute;bottom:-100%;left:0;transition:all .5s ease 0s}
.box7:hover .box-content{bottom:30%}
.box7 .title{display:block;font-size:22px;font-weight:700;color:#fff;margin:0 0 10px}
.box7 .post{display:block;font-size:15px;font-weight:600;color:#fff;margin-bottom:10px}
.box7 .icon{margin:0}
.box7 .icon li{display:inline-block}
.box7 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:50%;background:#0dab76;font-size:18px;color:#fff;margin-right:10px;transition:all .5s ease 0s}
.box8 .icon li,.box8 .title{display:inline-block}
.box7 .icon li a:hover{transform:rotate(360deg)}
@media only screen and (max-width:990px){.box{margin-bottom:30px}
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