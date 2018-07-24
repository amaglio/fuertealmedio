<?=$head?>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  

<link href="<?=base_url()?>/assets/css/home_css.css" rel="stylesheet">

<section id="serccion_home">

    <!-- Carrusel -->
    <section id="carrusel">  
      
       <div class="row">

          <div class="col-md-12 col-xs-12 " > 
                        
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slide_home_1.png" alt="First slide">
                    </div>

                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slide_home_2.png"  >
                    </div>
                  
                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slide_home_3.png" alt="Third slide">
                    </div>
                  </div>
 
              </div>
 
          </div>
       </div>
      
    </section>

    <!-- Fotos torneo -->
    <section id="institucional">  
      <div class="container">
       <div class="row div_row" style=" color: #002852">

          <div class="col-md-12 col-xs-12 " > 
            Nuestro compromiso y trabajo se orientan a desarrollar acciones que logren <strong>un avance sustancial en el tratamiento de la temática del envejecimiento poblacional</strong>. A partir de <strong>la investigación, el conocimiento y la trayectoria</strong> de nuestros equipos profesionales, nos proponemos asumir el desafío de <strong>dar respuestas que contribuyan a proteger la salud funcional de las personas mayores, reducir los niveles de dependencia, fomentar el autocuidado, la identidad y el mayor grado de autonomía posible dentro de una sociedad que los incluya e integre social, económica y culturalmente como sujetos plenos de derechos</strong>.
          </div>

       </div>
      </div>
    </section>

     <!-- Patrocinadores -->
    <section id="investigacion_novedades">  
      <div class="container">
        <div class="row  ">

          <div class="col-md-6 col-xs-12 div_row"  > 

              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion" style="  border-left:4px solid #088bba;"><a   class="link_seccion"  href="<?=base_url()?>investigacion"> Investigaciones </a></label>
                </div>
              </div>

              <div class="row row_listado  col-sm-4 col-xs-12 col-md-12">

                      <div class="col-md-4 col-s-6  col-xs-12 " > 
                         <img class="img img-thumbnail" src="<?=base_url()?>assets/img/iconos_investigacion/publicaciones.png"  >
                      </div>
                      <div class="col-md-7  col-xs-12" > 
                        <span class="titulo_investigaciones"><a href="<?=base_url()?>investigacion/ver_investigacion_tipo/1"> Publicaciones </a> </span>
                      </div>                 
              </div> 

              <div class="row row_listado col-sm-4 col-xs-12 col-md-12">

                      <div class="col-md-4 col-s-6 col-xs-12 " > 
                         <img class="img img-thumbnail" src="<?=base_url()?>assets/img/iconos_investigacion/proyecto_investigacion.png"  >
                      </div>
                      <div class="col-md-7 col-xs-12 " > 
                        <span class="titulo_investigaciones" ><a href="<?=base_url()?>investigacion/ver_investigacion_tipo/3">Proyectos de investigación </a></span>
                      </div>                   
              </div>

              <div class="row row_listado col-sm-4 col-xs-12 col-md-12">

                      <div class="col-md-4 col-s-6 col-xs-12 " > 
                         <img class="img img-thumbnail" src="<?=base_url()?>assets/img/iconos_investigacion/congresos.png"  >
                      </div>
                      <div class="col-md-7 col-xs-12 " > 
                        <span class="titulo_investigaciones" ><a href="<?=base_url()?>investigacion/ver_investigacion_tipo/2">Congresos</a></span>
                      </div>
              </div>
 
          </div>

  
          <div class="col-md-6 col-xs-12 div_row"  > 

              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion" style="  border-left:4px solid #dc0404;"><a  class="link_seccion" href="<?=base_url()?>novedad">Novedades</a></label>
                </div>
              </div>
              
               

                <a class="btn btn-danger btn-xs pull-right" href="<?=base_url()?>novedad">+ Novedades</a>
             
          </div>

        </div>
      </div>
    </section>

    <!-- Fotos lugar -->
    <section id="educacion">  
      <div class="container">
        <div class="row div_row"> 
              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion" style="  border-left:4px solid green;"><a class="link_seccion" href="<?=base_url()?>educacion">Educación</a></label>
                </div>
              </div>
              <div class="row row_listado">
 

              </div> 

              <a class="btn btn-success btn-xs pull-right" href="<?=base_url()?>educacion">+ Educación </a>
        </div>
      </div>
    </section>

   
    <section id="logos">  

      <div class="container">
        <div class="row div_row">
            <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion" style="  border-left:4px solid #d8a9b5;">
                    <a   class="link_seccion"  href="<?=base_url()?>investigacion">
                      Convenios
                    </a>
                  </label>
                </div>
              </div>

            <section class="customer-logos slider">
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOBIOETICAR.png"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSBUENOSAIRES.png"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSGC.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSIDOM.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSSANFRANCISCO.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSSIGLO21.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSVICENTELOPEZ.jpg"></div> 
            </section>
        </div>
      </div>
    </section>

  

</section>

    <script type="text/javascript">
    /*
      $('.carousel').carousel();*/
    </script>

<?=$footer?>