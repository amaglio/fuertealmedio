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
                    <div class="carousel-inner"">
                      <div class="item active">
                         <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slider1.jpg" alt="First slide">
                         <div class="shadow"></div>
                         
                         <div class="container">
                         <div class="slide_div_titulo">
                            
                              <p class="slide_titulo1">Apertura 2018</p><br>
                              <p class="slide_titulo2">COMIENZA EL NUEVO TORNEO</p><br>
                              <p class="slide_descripcion">Anotate antes del 20 de Agosto y disfruta de la copa libertadores, sudamericana y recopa.</p>
                            </div>
                         </div>
                      </div>

                      <div class="item">
                        <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slider2.jpg"  >
                        <div class="shadow"></div>
                      </div>
                    
                      <div class="item">
                        <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/slider3.jpg" alt="Third slide">
                        <div class="shadow"></div>
                      </div>
                    </div>
   
                </div>
              </div>
           
      </div>     
    </section>

    <!-- PUBLICACIONES -->
    <section id="publicaciones" class="seccion" >  
      
        <div class="row"  >
          <div class="container">
             
              <div class="col-md-12 col-xs-12 titulo"  > 
                ULTIMAS <span class="titulo_verde"> PUBLICACIONES</span>
              </div>
        
            <?  foreach ($noticias as $row): 

                  if(isset( $row['iframe'] )):

                    // $iframe = str_replace('    ' , ' ', $row['iframe']);
                    $iframe =  $row['iframe'];
                    ?>

                       <div class="col-md-4 col-xs-12 publicacion" ><?=$iframe?></div>

                    <?

                  endif;
            ?>     

            <?  endforeach; ?>
          
        

          </div>
       </div>
      
    </section>

    <!-- Patrocinadores -->
    <section id="patrocinadores" class="seccion">  

        <div class="row">
          <div class="container">           
            <div class=" col-xs-12  "  > 
             
              <section class="customer-logos slider">
                <div class="slide">
                    <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/club_leloir.png">
                </div>
                
                <div class="slide">
                    <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/grido.jpg">
                </div>

                <div class="slide"> 
                    <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/porunsentido.jpg">
                </div> 

                <div class="slide"> 
                    <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/rutatlatica.jpg">
                </div> 

                <div class="slide" > 
                    <img class="img_convenio" style="padding-left: 50px;" src="<?=base_url()?>assets/img/patrocinadores/santo_domingo.jpg">
                </div> 
              </section>
            </div>
            
          </div>
        </div>

    </section>

    <!-- Fotos del lugar -->
    <section id="fotos_lugar" class="seccion">  
      <div class="row">
        <div class="container">
        
          <div class="col-md-12 col-xs-12 titulo" > 
              NUESTRAS <span class="titulo_verde"> CANCHAS <span>
          </div>
 
        </div>

        <div class="col-md-6 col-xs-12" > 
            <img src="<?=base_url()?>assets/img/cancha/foto_cancha.jpg"  class="foto_cancha">
        </div>
        <div class="col-md-3 col-xs-12"> 
          <img src="<?=base_url()?>assets/img/cancha/foto_golf.jpg"  class="foto_cancha"> 
        </div>
        <div class="col-md-3 col-xs-12"> 
          <img src="<?=base_url()?>assets/img/cancha/foto_deck.jpg"  class="foto_cancha">  
        </div>
        <div class="col-md-3 col-xs-12"> 
          <img src="<?=base_url()?>assets/img/cancha/foto_pileta.jpg"  class="foto_cancha">  
        </div>
        <div class="col-md-3 col-xs-12"> 
          <img src="<?=base_url()?>assets/img/cancha/foto_pileta.jpg"  class="foto_cancha">  
        </div>
      </div>
    </section>

    <!-- Escribinos -->
    <section id="contacto" class="seccion">  
      <div class="row">
        <div class="container">
        
          <div class="col-md-12 col-xs-12 titulo" > 
              ESCRIBINOS  
          </div>
          
          <div class="col-md-6 col-xs-12 " > 
            <?php // Change the css classes to suit your needs    

            $attributes = array('class' => '', 'id' => '');
            echo form_open('Home', $attributes); ?>

            <p> 
                    <input placeholder="Nombre" class="form-control" id="nombre" type="text" name="nombre" maxlength="100" value="<?php echo set_value('nombre'); ?>"  />
            </p>

            <p>  
                     <input placeholder="Apellido" class="form-control" id="apellido" type="text" name="apellido" maxlength="100" value="<?php echo set_value('apellido'); ?>"  />
            </p>

            <p>  
                   <input placeholder="Email" class="form-control" id="email" type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>"  />
            </p>

            <p>
                
                    <textarea rows="5"  placeholder="Mensaje" class="form-control"  id="mensaje" type="text" name="mensaje" maxlength="2000" value="<?php echo set_value('mensaje'); ?>" ></textarea>
 
            </p>


            <p>
                    <?php echo form_submit( 'submit', 'Submit', 'class="btn btn-primary btn-block" style="background-color: #2c8787" '); ?>
            </p>

            <?php echo form_close(); ?>
          </div>

          <div class="col-md-6 col-xs-12 " > 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.6640191213805!2d-58.70348198520552!3d-34.663187080444146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbf85c39ad89f%3A0x31272174f7eff838!2sComplejo+Deportivo+X1S!5e0!3m2!1ses!2sar!4v1533162526229"  style="border:0; width: -webkit-fill-available;
              height: -webkit-fill-available;" allowfullscreen>
            </iframe>
          </div>



        </div>
      </div>
    </section>

   
    

  

</section>
 

<?=$footer?>