<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ILAB - USUARIOS</title>
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
    <link rel="stylesheet" href="/css/style.css">
</head>



<body>


    


<!-- Navigation -->

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
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" style="color:black; font-size: 12px;">{{ __('LogOut') }}</a>  
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
       
    </section>

    <section class="title">
        <h1 style="margin-left: 100px; margin-top: 40px;">Usuarios</h1>
    </section>

    
    <section class="clinicas">


            <div class="container">

                <form>

                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar_clinica" style="float:left; margin-top: 15px;"><a style="text-decoration: none; color: white;" href="{{url('/Usuarios/NuevoUsuario')}}"><i class="fa fa-plus"></i> &nbsp; Agregar Usuario</a></button>


                <br><br><br>
                <hr class="section-title-hr"><br>
    

                <div class="row">
                    <div class="col-md-6">
                        
                        
                        <div class="input-group">
                             <input type="text" class="form-control" placeholder="Buscar por nombre o email..." style="height:33px; width:515px;">
                             <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <i class="glyphicon glyphicon-search"></i>
                                </button>
                              </div>
                        </div>  

                    </div>
                    <div class="col-md-3">
                        

                        <div class="input-group">
                            <select class="selectpicker" style="height:33px; width:250px;"> 
                                <option value="">-- Todas las Roles --</option>
                                <option value="1">Administrador Global</option>
                                <option value="2">Administrador</option>
                                <option value="3">Editor</option>
                                <option value="4">Usuario</option>
                                <option value="5">Carga de Informes</option>
                                <option value="6">Listado y Emision de informes</option>
                            </select>
                        </div>  

                    </div>
                    <div class="col-md-3">
                        

                        <div class="input-group">
                            <select class="selectpicker" style="height:33px; width:250px;"> 
                                <option value="">-- Filtrar Por Prescriptor --</option>
                                <option value="17">Clinica Garriga</option>
                                <option value="16">CLINICA CORNELI</option>
                                <option value="15">CLINICA NEXUM</option>
                                <option value="14">STETIC MEDIC</option>
                                <option value="13">PCR Europa</option>
                                <option value="12">PCR Facil</option>
                                <option value="11">Clinica Orzaes</option>
                                <option value="9">Laboratorio Carlos Ferrero </option>
                                <option value="8">Clinica Gesrivas </option>
                                <option value="7">Malaga</option>
                                <option value="6">Barcelona</option>
                                <option value="5">Clinica Bruselas</option>
                                <option value="1">Medsolutions</option>
                                <option value="2">PCR Facil Prueba</option>
                                <option value="3">Ibiza</option>
                                <option value="10">Clinica Love Barcelona</option>
                                <option value="4">Hidalgo Contioso, SL</option>
                            </select>
                        </div>  

                    </div>

                    
                    
                </div>

            </div>   
               
    
            </form>
               
                <br>
                <hr class="section-title-hr"><br>

                </div> 
            <div class="row" style="margin-top : 5px; padding-bottom: 20px; margin-right: 30px;">
                        
                <div class="col-18">
                  <table class="table table-hover">
                    
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 89%;" scope="row"><b>Clinica Corneli</b><br><b><p style="font-size:11px;">clinicadentalcorneli@hotmail.com<p></b>
                            <hr class="table-usu-hr">
                        <small>Creado: 18/01/2022 11:43  Último acceso: 18/01/2022 11:44  Listado y Emision de informes (CLINICA CORNELI)</small>
                    </td>
                        <td>
                          <button  style="font-size: 8px;" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button>
                          <button style="font-size: 11px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>&nbsp;&nbsp;<br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="width: 89%;" scope="row"><b>Clinica Corneli</b><br><b><p style="font-size:11px;">clinicadentalcorneli@hotmail.com<p></b>
                            <hr class="table-usu-hr">
                        <small>Creado: 18/01/2022 11:43  Último acceso: 18/01/2022 11:44  Listado y Emision de informes (CLINICA CORNELI)</small>
                    </td>
                        <td>
                          <button  style="font-size: 8px;" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button>
                          <button style="font-size: 11px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>&nbsp;&nbsp;<br>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 89%;" scope="row"><b>Clinica Corneli</b><br><b><p style="font-size:11px;">clinicadentalcorneli@hotmail.com<p></b>
                            <hr class="table-usu-hr">
                        <small>Creado: 18/01/2022 11:43  Último acceso: 18/01/2022 11:44  Listado y Emision de informes (CLINICA CORNELI)</small>
                    </td>
                        <td>
                          <button  style="font-size: 8px;" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete!" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button>
                          <button style="font-size: 11px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                          </svg>&nbsp;&nbsp;<br>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>


    </section>
    
   

    
</body>
</html>