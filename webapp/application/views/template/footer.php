<footer>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hellobye - Bater ponto</h5>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-save">
            <input hidden id="id" name="id" type="text" class="form-control"/>
            <div class="form-group">
              <label for="date" class="col-form-label">Data:</label>
              <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
                <input name="data" type="text" id="date" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
              </div>
            </div>
            <div class="form-group">
              <label for="hour" class="col-form-label">Hora:</label>
              <div name="hour" class="input-group date" id="datetimepicker3" data-target-input="nearest">
                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
                <input name="hour" id="hour" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" data-mask="00:00" />
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Categorias:</label>
              <select name="categorias" id='categorias' class="form-control" id="exampleFormControlSelect1">
              </select>
            </div>
            <div class="form-group">
              <button id="modal-save" type="submit" class="btn button-login">Salvar</button>
              <button id="modal-fade" type="button" class="btn bt000n-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</footer>