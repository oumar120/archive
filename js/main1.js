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
        {"data": "responsable"},
        {"defaultContent":"<div class='text-center'><button class='btn btn-info btn-sm edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm delete'><i class='fa fa-trash'></i></button></div>"}
    ],
    "language": {
                "url": "langue.json"
            }
}); 
$(document).on("click", ".edit", function(){            
    option = 2;//editar
    fila = $(this).closest("tr");          
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID                
    nom1 = fila.find('td:eq(1)').text();
    nom2 = fila.find('td:eq(2)').text();
    nom3 = fila.find('td:eq(3)').text();
    nom4 = fila.find('td:eq(4)').text();
    nom5 = fila.find('td:eq(5)').text();
    nom6 = fila.find('td:eq(6)').text();
    nom7 = fila.find('td:eq(7)').text();
    nom8 = fila.find('td:eq(8)').text();
    nom9 = fila.find('td:eq(9)').text();
    nom10 = fila.find('td:eq(10)').text();
    nom11 = fila.find('td:eq(11)').text();
    nom12 = fila.find('td:eq(12)').text();
    nom13 = fila.find('td:eq(13)').text();
    nom14 = fila.find('td:eq(14)').text();
    nom15 = fila.find('td:eq(15)').text();
    nom16 = fila.find('td:eq(16)').text();
    nom17 = fila.find('td:eq(17)').text();
    nom18 = fila.find('td:eq(18)').text();
    nom19 = fila.find('td:eq(19)').text();
    nom20 = fila.find('td:eq(20)').text();
    nom21 = fila.find('td:eq(21)').text();
     nom22 = fila.find('td:eq(22)').text();
    $("#nom1").val(nom1);
    $("#nom2").val(nom2);
    $("#nom3").val(nom3);
    $("#nom4").val(nom4);
    $("#nom5").val(nom5);
    $("#nom6").val(nom6);
    $("#nom7").val(nom7);
    $("#nom8").val(nom8);
    $("#nom9").val(nom9);
    $("#nom10").val(nom10);
    $("#nom11").val(nom11);
    $("#nom12").val(nom12);
    $("#nom13").val(nom13);
    $("#nom14").val(nom14);
    $("#nom15").val(nom15);
    $("#nom16").val(nom16);
    $("#nom17").val(nom17);
    $("#nom18").val(nom18);
    $("#nom19").val(nom19);
    $("#nom20").val(nom20);
    $("#nom21").val(nom21);
    $("#nom22").val(nom22);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("modifier la ligne"+' '+id);    
    $('#modalCRUD').modal('show');       
});

$('#form').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nom1 = $.trim($('#nom1').val());    
    nom2 = $.trim($('#nom2').val());
    nom3 = $.trim($('#nom3').val());    
    nom4 = $.trim($('#nom4').val());
    nom5= $.trim($("#nom5").val());
    nom6 = $.trim($('#nom6').val());    
    nom7 = $.trim($('#nom7').val());
    nom8 = $.trim($('#nom8').val());    
    nom9 = $.trim($('#nom9').val());
    nom10= $.trim($("#nom10").val());    
    nom11 = $.trim($('#nom11').val());
    nom12 = $.trim($('#nom12').val());    
    nom13 = $.trim($('#nom13').val());
    nom14= $.trim($("#nom14").val());   
    nom15 = $.trim($('#nom15').val());
    nom16 = $.trim($('#nom16').val());    
    nom17 = $.trim($('#nom17').val());
    nom18= $.trim($("#nom18").val());
    nom19 = $.trim($('#nom19').val());    
    nom20 = $.trim($('#nom20').val());
    nom21 = $.trim($('#nom21').val()); 
    nom22 = $.trim($('#nom22').val());
        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, 
              nom1:nom1,
              nom2:nom2,
              nom3:nom3,
              nom4:nom4,
              nom5:nom5,
              nom6:nom6,
              nom7:nom7,
              nom8:nom8,
              nom9:nom9,
              nom10:nom10,
              nom11:nom11,
              nom12:nom12,
              nom13:nom13,
              nom14:nom14,
              nom15:nom15,
              nom16:nom16,
              nom17:nom17,
              nom18:nom18,
              nom19:nom19,
              nom20:nom20,
              nom21:nom21,
              nom22:nom22,
              option:option 
              },    
          success: function(data) {
            dataTable.ajax.reload(null, false);
           }
        });              
    $('#modalCRUD').modal('hide');                                 
});
//B9rrar
$(document).on("click", ".delete", function(){
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;    
    option = 3; //eliminar        
    var reponse = confirm("etes-vous certain(e) de vouloir continuer?");                
    if (reponse) {            
        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {option:option, id:id},    
          success: function() {
              dataTable.row(fila.parents('tr')).remove().draw();                  
           }
        });  
    }
 });

