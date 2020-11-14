<?php
include('connection.php');

$nom1 = (isset($_POST['nom1'])) ? $_POST['nom1'] : '';
$nom2 = (isset($_POST['nom2'])) ? $_POST['nom2'] : '';
$nom3 = (isset($_POST['nom3'])) ? $_POST['nom3'] : '';
$nom4 = (isset($_POST['nom4'])) ? $_POST['nom4'] : '';
$nom5 = (isset($_POST['nom5'])) ? $_POST['nom5'] : '';
$nom6 = (isset($_POST['nom6'])) ? $_POST['nom6'] : '';
$nom7 = (isset($_POST['nom7'])) ? $_POST['nom7'] : '';
$nom8 = (isset($_POST['nom8'])) ? $_POST['nom8'] : '';
$nom9 = (isset($_POST['nom9'])) ? $_POST['nom9'] : '';
$nom10 = (isset($_POST['nom10'])) ? $_POST['nom10'] : '';
$nom11 = (isset($_POST['nom11'])) ? $_POST['nom11'] : '';
$nom12 = (isset($_POST['nom12'])) ? $_POST['nom12'] : '';
$nom13 = (isset($_POST['nom13'])) ? $_POST['nom13'] : '';
$nom14 = (isset($_POST['nom14'])) ? $_POST['nom14'] : '';
$nom15 = (isset($_POST['nom15'])) ? $_POST['nom15'] : '';
$nom16 = (isset($_POST['nom16'])) ? $_POST['nom16'] : '';
$nom17 = (isset($_POST['nom17'])) ? $_POST['nom17'] : '';
$nom18 = (isset($_POST['nom18'])) ? $_POST['nom18'] : '';
$nom19 = (isset($_POST['nom19'])) ? $_POST['nom19'] : '';
$nom20 = (isset($_POST['nom20'])) ? $_POST['nom20'] : '';
$nom21 = (isset($_POST['nom21'])) ? $_POST['nom21'] : '';
$nom22 = (isset($_POST['nom22'])) ? $_POST['nom22'] : '';

