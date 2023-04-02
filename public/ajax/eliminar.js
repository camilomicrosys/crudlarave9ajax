$(document).ready(function(){
 

   //eliminar un producto
   $('.btnEliminar').on('click', function() {
     var id_actualizar = $(this).data('id');
     
   
            if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
                    $.ajax({
                    url: "/eliminar",
                    type: "DELETE",
                    data: {
                        id: id_actualizar,
                        
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
            }
   });


       
       
 
 
   //cierre de jquery
 });