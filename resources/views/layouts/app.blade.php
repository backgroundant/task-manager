<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager App</title>
    <script src="https://use.fontawesome.com/0408d86e2f.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    
<!--    <link type="text/css" rel="stylesheet" href="/../task-manager-app/resources/assets/css/main.css">-->
    
    <style>
       .material-icons.md-36 { 
           font-size: 36px; 
        }
        
        .dashboard-icon {
            color: #26A69A;
        }
        
       #alert {
            background-color: lightyellow;
            border-radius: 5px;
            color: #636665;
        } 
        
        footer.page-footer{
            margin-top:0;
            padding-top:0;    
            background-color: #26A69A;
            position:fixed;
            bottom:0;
            width:100%;
        }
        .delete-btn {
            border: none;
            background-color: none;
            
        }
        
        .header {
            padding-top： 50px;
        }
        
    </style>
    <!-- Custom CSS files -->
    @yield('styles')
    
</head>


<body>
    <div class="container">
       
        @if( session('success') )
        <div class="row">
            <div class="col s10 offset-s1 col m6 offset-m3 center-align" id="alert">
                    {{ session('success') }}
            </div>
        </div>
        @endif
        
        @yield('content')
        
    </div>    
    
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Yuan Zhang
            <a class="grey-text text-lighten-4 right" href="#!">Clero Task Manager</a>
            </div>
        </div>
    </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    
    @yield('javascript')
    
    
</body>
</html>