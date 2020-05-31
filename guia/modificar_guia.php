<?php 
include_once '../include/Header.php';
include_once '../config/conexion.php';
$conexion=conexion();

$id_guia=$_REQUEST['id_guia'];

$sql = "SELECT * FROM guia WHERE id_guia = '$id_guia' ";
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
      <form enctype="multipart/form-data" method="POST" action="php/guardar_modificacion.php?id_guia=<?php echo $ver['id_guia']?>">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Nueva Guia</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">


              <div class="col-md-2">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nro Guia</label>
                    <input type="text" class="form-control" name="nro_guia" value="<?php echo $ver['numero_guia']; ?>" disabled>
                  </div>
              </div>

               <div class="col-md-3">
                <div class="form-group">
                  <label>Producto</label>
                    <select class="form-control" style="width: 100%;" name="producto" required>
                    <option value="">Seleccionar Tipo de Producto</option>
                    <?php
                    $sql="SELECT id_productos, nombre_producto, total_producto FROM productos ORDER BY nombre_producto";
                    $resultado=mysqli_query($conexion,$sql);

                    while($row = $resultado->fetch_assoc()) { ?>
                      <option value="<?php echo $row['id_productos']; ?>"><?php echo $row['nombre_producto'].' '.$row['total_producto']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
              <label for="exampleInputEmail1">Descripcion</label>
              <div class="card-body pad">
                  <div class="mb-3">
                      <textarea class="textarea" placeholder="descripcion"  name="descripcion" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="<?php echo $ver['descripcion'] ?>"><?php echo $ver['descripcion'] ?></textarea>
                  </div>
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