// la gestion de la table formation

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
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder1'><i class='fa fa-folder-open'></i></button><button class='btn btn-info btn-sm edit1'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm delete1'><i class='fa fa-trash'></i></button></div>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});  

$(document).on("click", ".edit1", function(){            
    option1 = 2;//editar
    fila = $(this).closest("tr");          
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID                
    nom1 = fila.find('td:eq(1)').text();
    nom2 = fila.find('td:eq(2)').text();
    nom3 = fila.find('td:eq(3)').text();
    nom4 = fila.find('td:eq(4)').text();
    $("#nom1").val(nom1);
    $("#nom2").val(nom2);
    $("#nom3").val(nom3);
    $("#nom4").val(nom4);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("modifier la ligne"+' '+id);    
    $('#modalCRUD').modal('show');       
});

$('#form1').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nom1 = $.trim($('#nom1').val());    
    nom2 = $.trim($('#nom2').val());
    nom3 = $.trim($('#nom3').val());    
    nom4 = $.trim($('#nom4').val()); 

        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, 
              nom1:nom1,
              nom2:nom2,
              nom3:nom3,
              nom4:nom4,
              option1:option1 
              },    
          success: function(data) {
            dataTable1.ajax.reload(null, false);
           }
        });              
    $('#modalCRUD').modal('hide');                                 
});
//B9rrar
$(document).on("click", ".delete1", function(){
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;    
    option1=3; //eliminar        
    var reponse = confirm("etes-vous certain(e) de vouloir continuer?");                
    if (reponse) {            
        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {option1:option1, id:id},    
          success: function() {
              dataTable1.row(fila.parents('tr')).remove().draw();                  
           }
        });  
    }
 });
//  fin de la gestion de la table formation
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
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder2'><i class='fa fa-folder-open'></i></button><button class='btn btn-info btn-sm edit2'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm delete2'><i class='fa fa-trash'></i></button></div>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});

$(document).on("click", ".edit2", function(){            
    option2 = 2;//editar
    fila = $(this).closest("tr");          
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID                
    nom1 = fila.find('td:eq(1)').text();
    nom2 = fila.find('td:eq(2)').text();
    $("#nom1").val(nom1);
    $("#nom2").val(nom2);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("modifier la ligne"+' '+id);    
    $('#modalCRUD').modal('show');       
});

$('#form2').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nom1 = $.trim($('#nom1').val());    
    nom2 = $.trim($('#nom2').val()); 

        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, 
              nom1:nom1,
              nom2:nom2,
              option2:option2 
              },    
          success: function(data) {
            dataTable2.ajax.reload(null, false);
           }
        });              
    $('#modalCRUD').modal('hide');                                 
});
//B9rrar
$(document).on("click", ".delete2", function(){
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;    
    option2 = 3; //eliminar        
    var reponse = confirm("etes-vous certain(e) de vouloir continuer?");                
    if (reponse) {            
        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {option2:option2, id:id},    
          success: function() {
              dataTable2.row(fila.parents('tr')).remove().draw();                  
           }
        });  
    }
 });
//fin de la table reintegration
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
         {"defaultContent": "<div class='text-center'><button class='btn btn-primary btn-sm btnFolder3'><i class='fa fa-file'></i></button></button><button class='btn btn-info btn-sm edit3'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm delete3'><i class='fa fa-trash'></i></button></div>"}
      
    ],
    "language": {
                "url": "langue.json"
            }
});

$(document).on("click", ".edit3", function(){            
    option3 = 2;//editar
    fila = $(this).closest("tr");          
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID                
    nom1 = fila.find('td:eq(1)').text();
    $("#nom1").val(nom1);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("modifier la ligne"+' '+id);    
    $('#modalCRUD').modal('show');       
});

$('#form3').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nom1 = $.trim($('#nom1').val());     

        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, 
              nom1:nom1,
              option3:option3
              },    
          success: function(data) {
            dataTable3.ajax.reload(null, false);
           }
        });              
    $('#modalCRUD').modal('hide');                                 
});
//B9rrar
$(document).on("click", ".delete3", function(){
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;    
    option3 = 3; //eliminar        
    var reponse = confirm("etes-vous certain(e) de vouloir continuer?");                
    if (reponse) {            
        $.ajax({
          url: "./file.php",
          type: "POST",
          datatype:"json",    
          data:  {option3:option3, id:id},    
          success: function() {
              dataTable3.row(fila.parents('tr')).remove().draw();                  
           }
        });  
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