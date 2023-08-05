<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="update{{$Libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="{{route('app.update',$Libro->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nombre" id="inputName" value="{{$Libro->nombre}}">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Genero</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="genero" id="inputName" value="{{$Libro->genero}}">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Autor</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="autor" id="inputName" value="{{$Libro->autor}}">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Editorial</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="editorial" id="inputName"  value="{{$Libro->editorial}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                  </div>
            </form>
        </div>
     
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade" id="delete{{$Libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('app.destroy',$Libro->id)}}"  method="POST">
                @csrf
               @method('DELETE')
                ¿Deseas eliminar a <strong>{{$Libro->nombre}}</strong>?
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Aceptar</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>

  <div class="modal fade" id="view{{$Libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ver libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="{{route('app.show',$Libro->id)}}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nombre" id="inputName" value="{{$Libro->nombre}}" readonly>
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Genero</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="genero" id="inputName" value="{{$Libro->genero}}" readonly>
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Autor</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="autor" id="inputName" value="{{$Libro->autor}}" readonly>
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Editorial</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="editorial" id="inputName"  value="{{$Libro->editorial}}" readonly> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                  </div>
            </form>
        </div>
     
      </div>
    </div>
  </div>
  </div>



  <div class="modal fade" id="deleteall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('app.store')}}"  method="POST">
                @csrf
                ¿Deseas eliminar <strong>Todos los datos</strong>?
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Aceptar</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>




  
