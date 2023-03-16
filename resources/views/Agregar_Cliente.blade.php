<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ILAB-Cliente</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>






<!-- Navigation -->


<body>
    <header>
        @include('layouts.header')
    </header>
    <section class="login_div">
        <h5></h5>
        <img style="margin-left: 50%;" src="{{url('/img/ilab_logo_black.png')}}" alt="Logo" width="100px" height="50px"/>
        <div class="login_infos">
            <p style="color: red; margin-right: 20px; margin-bottom: 5px;">Hola Mouad!</p>
        </div>
        <div class="links" style="margin-right: -80px; float: right; margin-top: 24px; padding: 6px 0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
            <a href="" style="color:black; font-size: 12px;">Mi Cuenta</a>&nbsp;&nbsp;
            <div class="vr" style="margin-top: 2px;"></div>&nbsp;&nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg>
            <a href="" style="color:black; font-size: 12px;">Log Out</a> 
        </div>
       
    </section>
    
    <section class="title">
        <h1 style="margin-left: 100px; margin-top: 40px;">Nuevo Cliente</h1>
    </section>

    <section class="clinicas">


        <div class="container">

            <form>
                
                <div class="row">
                    <div class="col-md-3">
                        
                        <label for="clinica">Nombre</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Apellido</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Teléfono</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>

                    <div class="col-md-3">
                        <label for="clinica">Teléfono Alternativo</label>
                        <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                    </div>
                    
                </div>

                <br>
               
                <div class="row">
                    <div class="col-md-3">
                        
                        <label for="clinica">Email</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">EmailAlternativo</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Nro. Identificacion</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar.." style="height:33px; width:250px;">
                        </div>  

                    </div>

                    <div class="col-md-3">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        
                        <label for="clinica">Fecha de Nacimiento</label>
                        <div class="input-group">
                            
                            <input type="text   " id="tentacles" name="tentacles" min="10" max="100" style="height:33px; width:250px;">
                          
                        </div>  

                    </div>

                    <div class="col-md-3">
                        
                        <label for="clinica">Sexo</label>
                        <div class="input-group">
                            
                            <select class="selectpicker" style="height:33px; width:250px;"> 
                                <option value="M" selected >Masculino</option>
                                <option value="F" >Femenino</option>
                            </select>
                          
                        </div>  

                    </div>

                    <div class="col-md-3"></div>
                </div>
               



            </form><br>
            <hr class="section-title-hr">
            <br>
            <button class="btn btn-secondary" id="agregar_cliente" style="margin-top: -5px; width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg><a style="text-decoration: none; color: white;" href="{{url('/Cliente')}}"></i> &nbsp; Cancelar</a></button>

         
            <button type="button" class="btn btn-success" style="float:right; margin-top: -6px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
              </svg>&nbsp;Guardar y Terminar</button>
              
            
            
</section>
    </div><br><br><br>



    
    {{-- <footer class="admin-footer">
        <div class="text-center">
            <p class="text-warning">&copy; <b>2022 ILAB. Todos los derechos reservados.</b></p>
        </div>
    </footer> --}}

    
</body>
</html>