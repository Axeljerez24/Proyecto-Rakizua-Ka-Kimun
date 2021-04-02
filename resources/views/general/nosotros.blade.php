<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Styles -->
     <style> 
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

        .box7{position:relative}
        .box7:after,.box7:before{width:100%;height:100%;background:rgba(11,33,47,.9);position:absolute;top:0;left:0;opacity:0;transition:all .5s ease 0s}
        .box7:after{background:rgba(255,255,255,.3);border:2px solid #0dab76;top:0;left:170%;opacity:1;z-index:1;transform:skewX(45deg);transition:all 1s ease 0s}
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
</body>
</html>

