<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ILAB - INFORMES</title>

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
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });

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
            <p style="color: red; margin-right: 20px; margin-bottom: 5px;">Hola  !</p>
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
        <h1 style="margin-left: 100px; margin-top: 40px;">Informes</h1>
    </section>

    <section class="clinicas">


        <div class="container">

            <form>
                
                <div class="row">
                    <div class="col-md-3">
                        
                            <label for="clinica">Buscar por nombre cliente/prescriptor </label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar..">
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                  </button>
                                </div>
                              </div>
                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Buscar por nro.muestra </label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar..">
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                              </button>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        
                            <label for="clinica">Buscar por fecha de envio</label>
                            <div class="input-group">
                                <input type="date" class="form-control">
                                <input type="date" class="form-control" style="margin-left:1px;">
                            </div>  
                    </div>

                    <div class="col-md-3">
                        
                        <div class="d-flex" style="height: 300px;">
                            <div class="vr"></div>
                          </div>

                            <button class="btn btn-success" id="agregar_cliente" style="float:right; margin-right: -10px; margin-top: -280px;  width:250px;"><i class="fa fa-plus"></i><a style="text-decoration: none; color: white;" href="{{url('/Informes/NuevoInforme')}}"> &nbsp;Nuevo Informe</button></a>
                          
                           
                            
                            
                    </div>

                </div>




                


                <div class="row" style="margin-top: -170px;">
                    <div class="col-md-3">
                        
                            <label for="clinica">Enviados/Sin Enviar</label>
                            <div class="input-group">
                                <select class="selectpicker" style="height:33px; width:230px;"> 
                                    <option value="">--Ambos estados--</option>
                                    <option value="enviar">Enviados</option>   
                                    <option value="sin">Sin Enviar</option>
                                </select>
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit" style="margin-right: 22px;">
                                    <i class="glyphicon glyphicon-search"></i>
                                  </button>
                                </div>
                              </div>
                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Cód. Muestra Cargado/Sin Cargar </label>
                        <div class="input-group">
                            <select class="selectpicker" style="height:33px; width:220px;"> 
                                <option value="">--Todos--</option>
                                <option value="con">Con codigo de muestra</option>   
                                <option value="sin">Sin codigo de muestra</option>
                            </select>
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit" style="margin-right: 22px;">
                                <i class="glyphicon glyphicon-search"></i>
                              </button>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Leídos/Sin Leer </label>
                        <div class="input-group">
                            <select class="selectpicker" style="height:33px; width:220px;"> 
                                <option value="">--Ambos estados--</option>
                                <option value="si">Leidos</option>   
                                <option value="no">Sin leer</option>
                            </select>
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit" style="margin-right: 22px;">
                                <i class="glyphicon glyphicon-search"></i>
                              </button>
                            </div>
                          </div>
                    </div>
                </div>



                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-3">
                        
                        <label for="clinica">Clinicas</label>
                        <div class="input-group">
                            
                            <select class="selectpicker" style="height:33px; width:250px;"> 
                                <option value="">--Todos--</option>
																		<option value="17"  >Clinica Garriga</option>
																		<option value="16"  >CLINICA CORNELI</option>
																		<option value="15"  >CLINICA NEXUM</option>
																		<option value="14"  >STETIC MEDIC</option>
																		<option value="13"  >PCR Europa</option>
																		<option value="12"  >PCR Facil</option>
																		<option value="11"  >Clinica Orzaes</option>
																		<option value="9"  >Laboratorio Carlos Ferrero </option>
																		<option value="8"  >Clinica Gesrivas </option>
																		<option value="7"  >Malaga</option>
																		<option value="6"  >Barcelona</option>
																		<option value="5"  >Clinica Bruselas</option>
																		<option value="1"  >Medsolutions</option>
																		<option value="2"  >PCR Facil Prueba</option>
																		<option value="3"  >Ibiza</option>
																		<option value="10"  >Clinica Love Barcelona</option>
																		<option value="4"  >Hidalgo Contioso, SL</option>
																	</select>
                            </select>
                          
                        </div>  
                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Nro de Autorización </label>
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
                
               

            </form><br>
            <hr class="section-title-hr">

            <label style="margin-top: -20px;">Mostrar</label>

            <button type="button" class="btn btn-light" style="float:right; margin-top: -3px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                  </svg>&nbsp; Imprimir</button>
            <button type="button" class="btn btn-light" style="float:right; margin-top: -3px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
              </svg> &nbsp;Exportar</button>
              
            
            <hr class="section-title-hr"> 


            <br><br><BR><BR><BR><BR><BR>
            <br>
            
        </div>
                  

                  <div class="row" style="margin-top : -130px; padding-bottom: 20px; margin-right: 30px;">
                    
                        <div class="col-18">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Clinica</th>
                                <th scope="col">Plantilla</th>
                                <th scope="col">Nro. Muestra</th>
                                <th scope="col">Nº Autorización</th>
                                <th scope="col">Fecha Informe</th>
                                <th scope="col">Fecha Envío</th>
                                <th scope="col">Enviado</th>
                                <th scope="col">Leido</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mouad AOUGHANE</td>
                                <td>Y6957832Z</td>
                                <td>aoughanemouad1<br>@gmail.com</td>
                                <td>604292692</td>
                                <td>Medsolutions</td>
                                <td>RT-PCR</td>
                                <td>65802</td>
                                <td>2854</td>
                                <td>15/05/2022</td>
                                <td>31/05/2022<br>17:00 hs</td>
                                <td><button type="button" class="btn btn-outline-danger btn-sm" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                  </svg>&nbsp;Enviar</button></td>
                                <td></td>
                                <td>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Descargar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                  </svg></button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Mouad AOUGHANE</td>
                                <td>Y6957832Z</td>
                                <td>aoughanemouad1<br>@gmail.com</td>
                                <td>604292692</td>
                                <td>Medsolutions</td>
                                <td>RT-PCR</td>
                                <td>65802</td>
                                <td>2854</td>
                                <td>15/05/2022</td>
                                <td>31/05/2022<br>17:00 hs</td>
                                <td><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                  </svg>&nbsp;Enviar</button></td>
                                <td></td>
                                <td>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Descargar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                  </svg></button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Mouad AOUGHANE</td>
                                <td>Y6957832Z</td>
                                <td>aoughanemouad1<br>@gmail.com</td>
                                <td>604292692</td>
                                <td>Medsolutions</td>
                                <td>RT-PCR</td>
                                <td>65802</td>
                                <td>2854</td>
                                <td>15/05/2022</td>
                                <td>31/05/2022<br>17:00 hs</td>
                                <td><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                  </svg>&nbsp;Enviar</button></td>
                                <td></td>
                                <td>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                  </svg></button><br>
                                  <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Descargar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                  </svg></button>
                                </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      

        


</section>
    </div><br><br><br>



    
    {{-- <footer class="admin-footer">
        <div class="text-center">
            <p class="text-warning">&copy; <b>2022 ILAB. Todos los derechos reservados.</b></p>
        </div>
    </footer> --}}

    
</body>
</html>