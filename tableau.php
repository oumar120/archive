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
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
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

  <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed" id="dataTable" width="100%" cellspacing="0">
               <thead>
                    <tr>
                      <th>numéro</th>
                      <th>prénom</th>
                      <th>nom de famille</th>
                      <th>ID migrant</th>
                      <th>MIMOSA</th>
                      <th>téléphone</th>
                      <th>sexe(H/F)</th>
                      <th>région d'origine du migrant</th>
                      <th>pays hote</th>
                      <th>assistance fournie</th>
                      <th>type de conseil à la réintegration fournie</th>
                      <th>lieu de session</th>
                      <th>date de session</th>
                      <th>type de projet</th>
                      <th>activité</th>
                      <th>montant</th>
                      <th>code projet</th>
                      <th>plan de réintegrtion</th>
                      <th>lieu du projet de réintegration</th>
                      <th>commune</th>
                      <th>region</th>
                     <th>état</th>
                     <th>responsable</th>
                     <th id="colonne">actions</th>
                    </tr>
                  </thead>
                </table>
              </div>
                </table>
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
        <form id="form">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">prenom</label>
                    <input type="text" class="form-control" id="nom1">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">nom de famille</label>
                    <input type="text" class="form-control" id="nom2">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">id migrant</label>
                    <input type="text" class="form-control" id="nom3">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">MIMOSA</label>
                        <input type="text" class="form-control" id="nom4">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">tel</label>
                        <input type="text" class="form-control" id="nom5">
                        </div>            
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">sexe</label>
                        <input type="text" class="form-control" id="nom6">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">region</label>
                        <input type="text" class="form-control" id="nom7">
                        </div>            
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">pays</label>
                        <input type="text" class="form-control" id="nom8">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">assistance</label>
                        <input type="text" class="form-control" id="nom9">
                        </div>            
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">type</label>
                        <input type="text" class="form-control" id="nom10">
                        </div>            
                    </div> 
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">lieu</label>
                        <input type="text" class="form-control" id="nom11">
                        </div>            
                    </div> 
                    </div>
                    <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">date</label>
                        <input type="text" class="form-control" id="nom12">
                        </div>            
                    </div> 
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">type de projet</label>
                        <input type="text" class="form-control" id="nom13">
                        </div>            
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">activite</label>
                        <input type="text" class="form-control" id="nom14">
                        </div>            
                    </div>  
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">montant</label>
                        <input type="text" class="form-control" id="nom15">
                        </div>            
                    </div> 
                    </div>
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">code projet</label>
                        <input type="text" class="form-control" id="nom16">
                        </div>            
                    </div> 
                      <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">plan de reintegration</label>
                        <input type="text" class="form-control" id="nom17">
                        </div>            
                    </div>   
                </div>     
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">lieu de projet</label>
                        <input type="text" class="form-control" id="nom18">
                        </div>            
                    </div> 
                      <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">commune</label>
                        <input type="text" class="form-control" id="nom19">
                        </div>            
                    </div>   
                </div>     
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">region</label>
                        <input type="text" class="form-control" id="nom20">
                        </div>            
                    </div> 
                      <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">etat</label>
                        <input type="text" class="form-control" id="nom21">
                        </div>            
                    </div>   
                </div>  
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">responsable</label>
                        <input type="text" class="form-control" id="nom22">              
                </div>                                  
            </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-dark">Sauvegarder</button>
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
  <script >
    document.getElementById('compte').disabled=true;
    document.getElementById('colonne').style.visibility="collapse";
  </script>
  <script src="js/main.js"></script>
<?php } 
else { ?>
  <script src="js/main1.js"></script>
<?php } ?>
</body>

</html>






                  
        