// jq_c( "#form_consulta_web" ).submit(function( event ) {
//     alert("aaa");
//      event.preventDefault();

// }); 

// jq_c(function() {

//   console.log("EMAIL");
 
//   jq_c( "#form_consulta_web" ).submit(function( event ) {
   
//     event.preventDefault();
//     alert("aaa");
 
//     var nombre = jq_c("input#nombre").val();
//     var apellido = jq_c("input#apellido").val();
//     var email = jq_c("input#email").val();
//     var mensaje = jq_c("textarea#mensaje").val(); 
//     var whatsapp = jq_c("input#whatsapp").val(); 
 
//     $this = jq_c("#submit_enviar_consulta");
//     $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages

 
//     jq_c.ajax({
//               url: CI_ROOT+'index.php/home/procesa_consulta_web',
//               data: {   nombre: nombre,
//                         apellido: apellido,
//                         email: email,
//                         whatsapp: whatsapp,
//                         mensaje: mensaje },
//               async: true,
//               type: 'POST',
//               dataType: 'JSON',
//               success: function(data)
//              {  
//                 //$("#cargando").hide();
                
//                 if(data.error == false)
//                 {
//                   //alert("Bien");
//                   jq_c('#success').html("<div class='alert alert-success'>");
//                   jq_c('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//                     .append("</button>");
//                   jq_c('#success > .alert-success')
//                     .append("<strong>Tu mensaje ha sido enviado exitosamente y será respondido a la brevedad. </strong>");
//                   jq_c('#success > .alert-success')
//                     .append('</div>');
//                   //clear all fields
//                   jq_c('#contactForm').trigger("reset");
//                 }
//                 else
//                 {
//                   //alert("Mal");
//                   jq_c('#success').html("<div class='alert alert-danger'>");
//                   jq_c('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//                     .append("</button>");
//                   jq_c('#success > .alert-danger').append(jq_c("<strong>").text("Ha ocurrido un error, por favor, intente mas tarde o escribinos a nuestro email"));
//                   jq_c('#success > .alert-danger').append('</div>');
//                   //clear all fields
//                   jq_c('#contactForm').trigger("reset");
//                 }


//               },
//               error: function(x, status, error){
//                   jq_c("#cargando").hide();
//                   jq_c('#success').html("<div class='alert alert-danger'>");
//                   jq_c('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//                     .append("</button>");
//                   jq_c('#success > .alert-danger').append(jq_c("<strong>").text("Ha ocurrido un error, por favor intente más tarde o escribinos a nuestro."));
//                   jq_c('#success > .alert-danger').append('</div>');
//                   //clear all fields
//                   jq_c('#contactForm').trigger("reset");
//               },
//               complete: function() {
//                 setTimeout(function() {
//                   $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
//                 }, 1000);
//               } 
//     });

    
//   }); 
  
// }); 