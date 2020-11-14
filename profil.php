<?php
session_start();
if (empty($_SESSION['id']) ){
  header('location:index.php');
  exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Application de gestion</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <?php 
include('menu.html');
     ?>
          
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-3 col-lg-3">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body">
         <?php
         include('connection.php');
         $req=$bdd->query("select * from user where id=".$_SESSION['id']);
         $donnee=$req->fetch()
         ?>
          <table width="100" border="0" cellpadding="2">
  <tr>
    <th scope="row">Prenom:</th>
    <td>&nbsp;</td>
    <td><?php echo $donnee['prenom'];?></td>
  </tr>
  <tr>
    <th scope="row">Nom:</th>
    <td>&nbsp;</td>
    <td><?php echo $donnee['nom'];?></td>
  </tr>
  <tr>
    <th scope="row">Login:</th>
    <td>&nbsp;</td>
    <td><?php echo $donnee['login'];?></td>
  </tr>
  <tr>
    <th scope="row">Password:</th>
    <td>&nbsp;</td>
    <td><?php echo $donnee['password'];?></td>
  </tr>
</table>
                    
                  </div>
                </div>
              </div>
            </div>
             
        <!-- /.container-fluid -->
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

  <!-- Bootstrap core JavaScript-->
  
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php 
if ($_SESSION['login']!=='admin') {
?>
  <script >
    document.getElementById('compte').disabled=true;
  </script>
<?php } ?>
</body>

</html>