$option = (isset($_POST['option'])) ? $_POST['option'] : '';
$option1 = (isset($_POST['option1'])) ? $_POST['option1'] : '';
$option2 = (isset($_POST['option2'])) ? $_POST['option2'] : '';
$option3 = (isset($_POST['option3'])) ? $_POST['option3'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
 if ($option==4){
        $consulter= "SELECT * FROM reintegration";
        $resultat= $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$bdd=null;
}
else if ($option==2) {
    $consulter= "UPDATE reintegration SET prenom='$nom1',nom='$nom2',id_migrant='$nom3',mimosa='$nom4',
                 tel='$nom5',sexe='$nom6',region='$nom7',pays='$nom8',assistance='$nom9',conseil='$nom10',
                 lieu='$nom11',date_session='$nom12',type_projet='$nom13',activite='$nom14',
                 montant='$nom15',code_projet='$nom16',plan_reint='$nom17',lieu_projet='$nom18',
                 commune_reint='$nom19',region_reint='$nom20',etat_reint='$nom21',
                 responsable='$nom22' WHERE id='$id'";
     $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $consulter = "SELECT * FROM reintegration WHERE id='$id' order by id desc ";       
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
}
else if ($option==3) {
    $consulter = "DELETE FROM reintegration WHERE id='$id' ";      
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
}
else if ($option1==2) {
    $consulter= "UPDATE formation SET code='$nom1',responsable='$nom2',nc='$nom3',np='$nom4' WHERE id='$id'";
     $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $consulter = "SELECT * FROM formation WHERE id='$id' order by id desc ";       
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
}
else if ($option1==3) {
    $consulter = "DELETE FROM formation WHERE id='$id' ";      
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
}
else if ($option1==4) {
        $consulter = "SELECT id,code,responsable,nc,np FROM formation";
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$bdd=null;
}
else if($option1==1){
    $req=$bdd->query("select pht,exre,autre from formation where id='$id'");
    $donnee=$req->fetch() ?>
<div class="table-responsive">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <th>pht</th>
                <th>expense_report</th>
                <th>autre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            <td> <a href="formation/dossier1/<?php echo $donnee['pht']; ?>" type="button" class="btn btn-primary" target="_blank" >ouvrir</a></td>
            <td> <a href="formation/dossier2/<?php echo $donnee['exre']; ?>" type="button" class="btn btn-primary" target="_blank" >ouvrir</a></td>
            <td> <a href="formation/dossier3/<?php echo $donnee['autre']; ?>" type="button" class="btn btn-primary" target="_blank" >ouvrir</a></td>
                </tr>
            </tbody>
        </table>
        </div>      
<?php }

else if ($option2==4) {
        $consulter = "SELECT id,description,responsable FROM integration";
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$bdd=null;
}
else if ($option2==2) {
    $consulter= "UPDATE integration SET description='$nom1',responsable='$nom2' WHERE id='$id'";
     $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $consulter = "SELECT * FROM integration WHERE id='$id' order by id desc ";       
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
}
else if ($option2==3) {
    $consulter = "DELETE FROM integration WHERE id='$id' ";      
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
}
else if($option2==1) {
    $req=$bdd->query("select * from integration where id='$id'");
    $donnee=$req->fetch() ?>
<div class="table-responsive">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <th>fichier</th>
                <th>expense_report</th>
                </tr>
            </thead>
            <tbody>
                <tr>
    <td> <a href="integration/<?php echo $donnee['fichier']; ?>" type="button" class="btn btn-primary" 
        target="_blank" >ouvrir</a></td>
            <td> <a href="integration/<?php echo $donnee['expense_report']; ?>" type="button" class="btn btn-primary" target="_blank" >ouvrir</a></td>
                </tr>
            </tbody>
        </table>
        </div>      
<?php }
else if($option3==4){
        $consulter = "SELECT id,description FROM bp";
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$bdd=null;
}
else if ($option3==2) {
    $consulter= "UPDATE bp SET description='$nom1' WHERE id='$id'";
     $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $consulter = "SELECT * FROM bp WHERE id='$id' order by id desc ";       
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
}
else if ($option3==3) {
    $consulter = "DELETE FROM bp WHERE id='$id' ";      
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
}
else {
    $req=$bdd->query("select fichier from bp where id='$id'");
    $donnee=$req->fetch() ?>
<div class="table-responsive">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <th>fichier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            <td> <a href="bp/<?php echo $donnee['fichier']; ?>" type="button" class="btn btn-primary" target="_blank" >ouvrir</a></td>
                </tr>
            </tbody>
        </table>
        </div>      
<?php }
if(isset($_POST['envoyer'])){
        $consulter = "INSERT INTO reintegration (prenom,nom,id_migrant,mimosa,tel,sexe,region,pays,assistance,conseil,lieu,date_session,type_projet,activite,montant,code_projet,plan_reint,lieu_projet,commune_reint,region_reint,etat_reint,responsable
) VALUES('$nom1','$nom2','$nom3','$nom4','$nom5','$nom6','$nom7','$nom8','$nom9','$nom10','$nom11','$nom12','$nom13','$nom14','$nom15','$nom16','$nom17','$nom18','$nom19','$nom20','$nom21','$nom22')";			
        $resultat = $bdd->prepare($consulter);
        $resultat->execute(); 
        if ($resultat) {
	header('location:form.php?m=1');
}else{
	header('location:form.php?m=0');
}
}  
if(isset($_POST['formation'])){
    $form1=$_POST['form1'];
    $form2=$_POST['form2'];
    $form3=$_POST['form3'];
    $form4=$_POST['form4'];
    $ext=pathinfo($_FILES['form5']['name']['extension']);
    $ext1=pathinfo($_FILES['form6']['name']['extension']);
    $ext2=pathinfo($_FILES['form7']['name']['extension']);
    $form5=hash(sha1, session_id().microtime().$ext);
    $form6=hash(sha1, session_id().microtime().$ext1);
    $form7=hash(sha1, session_id().microtime().$ext2);
    // chargement du fichier cv dans repertoire CV
     if (isset($_FILES['form5']) and $_FILES['form5']['error']==0) {
        if (isset($_FILES['form6']) and $_FILES['form6']['error']==0) {
            if (isset($_FILES['form7']) and $_FILES['form7']['error']==0) {
                   move_uploaded_file($_FILES['form5']['tmp_name'],'formation/dossier1/'.$form5);
                   move_uploaded_file($_FILES['form6']['tmp_name'],'formation/dossier2/'.$form6);
                    move_uploaded_file($_FILES['form7']['tmp_name'],'formation/dossier3/'.$form7);
        $consulter = "INSERT INTO formation (code,responsable,nc,np,pht,exre,autre
) VALUES('$form1','$form2','$form3','$form4','$form5','$form6','$form7')";                        
        $resultat = $bdd->prepare($consulter);
        $resultat->execute(); 
    }
}
}
        if ($resultat) {
        header('location:Fformation.php?m=1');
}else{
        header('location:Fformation.php?m=0');
}
}  


