<?php
session_start();
if (empty($_SESSION['id']) ){
  header('index.php');
  exit();
}

        if (isset($_GET['m']) and !empty($_GET['m'])){
          $m=$_GET['m'];
         include('connection.php');
     $req=$bdd->query('select * from user where id='.$m);
         $donnee=$req->fetch(); 
      }
     if (isset($_POST['modifier'])) {
  $m=$_POST['m'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login=$_POST['login'];
$password=$_POST['password'];
include('connection.php');
$req=$bdd->prepare('update user set prenom=?,nom=?,login=?,password=? where id='.$m);
$req->execute(array($prenom,$nom,$login,$password));
header('location:user.php');
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
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier un Compte!</h1>
              </div>
              <form class="user" action="modifUser.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="hidden" class="form-control form-control-user" value="<?php echo $donnee['id']?>" name="m">
                    <input type="text" class="form-control form-control-user"  value="<?php echo $donnee['prenom']?>" name="prenom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" value="<?php echo $donnee['nom']?>" name="nom">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" value="<?php echo $donnee['login']?>" name="login">
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="password">
                  </div>
                </div>
                <input class="btn btn-primary btn-user btn-block" type="submit" name="modifier" value="modifier">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>












