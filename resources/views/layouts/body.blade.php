<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


          <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- MDB -->
      <link rel="stylesheet" href="mdb/css/mdb.min.css" />
     

    <title>@yield('Title')</title>
</head>

<body style="position: relative;min-height: 100vh;">
    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        {{-- <i class="material-icons">person</i> --}}
        &nbsp;<img src="/images/user.png" alt="user" width="40" class="mr-1">&nbsp; &nbsp;
        <span class="navbar-brand mr-2">@yield('UserName')</span>
        <span style="height:30px;border-left:2px solid black;"></span>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">&nbsp;&nbsp;&nbsp;
               <li class="nav-item active">
                      <a href="#" class="nav-link"><b>Profile</b></a>
               </li>
               <li class="nav-item ">
                      <a href="#" class="nav-link">Notes</a>
               </li>
               <li class="nav-item ">
                <a href="#" class="nav-link">Emploi du temps</a>
                </li>  
            </ul>
        </div>

        <a class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="cursor: pointer;">
            <i class="material-icons align-top">logout</i>
            Se deconnecter
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="input-group">
                <div class="form-outline">
                  <input type="search" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Buscar</label>
                </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
              </div>
        </div>
    </div>

    <footer class="card-footer" style="position:absolute;bottom:0;left:0;width:100%;text-align:center;">
        <small>
            <span class="font-weight-bold">Copyright &copy; <script>document.write(new Date().getFullYear());</script> :</span> 
            ILab_Project
        </small>
    </footer>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
        $(".note__close").click(function() {
          $(this).parent()
          .animate({ opacity: 0 }, 250, function() {
            $(this)
            .animate({ marginBottom: 0 }, 250)
            .children()
            .animate({ padding: 0 }, 250)
            .wrapInner("<div />")
            .children()
            .slideUp(250, function() {
              $(this).closest(".note").remove();
            });
          });
        });
        });
    </script>

</body>
</html>