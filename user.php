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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

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

        <div class="container">
          <div class="col-lg-7">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Prenom</th>
                      <th>Nom</th>
                      <th>Login</th>
                      <th>Password</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
      <?php
       include ("connection.php");
       $req=$bdd->query('select * from user order by id desc' );
     while ($donnee=$req->fetch()) {
     ?>
                  <tbody>
                    <tr>
                      <td><?php echo $donnee['prenom'];?></td>
                      <td><?php echo $donnee['nom'];  ?></td>
                      <td><?php echo $donnee['login'];  ?></td>
                      <td><?php echo $donnee['password'];  ?></td>
  <td>
    <a href="modifUser.php?m=<?php echo $donnee['id']?>"><button class="btn btn-info">Modifier</button></a>
  </td>
    <td>
   <a href="user.php?s=<?php echo $donnee['id']?>" onClick="return confirm('voulez-vous vraiment supprimer ce compte?')">
  <button class="btn btn-danger">Supprimer</button></a>
  </td>
                    </tr>
                    
                  </tbody>
                  <?php } ?>
                </table>
              </div>
            </div>
        <?php
if (!empty($_GET['s'])) {
  $s=$_GET['s'];
  include('connection.php');
$bdd->query('delete from user where id='.$s);
}
?>
  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>





