$(document).ready(function(){
     //ponemos los datos del producto a editar en el modal
    $('.btnEditar').on('click',function(){
        var id = $(this).data('id');
        var nombre= $(this).data('nombre');
       //ponemos los datos en el modal
       $('#id').val(id);
       $('#producto').val(nombre);
    });

    //actualizar producto
    $('#btnActualizar').on('click', function() {
      var id_actualizar = $('#id').val();
      var producto_actualizar = $('#producto').val();
      
      $.ajax({
        url: "/actualizar",
        type: "POST",
        data: {
          id: id_actualizar,
          producto: producto_actualizar,
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