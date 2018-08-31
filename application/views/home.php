<?=$head?>

<link href="<?=base_url()?>/assets/css/home_css.css" rel="stylesheet">

<style type="text/css">
  .parent {
    width: 100%;
    /*margin: 20px;  */
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

#cargando{
  display: none;
}

 
ol.carousel-indicators {
  position: absolute;
  bottom: 0;
  margin: 0;
  left: 0;
  right: 0;
  width: auto;
}

ol.carousel-indicators li,
ol.carousel-indicators li.active {
  float: left;
  width: 33%;
  height: 10px;
  margin: 0;
  border-radius: 0;
  border: 0;
  background: transparent;
}

ol.carousel-indicators li.active {
  background: #fec400;
}

.carousel-control.left , .carousel-control.right{
  background-image: none !important;
}

.carousel-control 
{
  font-size: 50px !important ;
  width: 8%;
  top: 50%;
}
 
.titulo_publicacion
{
  top: 65%; 
  position: absolute;
  left: 40px;
  font-weight: bold;
  font-size: 15px;
  width: 80%;
      background-color: #ffc200e6;
    padding: 5px;
    line-height: 12px;

    color: #292828;
}

.descripcion_publicacion
{
  position: absolute;
  top: 75%;
 
  left: 40px;
  font-size: 12px; 
      line-height: normal;
      width: 80%;
          background-color: #ffc200e6;
    padding: 5px;
    line-height: 12px;

    color: #292828;
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
                     <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                     <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
   i
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
        
            <?  $i = 0;

                foreach ($noticias as $row): 
                 

                  if($i == 0 OR $i == 3 OR $i == 6 OR $i == 9)  echo "<div class='row' style='margin-bottom:20px'> ";
              

                  if(isset( $row['iframe'] )):

                    // $iframe = str_replace('    ' , ' ', $row['iframe']);
                    $iframe =  $row['iframe'];
                    ?>

                       <div class="col-md-4 col-xs-12 publicacion" ><?=$iframe?></div>

                    <?

                  else: ?>

                      <div class="col-md-4 col-xs-12  " >
                        
                         
                          <div><img class="img-responsive" src="<?=base_url()?>assets/img/publicacion/<?=$row['path_imagen']?>"></div>
                          <div class="titulo_publicacion"> <?=$row['titulo']?> </div>
                          <div class="descripcion_publicacion"> <?=$row['descripcion']?> </div>
                         
                      </div>

              <?
                  endif;

                  if($i == 2 OR $i == 5 OR $i == 8 OR $i == 11)  echo "</div> ";

                  $i++;
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
                  <a href="https://www.facebook.com/clubleloiroficial/" target="_blank"> <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/club_leloir.png"></a>
              </div>
              
              <div class="slide ">
                  <a href="https://argentina.gridohelado.com/" target="_blank"> <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/grido.jpg"></a>
              </div>

              <div class="slide"> 
                  <a href="https://www.facebook.com/cdx1s/" target="_blank"> <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/porunsentido.jpg"></a>
              </div> 

              <div class="slide"> 
                  <a href="https://www.rutatlantica.com.ar/" target="_blank"> <img class="img_convenio" src="<?=base_url()?>assets/img/patrocinadores/rutatlatica.jpg"></a>
              </div> 

              <div class="slide" > 
                  <a href="https://www.facebook.com/SantoDomingoBS/" target="_blank"> <img class="img_convenio" style="padding-left: 50px;" src="<?=base_url()?>assets/img/patrocinadores/santo_domingo.jpg"></a>
              </div> 
            </section>
          </div>
          
        </div>
      </div> 
      <!-- 
      <div class="row" id="patrocinadores_mobile">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators  
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides 
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
      </div> -->

      <div class="row" id="patrocinadores_mobile">
        <div class="container">
 
          <div class="col-xs-6" style=" display: flex !important; align-items: center !important; justify-content: center !important; padding-top: 20px;"  > 
            <a href="https://www.facebook.com/clubleloiroficial/" target="_blank"> 
              <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/club_leloir.png">
            </a>
          </div>
          <div class="col-xs-6" style=" display: flex !important; align-items: center !important; justify-content: center !important; padding-top: 20px;" >
            <a href="https://www.facebook.com/cdx1s/" target="_blank">
              <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/porunsentido.jpg">
            </a>
          </div>

          <div class="col-xs-6" style=" display: flex !important; align-items: center !important; justify-content: center !important; padding-top: 20px;" > 
              <a href="https://argentina.gridohelado.com/" target="_blank">
                <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/grido.jpg">
              </a>
          </div>
           <div class="col-xs-6" style=" display: flex !important; align-items: center !important; justify-content: center !important; padding-top: 20px;" >
              <a href="https://www.facebook.com/SantoDomingoBS/" target="_blank">
                <img class="img-responsive"  src="<?=base_url()?>assets/img/patrocinadores/santo_domingo.jpg">
              </a>
           </div>

          <div class=" col-xs-12 "  style="display: flex !important; align-items: center !important; justify-content: center !important; padding-top: 20px;" > 
            <a href="https://www.rutatlantica.com.ar/" target="_blank">
              <img class="img-responsive" src="<?=base_url()?>assets/img/patrocinadores/rutatlatica.jpg">
            </a>
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
            echo form_open('', $attributes); ?>

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
                     <div id="success"></div>
                        <?php 
                          echo form_submit( 'submit', 'Enviar', ' id="submit_enviar_consulta" class="btn btn-primary btn-block" style="background-color: #228d87" '); 
                        ?> 
                        <img id="cargando" style="width:20px;" class="logo_web" src="<?=base_url()?>assets/img/loading.gif" alt="Logo img"> 
                    

                    
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

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"  ></script>


<!-- Email -->

<script>
  var jq_c = jQuery.noConflict();
</script>


<script type="text/javascript" src="<?=base_url()?>assets/js/contact_me.js"  ></script>

<!-- Validaciones --> 

<script>
  var jq_va = jQuery.noConflict();
</script>

<script type="text/javascript">
 
    jq_va(function(){

            jq_va('#form_consulta_web').validate({
                ignore: "",
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
                },
                submitHandler: function(form) 
                {

                   //alert(form.elements["nombre"].value)
                    var nombre = form.elements["nombre"].value;
                    var apellido = form.elements["apellido"].value;
                    var email = form.elements["email"].value;
                    var mensaje = form.elements["mensaje"].value; 
                    // var mensaje = "aaaaa"; 
                    var whatsapp = form.elements["whatsapp"].value; 
                 
                    $this = jq_c("#submit_enviar_consulta");
                    $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages

                 
                    jq_c.ajax({
                              url: CI_ROOT+'index.php/Home/procesa_consulta_web',
                              data: {   nombre: nombre,
                                        apellido: apellido,
                                        email: email,
                                        whatsapp: whatsapp,
                                        mensaje: mensaje },
                              async: true,
                              type: 'POST',
                              dataType: 'JSON',
                              success: function(data)
                             {  
                                //$("#cargando").hide();
                                
                                if(data.error == false)
                                {
                                  //alert("Bien");
                                  jq_c('#success').html("<div class='alert alert-success'>");
                                  jq_c('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                    .append("</button>");
                                  jq_c('#success > .alert-success')
                                    .append("<strong>Tu mensaje ha sido enviado exitosamente y será respondido a la brevedad. </strong>");
                                  jq_c('#success > .alert-success')
                                    .append('</div>');
                                  //clear all fields
                                  jq_c('#form_consulta_web').trigger("reset");
                                }
                                else
                                {
                                  //alert("Mal");
                                  jq_c('#success').html("<div class='alert alert-danger'>");
                                  jq_c('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                    .append("</button>");
                                  jq_c('#success > .alert-danger').append(jq_c("<strong>").text("Ha ocurrido un error, por favor, intente mas tarde o escribinos a nuestro email"));
                                  jq_c('#success > .alert-danger').append('</div>');
                                  //clear all fields
                                  jq_c('#form_consulta_web').trigger("reset");
                                }


                              },
                              error: function(x, status, error){
                                  jq_c("#cargando").hide();
                                  jq_c('#success').html("<div class='alert alert-danger'>");
                                  jq_c('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                    .append("</button>");
                                  jq_c('#success > .alert-danger').append(jq_c("<strong>").text("Ha ocurrido un error, por favor intente más tarde o escribinos a nuestro."));
                                  jq_c('#success > .alert-danger').append('</div>');
                                  //clear all fields
                                  jq_c('#form_consulta_web').trigger("reset");
                              },
                              complete: function() {
                                setTimeout(function() {
                                  $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                                }, 1000);
                              } 
                    });
                } 
            });    
    });

</script>

<!-- Slider logos --> 

<script>
  var jq_sc = jQuery.noConflict();
</script>

<script type="text/javascript">

  
  jq_sc(document).ready(function(){
    jq_sc('.customer-logos').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });

</script> 



<?=$footer?>