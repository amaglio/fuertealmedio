<?=$head?>

 

  

<link href="<?=base_url()?>/assets/css/home_css.css" rel="stylesheet">

<style type="text/css">
  .parent {
    width: 100%;
    margin: 20px;  
    overflow: hidden;
    position: relative;
    float: left;
    display: inline-block; 
}

.area-imagen {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}


.parent:hover .area-imagen, .parent:focus .area-imagen {
    -ms-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}

.parent:hover .area-imagen:before, .parent:focus .area-imagen:before {
    display: block;
}

.parent:hover a, .parent:focus a {
    display: block;
}
 

</style>

<section id="home">

    <!-- HOME -->
    <section id="seccion_home">  
      
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
                    <div class="carousel-inner" id="carousel-inner" >

                      <? $x=0; ?>
                      <? foreach ($carrusel as $row): ?>


                          <?  $active = '';  

                            if( $x==0 ) $active = 'active';

                          ?>

                          <div class="item <?=$active?>">
                             <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/carrusel/<?=$row['path_imagen']?>" alt="First slide-<?=$row['path_imagen']?>">
                             <div class="shadow"></div>
                             
                              
                                <div class="slide_div_titulo">
                                  <div class="container container_slider" >
                                  <p class="slide_titulo1"><?=$row['titulo']?></p> 
                                  <p class="slide_titulo2"><?=$row['titulo2']?></p>
                                  <p class="slide_descripcion"><?=$row['descripcion']?></p>
                                </div>
                              </div>
                          </div>

                      <? $x++; ?>
                      <? endforeach; ?>
 
                    </div>
   
                </div>
              </div>
           
      </div>     
    </section>

    <!-- PUBLICACIONES -->
    <section id="seccion_publicaciones" class="seccion" >  
      
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

    <!-- PATROCINADORES -->
    <section id="patrocinadores" class="seccion">  

      <div class="row" id="patrocinadores_desktop">
        <div class="container">           
          <div class=" col-xs-12  "  > 
           
            <section class="customer-logos slider">
              <div class="slide ">
                  <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/club_leloir.png">
              </div>
              
              <div class="slide ">
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

      <div class="row" id="patrocinadores_mobile">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" id="carousel-inner" >
         

                    <div class="item active">
                      <div class=" col-xs-6 "  > 
                        <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/club_leloir.png">
                      </div>
                       <div class=" col-xs-6 "  >
                          <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/porunsentido.jpg">
                       </div>
                    </div>

                    <div class="item">
                        <div class=" col-xs-6 "  > 
                            <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/rutatlatica.jpg">
                        </div>
                         <div class=" col-xs-6 "  >
                            <img class="img-responsive"  src="<?=base_url()?>assets/img/patrocinadores/santo_domingo.jpg">
                         </div>
                    </div>

                    <div class="item">
                        <div class=" col-xs-12 "  > 
                          <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/grido.jpg">
                        </div> 
                    </div>
              </div>
            </div>
          </div>
      </div>


    </section>

    <!-- NUESTRA CANCHA -->
    <section id="seccion_nuestra_cancha" class="seccion">  
      <div class="row">
        <div class="container">
        
          <div class="col-md-12 col-xs-12 titulo" > 
              NUESTRAS <span class="titulo_verde"> CANCHAS <span>
          </div>
 
        </div>

         
        <div class="col-md-6 col-xs-12  " > 
          <div class="parent" >
            <div class="area-imagen">

              <img src="<?=base_url()?>assets/img/cancha/foto_cancha.jpg"  class="foto_cancha">

            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-12"> 
          <div class="parent" >
              <div class="area-imagen">
                <img src="<?=base_url()?>assets/img/cancha/foto_golf.jpg"  class="foto_cancha"> 
              </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12"> 
          <div class="parent" >
              <div class="area-imagen">
                <img src="<?=base_url()?>assets/img/cancha/cancha_futsal.png"  class="foto_cancha">  
              </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12" style="padding-top: 0px"> 
          <div class="parent" >
              <div class="area-imagen">
                <img src="<?=base_url()?>assets/img/cancha/foto_pileta.jpg"  class="foto_cancha">  
              </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12"> 
          <div class="parent" >
              <div class="area-imagen">
                <img src="<?=base_url()?>assets/img/cancha/foto_deck2.png"  class="foto_cancha">  
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- ESCRIBINOS -->
    <section id="seccion_contacto" class="seccion">  
      <div class="row">
        <div class="container">
        
          <div class="col-md-12 col-xs-12 titulo" > 
              ESCRIBINOS  
          </div>
          
          <div class="col-md-6 col-xs-12 " > 
            <?php // Change the css classes to suit your needs    

            $attributes = array( 'id' => 'form_consulta_web', 'name' => 'form_consulta_web');
            echo form_open('procesa_consulta_web', $attributes); ?>

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
                   <input placeholder="WhatsApp" class="form-control" id="whatsapp" type="text" name="whatsapp" maxlength="100" value="<?php echo set_value('whatsapp'); ?>"  />
            </p>

            <p>
                
                    <textarea rows="5"  placeholder="Mensaje" class="form-control"  id="mensaje" type="text" name="mensaje" maxlength="2000" value="<?php echo set_value('mensaje'); ?>" ></textarea>
 
            </p>


            <p>
                    <?php echo form_submit( 'submit', 'Enviar', 'class="btn btn-primary btn-block" style="background-color: #228d87" '); ?>
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
 

<!-- Validaciones -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.10.custom.min.js"></script>

<script language="javascript" type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.js" ></script>
<script language="javascript" type="text/javascript" src="<?=base_url()?>assets/js/additional-methods.js" ></script> 

<script>
var jq_va = jQuery.noConflict();
</script>

<script type="text/javascript">
 
    jq_va(function(){

            jq_va('#form_consulta_web').validate({

                rules :{

                        nombre : {
                            required : true 
                        },
                        email : {
                            required : true ,
                            email: true 
                        },
                        mensaje : {
                            required : true,
                            
                        }  
                },
                messages : {

                        nombre  : {
                            required : "Ingresá tu nombre" 
                        },
                        email  : {
                            required : "Ingresá tu email" ,
                            email: "Ingresá un email valido"
                        },
                        mensaje : {
                            required : "Ingresá tu mensaje"
                        }   
                } 
            });    
    });

</script>


<?=$footer?>