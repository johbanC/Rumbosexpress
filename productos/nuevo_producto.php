<?php 
include_once '../include/Header.php';
include_once '../config/conexion.php';
$conexion=conexion();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="container">
      <form enctype="multipart/form-data" method="POST" action="php/guardar.php">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Nuevo Producto</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <div class="col-md-7">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del Producto</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" placeholder="Nombre Del Producto" name="nombre_producto" required>
                  </div>
              </div>

              <div class="col-md-4">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" placeholder="Total" name="total_producto" required>
                  </div>
              </div>
            </div>


			<button type="submit" class="btn btn-primary">Guardar</button>
			<button type="button" class="btn btn-primary" onclick="history.back()" >Volver</button>
         
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->

    </form>

    </div>


        


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once '../include/Footer.php' ?>