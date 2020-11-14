$(document).ready(function() {
var option,option1,option2,option3,fila;
option = 4;
option1=4;
option2=4;
option3=4;
dataTable=$('#dataTable').DataTable({  
    "dom" : 'Bfltip',
      "buttons" :[
      'copy','print','excel','pdf'],
    "ajax":{            
        "url": "./file.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{option:option}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "prenom"},
        {"data": "nom"},
        {"data": "id_migrant"},
        {"data": "mimosa"},
        {"data": "tel"},
        {"data": "sexe"},
        {"data": "region"},
        {"data": "pays"},
        {"data": "assistance"},
        {"data": "conseil"},
        {"data": "lieu"},
        {"data": "date_session"},
        {"data": "type_projet"},
        {"data": "activite"},
        {"data": "montant"},
        {"data": "code_projet"},
        {"data": "plan_reint"},
        {"data": "lieu_projet"},
        {"data": "commune_reint"},
        {"data": "region_reint"},
        {"data": "etat_reint"},
        {"data": "responsable"}
    ],
    "language": {
                "url": "langue.json"
            }
});  

dataTable1=$('#formation').DataTable({ 
    "dom" : 'Bfltip',
      "buttons" :[
      'copy','print','excel','pdf'],
    "ajax":{            
        "url": "./file.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{option1:option1}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "code"},
        {"data": "responsable"},
        {"data": "nc"},
        {"data": "np"},
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder1' id='boutton'><i class='fa fa-folder-open'></i></button></div>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});  

dataTable2=$('#integration').DataTable({ 
    "dom" : 'Bfltip',
      "buttons" :[
      'copy','print','excel','pdf'],
    "ajax":{            
        "url": "./file.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{option2:option2}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
         {"data":"description"},
        {"data": "responsable"},
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder2'><i class='fa fa-folder-open'></i></button>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});

dataTable3=$('#bp').DataTable({ 
    "dom" : 'Bfltip',
      "buttons" :[
      'copy','print','excel','pdf'],
    "ajax":{            
        "url": "./file.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{option3:option3}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
         {"data":"description"},
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder3'><i class='fa fa-file'></i></button>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});
$(document).on("click", ".btnFolder1", function(){             
    fila = $(this).closest("tr");            
    id = fila.find('td:eq(0)').text();
    option1=1;
 $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"html",    
          data:  {id:id,
                 option1:option1  
              },
     success: function(data) {
            document.getElementById('reponse').innerHTML=data;
           }
    });
  $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-footer").css("background-color","#007bff");
    $(".modal-title").text("informations complementaires");
$('#modalformation').modal('show');
});

$(document).on("click", ".btnFolder2", function(){             
    fila = $(this).closest("tr");            
    id = fila.find('td:eq(0)').text();
    option2=1;
 $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"html",    
          data:  {id:id,
                 option2:option2 
              },
     success: function(data) {
            document.getElementById('reponse').innerHTML=data;
           }
    });
  $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-footer").css("background-color","#007bff");
    $(".modal-title").text("informations complementaires");
$('#modalintegration').modal('show');
});

$(document).on("click", ".btnFolder3", function(){             
    fila = $(this).closest("tr");            
    id = fila.find('td:eq(0)').text();
    option3=1;
 $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"html",    
          data:  {id:id,
                 option3:option3  
              },
     success: function(data) {
            document.getElementById('reponse').innerHTML=data;
           }
    });
  $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-footer").css("background-color","#007bff");
    $(".modal-title").text("informations complementaires");
$('#modalbp').modal('show');      
});
}); 