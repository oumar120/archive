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

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body id="page-top">


        <!-- Topbar -->
        <nav class=" navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         <?php 
          include('menu.html');
          ?>
        </nav>
        <!-- End of Topbar -->

  <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed" id="integration" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>description</th>
                      <th>responsable</th>
                      <th >dossier</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
  
  <div class="modal fade" id="modalintegration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div id="reponse" class="p-3">
                                   
             </div> 
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" aria-label="close" class="btn btn-primary">fermer</button>
        </div>                   
        </div>

    </div>
</div>

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="form2">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">description:</label>
                    <input type="text" class="form-control" id="nom1">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">responsable</label>
                    <input type="text" class="form-control" id="nom2">
                    </div> 
                    </div>    
                </div>                          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="submit"  class="btn btn-dark">Sauvegarder</button>
            </div>
        </form>    
        </div>
    </div>
</div> 
  

  <!-- Bootstrap core JavaScript-->
 <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap4.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.bootstrap4.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.min.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
  <?php 
if ($_SESSION['login']!=='admin') {
?>
 <script src="js/main.js"></script>
  <script >
    document.getElementById('compte').disabled=true;
  </script>
 
<?php } 
else { ?>
  <script src="js/main1.js"></script>
<?php } ?>
</body>

</html>




