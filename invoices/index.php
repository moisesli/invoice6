<?php include '../config/validate.php' ?>
<?php include '../layout/header.php'; ?>
  <style>
    .list-group-item{
      padding: 5px 20px;
    }
    .list-group-item:hover{
      background: #f1f1f1;
    }
    .user-img img{
      height: 70px;
      width: 70px;
    }
  </style>
<div class="container">

  <div class="row justify-content-center">
    <div class="col-sm-9">

      <!-- Titulo -->
      <div class="row">
        <div class="col-8">
          <h1 class="display-4">Documentos</h1>
        </div>
        <div class="col-4 pt-3 text-right">
          <button class="btn btn-outline-info btn-lg" data-toggle="modal" data-backdrop="static" data-target="#Nuevodocumento"><i class="fa fa-plus"></i> Nuevo</button>
        </div>
      </div>

      <ul class="list-group">
        <li class="list-group-item">
          <div class="row">
            <div class="col-md-12" data-toggle="modal" data-target="#exampleModal">
              <div class="row">
                <div class="col-sm-1 user-img text-center pt-1 pl-1 pr-0">
                  <img src="/assets/img/factura.png" class="img-fluid img-circle rounded-circle" />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-weight-bold mb-1">MARCAS INTERNACIONALES E.I.R.LTDA.</h5>
                  <div class="user-detail">
                    <p class="m-0"><i class="fa fa-phone mr-1" aria-hidden="true"></i> F001-00000005, Soles</p>
                    <p class="m-0"><i class="fa fa-spinner spinner fa-spin mr-1" aria-hidden="true"></i> Enviando, <a
                          href="">Opciones</a></p>
                  </div>
                </div>
                <div class="col-sm-3 pt-1">
                  <h1 class="text-right" style="font-size: 50px">5684.00</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-1 user-img text-center pt-1 pl-1 pr-0">
                  <img src="/assets/img/boleta.png" class="img-fluid img-circle rounded-circle" />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-weight-bold mb-1">BENAVIDES TABRAJ WILLIAMS MOISES.</h5>
                  <div class="user-detail">
                    <p class="m-0"><i class="fa fa-phone mr-1" aria-hidden="true"></i> F001-00000005, Soles</p>
                    <p class="m-0"><i class="fa fa-envelope mr-1" aria-hidden="true"></i> example@gmail.com</p>
                  </div>
                </div>
                <div class="col-sm-3 pt-1">
                  <h1 class="text-right" style="font-size: 50px">84.00</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- Modal Documento -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="/assets/20532710066-03-B001-16676.svg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Nuevo -->
  <div class="modal fade" id="Nuevodocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Que Documento Crear?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <a href="/facturas/" class="btn btn-primary btn-lg col-8 mb-3">Factura Electrónica</a>
            <button type="button" class="btn btn-secondary btn-lg col-8 mb-3">Boleta Electrónica</button>
            <button type="button" class="btn btn-info btn-lg col-8 mb-3">Nota de Crédito Electrónica</button>
            <button type="button" class="btn btn-warning btn-lg col-8 mb-3">Nota de Débito Electrónica</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

</div>

<?php include '../layout/footer.php' ?>