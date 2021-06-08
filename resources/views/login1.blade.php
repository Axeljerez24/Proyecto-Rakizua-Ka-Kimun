@extends('general.template')

@section('content')


<br>
<body>
    

<section id="formulario_log" >
    <div class="container-fluid  margin-xy" >
        <div class="row">             
            <div class="col-md-6">
                <div class="row margin-xy1">
                    <div class="d-flex justify-content-center h-100">
                        <div class="user_card">
                            <div class="d-flex justify-content-center">
                                <div class="brand_logo_container">
                                    <img src="{{ asset('img/logo.png') }}" class="brand_logo" alt="Logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center form_container">
                                <form>
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="email" name="" class="form-control input_user" value="" placeholder="Ingresa tu correo">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" name="" class="form-control input_pass" value="" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Recordar mi inicio</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 login_container">
                                        <button type="button" name="button" class="btn login_btn">Entrar ahora</button>
                                    </div>
                                </form>
                            </div>
                            
                           <div class="mt-4">
                                <div class="d-flex justify-content-center links">
                                    ¿No tienes una cuenta? <a href="#" class="ml-2">Registrate aquí.</a>
                                </div>
                                <div class="d-flex justify-content-center links">
                                    <a href="#">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>  
            <div class="col-md-5 px-5 mt-5" >
                <div id="formfoto"></div>
                    <h1 class="divider3"></h1>
                    <h1 class="text-center">Podemos agregar una leyenda <br> descriptiva que represente algo.</h1>
                    <h1 class="divider3"></h1>
                    <p class="text-justify px-5">.</p>
                </div> 
            </div>               
        </div>
    </div>


</section>

    
@endsection