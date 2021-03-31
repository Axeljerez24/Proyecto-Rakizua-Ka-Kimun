@extends('general.template')
@section('content')
      <body>
            <div class="form">
              <div class="tab-content">
            
        
            <center><div id="login" >  
              <h1 class="divider2"></h1> 
            <h1>Bienvenido de vuelta!</h1>
                   
            <form action="/" method="post" style="border-top-color: #CC0000;
                border-right-color: black;
                border-bottom-color: #00FF00;
                border-left-color: ; " >
                <div class="field-wrap">
                    <label>
                      Dirección de correo<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="off"/ placeholder="Ingresa tu correo.">
                </div>
              
                <div class="field-wrap">
                    <label>
                      Contraseña<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off"/ placeholder="Ingresa tu contraseña.">
                </div>
              <br>
              
              <p class="forgot"><a href="#">¿Olvidaste tu contraseña?</a></p>
              <p class="forgot"><a href="/registro">¿No tienes una cuenta? Registrate aquí.</a></p>
              <button class="button button-block"/ style="border-top-color: #CC0000;
              border-right-color: black;
              border-bottom-color: #00FF00;
              border-left-color: ; background-color:#0DE4EE;">Ingresar</button>
              <h1 class="divider2"></h1> 
            
                   
          </form>
        
        </center>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
        
      </body>

@endsection