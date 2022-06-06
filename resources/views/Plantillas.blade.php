<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Clinicas</title>
    
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
                margin-top: 200px;
                width: 80%;
                padding-top: 30px;
            }

            .search_button
            {
                border: none;
                margin-top: 30px;
                margin-right: 10px;
                
            }

            .hr_line{
                border: 5px solid red;
            }

           

            


    </style>


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
        <span class="glyphicon glyphicon-customer"></span>
        <a href="{{ url('/Cliente') }}" class="nav_items">Clientes</a></div>
        <div class="item">
        <span class="glyphicon glyphicon-user"></span>
        <a href="#" class="nav_items">Usuarios</a></div>    
        </div>
        
    </div>

    
    <section class="clinicas">


            <div class="container">

                <form>
                    <div class="col-xs-3"">
                      <label for="clinica">Buscar por Nombre </label>
                      <input type="text" class="form-control" id="clinica_input" aria-describedby="clinica" placeholder="" size="10">
                      
                    </div>
                    <button class="search_button"><span class="glyphicon glyphicon-search"></span></button> 

                    <button class="btn btn-success" style="float:right; margin-top: 15px;"><i class="fa fa-plus"></i> &nbsp; Agregar Plantilla</button>
                    </form>
                    <br><br>
                    <hr class="h_line">
                   

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