if(isset($_POST['integration'])){
    $int1=$_POST['int1'];
    $int2=$_POST['int2'];
    $int3=$_FILES['int3']['name'];
    $int4=$_FILES['int4']['name'];
    if (!empty($int4)) {
    $ext=pathinfo($_FILES['int3']['name']['extension']);
    $ext1=pathinfo($_FILES['int4']['name']['extension']);
    $int3=hash(sha1, session_id().microtime().$ext);
    $int4=hash(sha1, session_id().microtime().$ext1);
    setcookie('file',$int4,time()+365*24*3600);
     if (isset($_FILES['int3']) and $_FILES['int3']['error']==0) {
        if (isset($_FILES['int4']) and $_FILES['int4']['error']==0) {
             move_uploaded_file($_FILES['int3']['tmp_name'],'integration/'.$int3);
              move_uploaded_file($_FILES['int4']['tmp_name'],'integration/'.$int4);
              $result=$bdd->prepare('insert into integration(description,responsable,fichier,expense_report) value(?,?,?,?)');
               $req=$result->execute(array($int1,$int2,$int3,$int4));
            }
        }
     }
     else{

        $ext=pathinfo($_FILES['int3']['name']['extension']);
    $int3=hash(sha1, session_id().microtime().$ext);
     if (isset($_FILES['int3']) and $_FILES['int3']['error']==0) {
             move_uploaded_file($_FILES['int3']['tmp_name'],'integration/'.$int3);
              $result=$bdd->prepare('insert into integration(description,responsable,fichier,expense_report) value(?,?,?,?)');
               $req=$result->execute(array($int1,$int2,$int3,$_COOKIE['file']));
            }
     }
         
        if ($req) {
        header('location:Fintegration.php?m=1');
}else{
        header('location:Fintegration.php?m=0');
}
}

if(isset($_POST['bp'])){
    $bp1=$_POST['bp1'];
    $ext=pathinfo($_FILES['bp2']['name']['extension']);
    $bp2=hash(sha1, session_id().microtime().$ext);
    // chargement du fichier cv dans repertoire CV
     if (isset($_FILES['bp2']) and $_FILES['bp2']['error']==0) {
             move_uploaded_file($_FILES['bp2']['tmp_name'],'bp/'.$bp2);
              $result=$bdd->prepare('insert into bp(description,fichier) value(?,?)');
               $req=$result->execute(array($bp1,$bp2));
        } 
        if ($req) {
        header('location:Fbp.php?m=1');
}else{
        header('location:Fbp.php?m=0');
}  
}

