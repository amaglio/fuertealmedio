<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- OsteriaX -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?=$titulo?></title>
   
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">
    
     <link href="<?=base_url()?>assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >  

    <link href="<?=base_url()?>assets/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" >

    <link href="<?=base_url()?>assets/css/infinite-slider.css" rel="stylesheet" type="text/css" >

    <link href="<?=base_url()?>assets/css/hover.css" rel="stylesheet" type="text/css" >
    <!--
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" > -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" >
 
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
     
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

 

    <script type="text/javascript">
            CI_ROOT = "<?=base_url()?>";
    </script>
    

    </head>
  <body> 
    <section id="header"> 
      <div class="row">

    
            <nav class="navbar  navbar-fixed-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <div class="container">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img class="img_logo"  src="<?=base_url()?>assets/img/logo_fam.png"></a>
                    </div>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                   
                    <div class="navbar-form navbar-right" role="form">
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger active" href="#seccion_home"> Home </a>
                      </div>
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger" href="#seccion_publicaciones"> Publicaciones </a>
                      </div>
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger" href="#seccion_nuestra_cancha"> Nuestra cancha </a>
                      </div> 
                      <div class="form-group nav-item">
                        <a class="nav-link js-scroll-trigger" href="#seccion_contacto">Contacto</a>
                      </div>
                    </div>


                  </div><!--/.navbar-collapse  -->
                </div>
              </nav>

              <script>

                // Add active class to the current button (highlight it)
                var header = document.getElementById("navbar");

                var btns = header.getElementsByClassName("nav-link js-scroll-trigger");

                for (var i = 0; i < btns.length; i++) 
                {
                    btns[i].addEventListener("click", function() 
                    {
                      var current = document.getElementsByClassName("active");
                      current[0].className = current[0].className.replace(" active", "");
                      this.className += " active";
                    }); 
                }
              
              </script>
            <!-- Navigation -->


<!--     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container">
 
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img class="img" src="img/logo.png" style="width: 40%"> 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="position: absolute; right: 0px; top: 10px;margin-right: 20px; ">
          <span class="navbar-toggler-icon"></span>
        </button >

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#nuestros_servicios">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#quienes_somos">Quiénes somos</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#casos_exito">Casos</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
  
      </div>
    </section>