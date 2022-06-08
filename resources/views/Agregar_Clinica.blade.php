<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ILAB-Clinica</title>

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
    
   

    <style>
        body{
            background-color:aliceblue;
        }
                       td, th {
                vertical-align: middle !important;
                }
            .left, .right {
                    float:left;
                    height:100vh;
                }
                
            .left {
                    background: black;
                    display: inline-block;
                    white-space: nowrap;
                    width: 50px;
                    transition: width 1s ;
                    position: fixed;
                    
                }

            .right {
                    background: #fff;
                    width: 350px;
                    transition: width 1s;
                    border-style:solid;
                    border-color:#ccc;
                    border-width:1px;
                }    

            .left:hover {
                    width: 200px;
                }    
                
            .item:hover {
                    background-color:#ccc;
                    }
                    
            .left .glyphicon {
                    margin:15px;
                    width:20px;
                    color:#fff;
                }
                
            .right .glyphicon {
                    color:#a9a9a9;
                }
            span.glyphicon.glyphicon-refresh{
                font-size:17px;
                vertical-align: middle !important;
                }
                
            .item {
                    height:50px;
                    overflow:hidden;
                    color:#fff;
                }
            .title {
                    background-color:#eee;
                    border-style:solid;
                    border-color:#ccc;
                    border-width:1px;
                    box-sizing: border-box;
                }
            .search:hover {
                    border-color:#4aa9fb;
                    border-width:1px;
                }
            .search {
                padding:3px 8px 3px !important;
                }
            input[type=search] {
                padding: 10px 0px 10px;
                border: 0px solid #fff;
                background: #eee;
                -webkit-appearance: none;
                width:90%;
                float:none;
            }
            input[type=search]:focus {
                outline:none;
                }
            .type{
                height: 47px;;
                }
            .date{
                background-color:#f7f7f7
                }
            .docdate {
                vertical-align:bottom !important;
                }
            .distr {
                margin: 0 0 5px;
                font-size: 12px;
                }
            .ndoc {
                margin: 0 0 5px;
                }
            .storage {
                margin: 0;
                color: #aaa !important;
                font-size: 12px;
                }
               

         
            .nav_items
            {
                color: white;

            }

            .nav_items:hover
            {
                text-decoration: none;
                color: black;
            }   

            .clinicas
            {
                background-color: white;
                float: left;
                padding: 20px 30px;
                margin-left: 200px;
                margin-top: 50px;
                width: 80%;
                padding-top: 30px;
            }

            .search_button
            {
                border: none;
                margin-top: 30px;
                margin-right: 10px;
                
            }

            .title
            {
                background-color: white;
                margin-top:10px;
                height: 130px;
                width: 100%;
                float: right; 
            }


            .login_div
            {
                background-color: white;
                height: 70px;
                width: 100%;
                float: right; 
            }

            .login_infos
            {
                float: right;
            }


            .section-title-hr {
            width: 100%;
            border: 0.5px solid black;
            background-color: black;    
}
    </style>


<script>
    
</script>


</head>



<body>


    

<!-- Navigation -->

<div class="left">
    <div class="item">
    <span class="glyphicon glyphicon-th-large"></span>
    </div>
    <div class="item active">
    <span class="glyphicon glyphicon-home"></span>
    <a href="{{ Route('welcome')}}" class="nav_items">Home</a></div>
    <div class="item">
    <span class="glyphicon glyphicon-th-list"></span>
    <a href="{{ url('/Informes') }}" class="nav_items">Informes</a></div>
    <div class="item">
    <span class="glyphicon glyphicon-briefcase"></span>
    <a href="{{ url('/Clinicas') }}" class="nav_items">Clinicas</a></div>
    <div class="item">
    <span class="glyphicon glyphicon-list-alt"></span>
    <a href="{{ url('/Plantillas') }}" class="nav_items">Plantillas</a></div> 
    <div class="item">
    <span class="glyphicon glyphicon-king"></span>
    <a href="{{ url('/Cliente') }}" class="nav_items">Clientes</a></div>
    <div class="item">
    <span class="glyphicon glyphicon-user"></span>
    <a href="#" class="nav_items">Usuarios</a></div>    
    </div>
    
</div>


    <section class="login_div">
        <h5></h5>
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
        <h1 style="margin-left: 100px; margin-top: 40px;">Nueva Clinica</h1>
    </section>

    <section class="clinicas">


        <div class="container">

            <form>
                
                <div class="row">
                    <div class="col-md-3">
                        
                        <label for="clinica">Nombre</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">NIF    </label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Clinica</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>

                    <div class="col-md-3">
                        
                        <label for="clinica">Dirección</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>
                    
                </div>

                <br>
                <div class="row">

                    <div class="col-md-3">
                        
                        <label for="clinica">Email</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>

                    <div class="col-md-3">
                        
                        <label for="clinica">NºTelefono</label>
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar..">
                        </div>  

                    </div>

                    <div class="col-md-3">  </div>

                </div>    


                
               
               

            </form><br>
            <hr class="section-title-hr">
            <br>
            <button class="btn btn-secondary" id="agregar_cliente" style="margin-top: -5px; width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg></i><a style="text-decoration: none; color: white;" href="{{url('/Clinicas')}}"> &nbsp; Cancelar</button>

         
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