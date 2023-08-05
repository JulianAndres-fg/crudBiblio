<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Insertar libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="{{route('app.store')}}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="nombre" id="inputName" placeholder="Nombre">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Genero</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="genero" id="inputName" placeholder="Genero">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Autor</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="autor" id="inputName" placeholder="Autor">
                    </div>

                    <label for="inputName" class="col-4 col-form-label">Editorial</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="editorial" id="inputName" placeholder="Editorial">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                  </div>
            </form>
        </div>
     
      </div>
    </div>
  </div>