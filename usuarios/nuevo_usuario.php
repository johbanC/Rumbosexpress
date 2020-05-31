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
            <h3 class="card-title">Nuevo Usuario</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

               <div class="col-md-3">
                <div class="form-group">
                  <label>Tipo de Documentos</label>
                  <select class="form-control" style="width: 100%;" name="tipo_documento" id="tipo_documento" required>
                   <option value="">Seleccionar Tipo de Documento</option>
                    <?php
                    $sql="SELECT id_tipo_documento, nombre FROM tipo_documento ORDER BY nombre";
                    $resultado=mysqli_query($conexion,$sql);

                    while($row = $resultado->fetch_assoc()) { ?>
                      <option value="<?php echo $row['id_tipo_documento']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Documento</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" placeholder="documento" name="documento" required>
                  </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" placeholder="nombre" name="nombre" required>
                  </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" class="form-control" id="exampleInputCodigo" placeholder="apellido" name="apellido" required>
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