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

    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"  ></script>

    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/bootstrap.min.js"  ></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <script type="text/javascript">
            CI_ROOT = "<?=base_url()?>";
    </script>
    
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" >

    <style type="text/css">
      
      label.error
      {
          color:red;
          font-size: 11px;
      }

      .div_row
      {
          padding: 1.25rem;
          /*margin-top: 1.25rem;*/
          margin-bottom: 1.25rem;
          border: 1px solid #eee;
          /*border-left-width: .25rem;*/
          border-radius: .25rem
      }

      #logo{
        width: 170px;
      }

      .fa{
        font-size: 20px;
      }

      
      .navbar-collapse {
            float: left;
            width: 100%;
            clear: both;
      }

      #button_responsive{
            background-color: #002650;
      }

      .icon-bar{
        background-color: white;
      }

      .nav>li>a 
      {
          position: relative;
          display: block;
          padding: 10px 10px;
      }

      .navbar-header{
        padding: 10px 0px;

      }

      .nav>li>a { 
          padding: 10px 10px;
          color: #002751;
          font-weight: lighter;
      }

  

      .label_seccion{
          padding: 15px 10px;
          width: -webkit-fill-available;
          color: #000;
          margin-bottom: 10px;
          padding-left: 20px;
        
          font-size: 26px;
          font-weight: 100;
      }

      .img_logo{
        width: 150px;
        float: right;
        height: 70px
      }


     


      /* --- FOOTER --- */
          
      #footer_link
      {
          background-color: #212529;
          color:#FFF;
      }

      #footer_redes
      {
          background-color: #131417;
          color:#FFF;
      }

      .footer_seccion
      {
          color: #947301 !important;
      }

      .footer_link_util
      {
          color: white !important;
      }

      .link_menu{
          color: #000;
          font-weight: bold;
          font-size: 14px;
      font-weight: 500;
      }

      .item-footer{
        list-style:none !important;
      }

      .fa-chevron-right{
        font-size: 12px;
      }

      .mr-3{
        margin-right: 2rem!important;
      }

      .link_footer{
        color: white;
      }

      .link_footer:hover{
        color: grey; 
        text-decoration: none;
      }
        
        /*
      a:hover[class="link_menu"] 
      { 
        background-color: red;

      }

      a.link_menu:hover
      { 
        background-color: red;

      }*/

    </style>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
 
    </head>
  <body>

    <section id="header" class="container"> 
      <div class="row">
        <header>
         
          <div class="container-fluid">

 
             <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                      <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                  </div><!--/.navbar-collapse -->
                </div>
              </nav>
          </div>
 

        </header>
      </div>
    </section>