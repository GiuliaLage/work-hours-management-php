<div class="card">
  <div class="card-body">
    <h5 class="card-title">Olá <span id="user_name"><?php echo $this->session->userdata('user_name')?></span></h5>
    </br>
    <button id="bater-ponto" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Bater Ponto</button>
  </div>
</div>
<div class="d-flex justify-content">
  <div class="container postition-cointainer">
    <div class="col col-md-11 offset-md-2">
      <table id="table_id" class="display" style="width:100%">
      </table>
    </div>
  </div>
</div>
</body>