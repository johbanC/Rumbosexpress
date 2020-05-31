<?php 
include_once '../include/Header.php';
include_once '../config/conexion.php';
include '../include/mensajes.php';
$conexion=conexion();

$sql = "SELECT g.id_guia, g.numero_guia, g.descripcion, p.nombre_producto, p.total_producto 
        FROM guia g, productos p 
        WHERE g.id_productos = p.id_productos
        ORDER BY g.id_guia DESC";
$result =mysqli_query($conexion, $sql);

$i = 1;
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
      
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Guias</h3>
            
            <button type="button" class="btn btn-primary" onClick="location.href='nueva_guia.php'" style="float: right;"><i class="fa fa-plus"></i> Nueva Guia</button>
            
          </div>
          <!-- /.card-header -->
        
          <!-- /.card-body -->
           <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nro Guia</th>
                  <th>Descripcion</th>
                  <th>Nombre Producto </th>
                  <th>Total</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  while ($ver=mysqli_fetch_row($result)) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $ver[1]; ?></td>
                  <td><?php echo $ver[2]; ?></td>
                  <td><?php echo $ver[3]; ?></td>
                  <td><?php echo $ver[4]; ?></td>
                  <td>
                     
                    <!--BOTON DE EDITAR USUARIO -->
                    <a href="modificar_guia.php?id_guia=<?php echo $ver[0]; ?>" data-toggle="tooltip" data-placement="top" title="Editar">
                      <button type="button" class="btn btn-success">
                        <i class="fa fa-edit"></i>
                      </button>
                    </a>
                    
                    <!--BOTON DE ELIMINAR blog -->
                    <a onclick="confirmar(<?php echo $ver[0] ?>);" data-toggle="tooltip" data-placement="top" title="Eliminar">
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </a>
                    <?php } ?>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nro Guia</th>
                  <th>Descripcion</th>
                  <th>Nombre Producto </th>
                  <th>Total</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
          
        </div>
        <!-- /.card -->

    


        


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  function confirmar($id_guia)
{
   Swal.fire({
  title: 'Seguro quieres eliminar',
  text: "",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar'
}).then((result) => {
  if (result.value) {
    location.href ="php/eliminar.php?id_guia="+$id_guia;
   
  }
});
}

</script>


<?php include_once '../include/Footer.php' ?>


