<?php 
include_once '../include/Header.php';
include_once '../config/conexion.php';
include '../include/mensajes.php';
$conexion=conexion();

$sql = "SELECT id_usuarios, concat(td.acronimo,' ',u.documento), concat(u.nombre,' ',u.apellido)  
        FROM usuarios u, tipo_documento td 
        WHERE u.id_tipo_documento = td.id_tipo_documento";
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
            <h3 class="card-title">Usuarios</h3>
            
            <button type="button" class="btn btn-primary" onClick="location.href='nuevo_usuario.php'" style="float: right;"><i class="fa fa-plus"></i> Nuevo Usuario</button>
            
          </div>
          <!-- /.card-header -->
        
          <!-- /.card-body -->
           <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Documento</th>
                  <th>Nombre y Apellido</th>
                  <th>Acciones </th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  while ($ver=mysqli_fetch_row($result)) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $ver[1]; ?></td>
                  <td><?php echo $ver[2]; ?></td>
                  <td>
                    <!--BOTON DE VER USUARIO
                    <a href="ver_blog.php?id_blog=<?php echo $ver[0]; ?>" data-toggle="tooltip" data-placement="top" title="Ver Propiedad">
                      <button type="button" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </button>
                    </a>
                     -->
                     
                    <!--BOTON DE EDITAR USUARIO -->
                    <a href="modificar_usuario.php?id_usuarios=<?php echo $ver[0]; ?>" data-toggle="tooltip" data-placement="top" title="Editar">
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
                   <th>Documento</th>
                  <th>Nombre y Apellido</th>
                  <th>Acciones </th>
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
  function confirmar($id_usuarios)
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
    location.href ="php/eliminar.php?id_usuarios="+$id_usuarios;
   
  }
});
}

</script>


<?php include_once '../include/Footer.php' ?>


