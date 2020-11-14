<?php
session_start();
if (empty($_SESSION['id']) ){
  header('location:../index.php');
  exit();
}
        if (isset($_GET['m']) and !empty($_GET['m'])){
          $m=$_GET['m'];
         include('connection.php');
     $req=$bdd->query('select * from integration where id='.$m);
         $donnee=$req->fetch(); 
      }
     if (isset($_POST['modifier'])) {
  $m=$_POST['m'];
  include('connection.php');
$description=$_POST['description'];
$responsable=$_POST['responsable'];
$file=$_FILES['fichier']['name'];
 move_uploaded_file($_FILES['fichier']['tmp_name'],'../integration/'.$file);

$req=$bdd->prepare('update integration set description=?,responsable=? expense_report=? where id='.$m);
$req->execute(array($description,$responsable,$file));
header('location:Tint.php');
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

  <title>Incription</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier la session!</h1>
              </div>
              <form class="user" action="modifInt.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="hidden" class="form-control form-control-user" value="<?php echo $donnee['id']?>" name="m">
                    <input type="text" class="form-control form-control-user"  value="<?php echo $donnee['description']?>" name="description">
                  </div>
                  <div class="col-sm-6 form-group">
                    <input type="text" class="form-control form-control-user" value="<?php echo $donnee['responsable']?>" name="responsable">
                  </div>
                   <div class="col-sm-6">
                    <label>expense report</label>
                    <input type="file"  name="fichier">
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
</body>

</html>



