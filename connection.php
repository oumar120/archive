<?php
$bdd=new PDO('mysql:host=localhost;dbname=archive','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
if (!$bdd) {
        echo "connexion impossible";
	exit();
}
?>