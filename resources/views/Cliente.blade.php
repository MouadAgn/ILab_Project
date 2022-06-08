<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Cliente</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>



    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>  

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

         

   </SCRIPT>


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
        <h1 style="margin-left: 100px; margin-top: 40px;">Clientes</h1>
    </section>

    
    <section class="clinicas">


            <div class="container">

                <form>

                    <div class="row">
                        <div class="col-sm">
                            <div class="col-xs-4"">
                                <label for="clinica">Buscar por Nombre </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar..">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                      </button>
                                    </div>
                                  </div>
                                
                        </div>
                        
                        <div class="col-sm">
                            <div class="col-xs-4"">
                                <label for="clinica">Buscar por no. identificación </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar..">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                      </button>
                                    </div>
                                  </div>
                                
                            </div>
                            
                     
                      </div>

                   

                   

                    
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar_clinica" style="float:right; margin-top: 15px;"><i class="fa fa-plus"></i> &nbsp; Agregar Cliente</button>

                  

                    
                </form>
                    <br><br>
                   
                    <br>
                    <br><br>
                    <label style="margin-top: 30px;">Mostrar</label>

                    <button type="button" class="btn btn-light" style="float:right; margin-top: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                          </svg>&nbsp; Imprimir</button>
                    <button type="button" class="btn btn-light" style="float:right; margin-top: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                        <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                      </svg> &nbsp;Exportar</button><br><br>
                      <hr class="section-title-hr"> 
                      

                      <div class="row" style="margin-top : 70px;">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title m-b-0">PCR Results</h5>
                                </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox m-b-20">
                                                            <input type="checkbox" id="mainCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Cliente</th>
                                                    <th scope="col">DNI</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Motivo</th>
                                                    <th scope="col">Pres</th>
                                                    <th scope="col">Plantilla</th>
                                                    <th scope="col">NR.Muestra</th>
                                                    <th scope="col">Pin</th>
                                                    <th scope="col">N.Autorizacion</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody class="customtable">
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox">
                                                            <input type="checkbox" class="listCheckbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                </tr>
                
                                               
                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                            </div>

            </div>


    </section>
    
   

    
</body>
</html>