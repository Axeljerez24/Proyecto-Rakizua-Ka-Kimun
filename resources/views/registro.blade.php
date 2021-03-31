@extends('general.template')
@section('content')
      <body>
        

            <div class="form" style="position: relative;">
              
            
      
            <div class="tab-content" >
            <center><div id="signup" style="position: relative; ">   
              
              <h1 class="divider2"></h1> 
            <h1>Registrate gratis.</h1>
            
            <form action="#" method="post"   >
          
            <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" placeholder="Introduce tu nombre completo." />
            </div>
          
        
            
          </div>

          <div class="field-wrap">
            <label>
              Correo electronico<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/ placeholder="Ingresa tu correo.">
          </div>
          
          <div class="field-wrap">
            <label>
              Crea tu contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/ placeholder="Ingresa una contraseña segura." >
          </div>

          <div class="field-wrap">
            <label>
              Confirma tu contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/ placeholder="Repite la contraseña." >
          </div>
          
          <button type="submit" class="button button-block"/ style="border-top-color: #CC0000;
          border-right-color: black;
          border-bottom-color: #00FF00;
          border-left-color: ; background-color:#F1726E;">Registrarse.</button>
          <h1 class="divider2"></h1> 
          
          </form>
        </center>

        </div>
@endsection