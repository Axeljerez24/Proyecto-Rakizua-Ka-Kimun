@extends('general.template1')
@section('content')
    

  
    

<body>
    

    <section id="formulario">
        <form action="formulario.php" method="POST">
            <div class="container-fluid  margin-xy">
                <div class="row">
                    <div class="col-md-4 px-5 mt-5" >
                        <div id="formfoto"></div>
                        <h1 class="divider3"></h1>
                        <h3 class="text-center" style="color:#0A0045">Inscribete con nosotros al <br> instante!</h3>
                        <h1 class="divider3"></h1>
                        <p class="text-justify px-5">.</p>
                    </div> 
                    
                    <div class="col-md-6 mt-5">
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="apellido" class="form-control" id="" placeholder="Apellido" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="email" name="correo" class="form-control" id="" placeholder="Ingresa tu correo electronico" required>
                                </div>
                            </div>
                             
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="numero" class="form-control" id="" placeholder="Número Telefonico" required>
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="password" name="numero" class="form-control" id="" placeholder="Ingresa tu contraseña" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="numero" class="form-control" id="" placeholder="Confirma tu contraseña" required>
                                </div>
                            </div>
                            
                            <div class="col-md-12 my-3">
                                <input type="submit" class="btn btn-outline-primary full-width px-5" value="Inscribete ahora">
                                </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </form>
        
    </section>
</div>
 

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