    <section id="footer"  style="color: white" class="seccion"> 
        
        
        <section id="sub_footer" style="background-color: #228d87 ; padding: 20px 0px;">
           <div class="container">
            <div class="row " >
               
                  <div class="col-md-4 col-xs-12 "> 

                        <p>V. Gerde 97, B1718BLA San Antonio de Padua, Buenos Aires</p>
                        <p>+5411 5873 1547</p>
                        <p>+5411 6874 9618 </p>

                  </div>
                  <div class="col-md-4 col-xs-12 " > 
                        <ul class="item-footer">
                            <li><i class="fas fa-angle-right"></i> <a class="link_footer nav-link js-scroll-trigger" href="#seccion_home"> Home</a></li>
                            <li><i class="fas fa-angle-right"></i>   <a class="link_footer nav-link js-scroll-trigger" href="#seccion_publicaciones">Publicaciones</a></li>
                            <li><i class="fas fa-angle-right"></i>   <a class="link_footer nav-link js-scroll-trigger" href="#seccion_nuestra_cancha">Nuestra cancha</a></li>
                            <li><i class="fas fa-angle-right"></i> <a class="link_footer nav-link js-scroll-trigger" href="#seccion_contacto">Contacto</a></li> 
                        </ul>
                  </div>
               
                    
                
            </div>
          </div>
        </section> 

        

        <section id="sub_footer" style="background-color: #267373; padding-top: 20px; padding-bottom: 20px; text-align: center ">
          <div class="container">
            <div class="row" >
                
                  <div class="col-md-12 col-xs-12 " > 
                    

                    ©2018 TORNEO FUERTE AL MEDIO

                    </div>
                  
                
            </div>
          </div>
        </section>
     
    </section>

  	</body>
  	
    
  
  <!-- Bootstrap core jquery -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"  ></script>

  <!-- Bootstrap  -->
  <script type="text/javascript" src="<?=base_url()?>assets/dist/js/bootstrap.min.js"  ></script>  

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script> 

  <!-- Plugin JavaScript -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/scrolling-nav.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

   

  <!-- Jquery validate  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js" ></script>


    <script>
    var jq_va = jQuery.noConflict();
  </script>
  
  <script type="text/javascript">
 
    
    jq_va(document).ready(function(){
      jq_va('.customer-logos').slick({
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


</html>