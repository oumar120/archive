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
        <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-8">
            <div class="p-5">
                <h1 class="h4 text-gray-900 mb-4 text-center"> <i class="fa fa-envelope"></i> Ajouter un business plan!</h1>
              <hr>
              <form action="file.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Description</label>
                    <input type="text" name="bp1" class="form-control form-control-user" placeholder=" (bp/période de la session)" required>
                  </div>
                  <div class="form-group">
                    <input type="file" name="bp2" class="form-control" required>
                  </div> 
                  <div class="form-group">    
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Envoyer" name="bp">
              </form>
              <hr>
              <?php
               if(isset($_GET['m'])){
                $m=$_GET['m'];
                if($m==1){ ?>
                  <script>
                    alert("Données enregistrées avec succès")
                  </script>
                <?php 
                }else{ ?>
          <script>
            alert("Erreur données non enregistrées");
          </script>
             <?php } }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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




