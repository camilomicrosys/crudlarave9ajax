<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombre</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        <!--Los datos vienen del la vista al cargar principal index, o del ajax al actualizar eliminar -->
        @foreach ( $datos as $dato )
      <tr>
        <th scope="row">{{$dato->id}}</th>
        <td>{{$dato->nombre}}</td>
        
        <td><!-- Button trigger modal -->
            <button data-id="{{$dato->id}}" data-nombre="{{$dato->nombre}}" type="button" class="btnEditar btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Editar
              </button></td>
        <td><button data-id="{{$dato->id}}" class="btnEliminar btn btn-danger">Eliminar</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>



  

  <script src="{{asset('ajax/editar.js')}}"></script>
  <script src="{{asset('ajax/eliminar.js')}}"></script>