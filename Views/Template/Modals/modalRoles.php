<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form name="formRol" id="formRol">
                <input type="hidden" id="idRol" name="idRol" value="">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol" required="">
                </div>
                <div class="mb-3">
                  <label class="form-label">Descripción</label>
                  <textarea class="form-control" rows="2" id="txtDescripcion" name="txtDescripcion" placeholder="Descripcion del rol" required=""></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleSelect1">Estatus</label>
                    <select class="form-control" id="listStatus" name="listStatus" required="">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-secondary" href="#" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                </div>
              </form>
            </div>
            
          </div>
      </div>
    </div>
  </div>
</div>