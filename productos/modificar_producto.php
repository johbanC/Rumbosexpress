<?php 
include_once '../include/Header.php';
include_once '../config/conexion.php';
$conexion=conexion();

$id_productos=$_REQUEST['id_productos'];

$sql = "SELECT * FROM productos WHERE id_productos = '$id_productos' ";
$result = mysqli_query($conexion,$sql);
$ver=$result->fetch_assoc();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="container">
      <form enctype="multipart/form-data" method="POST" action="php/guardar_modificacion.php?id_productos=<?php echo $ver['id_productos']?>">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Nuevo Usuario</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <div class="col-md-3">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nombre Producto</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" name="nombre_producto" required value="<?php echo $ver['nombre_producto'] ?>" required>
                  </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Total Producto</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" name="total_producto" required value="<?php echo $ver['total_producto'] ?>" required >
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