<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- summernote PARA EL DISEÑO DE TAREA TEXT-->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Sweet Alert Script -->
  <link rel="stylesheet" href="../plugins/sweetalert/sweetalert.css">
  <!-- Sweet Alert Script -->
  <link href="../plugins/sweetalert/sweetalert.min.js">
  <link href="../plugins/sweetalert/query.js">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rumbosexpress</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          <img src="../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Añadir iconos para los enlaces con la clase .nav-icon
               con la font-awesome o cualquier otra biblioteca de iconos de fuente -->
          <li class="nav-item has-treeview">
            <a href="../index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          
            <li class="nav-item has-treeview">
            <a href="../usuarios/usuarios.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios                
              </p>
            </a>
          </li>           
          
          
          
          <li class="nav-item has-treeview">
            <a href="../productos/productos.php" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Productos
              </p>
            </a>
          </li>   

          <li class="nav-item has-treeview">
            <a href="../guia/guia.php" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Guia
              </p>
            </a>
          </li>

        <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Accesos
                <span class="right badge badge-danger">Nuevo</span>
              </p>
            </a>
          </li> -->
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>