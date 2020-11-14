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
                <h1 class="h4 text-gray-900 mb-4 text-center"> <i class="fa fa-envelope"></i> Ajouter des données!</h1>
              <hr>
              <form method="post" action="file.php">
                    <div class="form-group">
                    <input type="text" name="nom1" class="form-control form-control-user" placeholder="prenom" required id="nom1">
                  </div>
                <div class="form-group">
              <input type="text" name="nom2" class="form-control form-control-user" placeholder="nom de famille" required id="nom2">
                </div>
                <div class="form-group">
                  <input type="input" name="nom3" class="form-control form-control-user" placeholder="ID migrant" required id="nom3">
                </div>
                 <div class="form-group">
                <input type="text" name="nom4" class="form-control form-control-user"  placeholder="MIMOSA " required id="nom4">
                </div>
                 <div class="form-group">
                <input type="number" name="nom5" class="form-control form-control-user"  placeholder="telephone" required id="nom5">
                </div>
                 <div class="form-group">
                <input type="text" name="nom6" class="form-control form-control-user"  placeholder="sexe(H/F) " required id="nom6">
                </div>
                 <div class="form-group">
                <input type="text" name="nom7" class="form-control form-control-user"  placeholder="region d'origine du migrant " required id="nom7">
                </div>
                 <div class="form-group">
                <input type="text" name="nom8" class="form-control form-control-user"  placeholder="pays hote " required id="nom8">
                </div>
                 <div class="form-group">
                <input type="text" name="nom9" class="form-control form-control-user"  placeholder="assistance fournie " required id="nom9">
                </div>
                 <div class="form-group">
                <input type="text" name="nom10" class="form-control form-control-user"  placeholder="type de conseil a la reintegration fournie" required id="nom10">
                </div>
                 <div class="form-group">
                <input type="text" name="nom11" class="form-control form-control-user"  placeholder="lieu de session " required id="nom11">
                </div>
                 <div class="form-group">
                <input type="date" name="nom12" class="form-control form-control-user"  placeholder="date de session " required id="nom12">
                </div>
                 <div class="form-group">
                <input type="text" name="nom13" class="form-control form-control-user"  placeholder="type de projet " required id="nom13">
                </div>
                 <div class="form-group">
                <input type="text" name="nom14" class="form-control form-control-user"  placeholder="activité " required id="nom14">
                </div>
                 <div class="form-group">
                <input type="number" name="nom15" class="form-control form-control-user"  placeholder="montant " required id="nom15">
                </div>
                 <div class="form-group">
                <input type="text" name="nom16" class="form-control form-control-user"  placeholder="code projet " required id="nom16">
                </div>
                 <div class="form-group">
                <input type="text" name="nom17" class="form-control form-control-user"  placeholder="plan de réintegration " required id="nom17">
                </div>
                 <div class="form-group">
                <input type="text" name="nom18" class="form-control form-control-user"  placeholder="lieu du projet de réintegration " required id="nom18">
                </div>
                 <div class="form-group">
                <input type="text" name="nom19" class="form-control form-control-user"  placeholder="commune du projet de réintegration " required id="nom19">
                </div>
                 <div class="form-group">
                <input type="text" name="nom20" class="form-control form-control-user"  placeholder="région du projet de réintegration " required id="nom20">
                </div>
                 <div class="form-group">
                <input type="text" name="nom21" class="form-control form-control-user"  placeholder="etat de la réintegration " required id="nom21">
                </div>
                <div class="form-group">
                <input type="text" name="nom22" class="form-control form-control-user"  placeholder="responsable " required id="nom22">
                </div> 
              <input type="submit" class="btn btn-primary btn-user btn-block" name="envoyer" value="Envoyer">
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






