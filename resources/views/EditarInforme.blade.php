<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
        <title>ILAB - Informe</title>
    </head>

<body>

<!-- Navigation -->

<header>
    @include('layouts.header')
</header>


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
        <h1 style="margin-left: 100px; margin-top: 40px;">Nuevo Informe</h1>
    </section>

    <section class="clinicas">


        <div class="container">

            <form action="/EditarInforme" methode="Post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="col-md-3">

                            <label for="clinica">Prespictor </label>
                            
                            <div class="input-group">
                                <select class="selectpicker" name="clinica" style="height:33px; width:250px;"> 
                                    <option value="">-Seleccionar Prescriptor--</option>
                                    <option value="17" >Clinica Garriga</option>
                                    <option value="16" >CLINICA CORNELI</option>
                                    <option value="15" >CLINICA NEXUM</option>
                                    <option value="14" >STETIC MEDIC</option>
                                    <option value="13" >PCR Europa</option>
                                    <option value="12" >PCR Facil</option>
                                    <option value="11" >Clinica Orzaes</option>
                                    <option value="9" >Laboratorio Carlos Ferrero </option>
                                    <option value="8" >Clinica Gesrivas </option>
                                    <option value="7" >Malaga</option>
                                    <option value="6" >Barcelona</option>
                                    <option value="5" >Clinica Bruselas</option>
                                    <option value="1" >Medsolutions</option>
                                    <option value="2" >PCR Facil Prueba</option>
                                    <option value="3" >Ibiza</option>
                                    <option value="10">Clinica Love Barcelona</option>
                                    <option value="4" >Hidalgo Contioso, SL</option>
        
                                </select>
                              </div>
                    </div>
                    <div class="col-md-3">
                        
                        <label for="clinica">Plantilla </label>
                        <div class="input-group">
                            <select class="selectpicker" name="plantilla" style="height:33px; width:250px;"> 
                                <option value="">-Seleccionar Plantilla--</option>
                                <option value="1" >PCR RT-</option>
                            </select>    
                          </div>
                    </div>
                    <div class="col-md-2">
                        
                            <label for="clinica">Fecha de Envio</label>
                            <div class="input-group">
                                 <input type="date" name="fechaenvio" value="{{$data['FechaEnvio']}}" class="form-control" placeholder="Buscar..">
                            </div>  
                    </div>

                    <div class="col-md-2">
                        
                        <label for="clinica">Hora de Envio</label>
                        <div class="input-group">
                             <input type="text" name="horaenvio" value="{{$data['HoraEnvio']}}" class="form-control" placeholder="Buscar..">
                        </div>  

                </div>
                    
                </div>

                <hr class="section-title-hr">

                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="nombre">Nombre y Apellidos</label>
                        <div class="input-group">
                            <input type="text" name="nombre" value="{{$data['Nombre']}}" class="form-control" placeholder="Buscar..">
                          </div>
                </div>
                    <div class="col-md-3">
                            <label for="dni">DNI </label>
                            <div class="input-group">
                                <input type="text" name="dni" value="{{$data['Dni']}}" class="form-control" placeholder="Buscar..">
                              </div>
                    </div>
                    <div class="col-md-3">
                        <label for="fechanac">Fecha de nacimiento </label>
                        <div class="input-group">
                            <input type="date" name="fechanac" value="{{$data['FechaNac']}}" class="form-control" placeholder="Buscar..">   
                          </div>
                    </div>
                    <div class="col-md-2">
                            <label for="sexo">Sexo</label>
                            <div class="input-group">
                                <select class="selectpicker" name="sexo" style="height:33px; width: 170px;"> 
                                    <option value="m">Masculino</option>
                                    <option value="f" >Feminino</option>
        
                                </select>
                            </div>  
                    </div>
                </div>


                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <input type="text" name="email" value="{{$data['Email']}}" class="form-control" placeholder="Buscar..">
                        </div>  
                    </div>
                    <div class="col-md-3">
                        <label for="email2">Email Alternativo </label>
                        <div class="input-group">
                            <input type="text" name="email2" value="{{$data['Email2']}}" class="form-control" placeholder="Buscar..">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="tel">Tel</label>
                        <div class="input-group">
                            <input type="text" name="tel" value="{{$data['Tel']}}" class="form-control" placeholder="Buscar..">   
                        </div>
                    </div>
                </div>


                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="muetra">Muestra</label>
                        <div class="input-group">
                            <input type="text" name="muestra" value="{{$data['Muestra']}}" class="form-control" placeholder="Buscar..">
                        </div>  
                    </div>
                    <div class="col-md-2">
                        <label for="pin">Pin</label>
                        <div class="input-group">
                            <input type="text" name="pin" value="{{$data['Pin']}}" class="form-control" placeholder="Buscar..">
                        </div>  
                    </div>       
                    <div class="col-md-2">
                        <label for="fechamuestra">Fecha Muestra</label>
                        <div class="input-group">
                            <input type="date" name="fechamuestra" value="{{$data['FechaMuestra']}}" class="form-control" placeholder="Buscar..">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="horamuestra">Hora Muestra </label>
                        <div class="input-group">
                            <input type="text" name="horamuestra" value="{{$data['HoraMuestra']}}" class="form-control" placeholder="Buscar..">   
                          </div>
                    </div>

                </div>
                </div>
                <hr class="section-title-hr">

                <br>

               
               

                <button type="submit" class="btn btn-success" style="float:right; margin-top: -6px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                    <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                  </svg>&nbsp;Guardar y Terminar</button>
                
            </form>

            <button class="btn btn-secondary" id="agregar_cliente" style="margin-top: -5px; width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg></i><a style="text-decoration: none; color: white;" href="{{url('/Informes')}}"> &nbsp; Cancelar</button></a>


              
            
            
</section>
    </div><br><br><br>



    
    {{-- <footer class="admin-footer">
        <div class="text-center">
            <p class="text-warning">&copy; <b>2022 ILAB. Todos los derechos reservados.</b></p>
        </div>
    </footer> --}}

    
</body>
</html>