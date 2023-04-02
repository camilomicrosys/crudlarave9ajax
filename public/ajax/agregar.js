$(document).ready(function(){
  

   //agregar un producto
   $('.btnAgregarProducto').on('click', function() {
    
    var producto=$("#nombreproducto").val();
   
   
   
     
     $.ajax({
       url: "/agregar",
       type: "POST",
       data: {
        nombreproducto:producto
       },
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       success: function(response) {
         
        // console.log(response);
        $('#contenido').empty();
        $('#contenido').html(response);
        
        
        
       },
       error: function(xhr, status, error) {
         alert('Error al actualizar el producto.');
         alert(xhr.responseText);
       }
     });
   });
   

       
       
 
 
   //cierre de jquery
 });