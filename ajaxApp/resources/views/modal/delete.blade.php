<div class="modal" id="deletePaisModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Borrar país</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden"  class="form-control" type="text" id="deleteCode" maxlength="3" placeholder="Código del país">
        <input type="hidden"  class="form-control" type="text" id="deleteName" maxlength="100" placeholder="Nombre del país">
        <input type="hidden" id="deleteUrl">
        <div class="alert alert-danger visually-hidden" role="alert" id="errorAlert">
          Error al borrar el pais...
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="btBorrarPais" class="btn btn-primary">Borrar país</button>
      </div>
    </div>
  </div>
</div>