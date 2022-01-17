<?php 

if (isset($_POST['nom']) && $_POST['nom']!="") {
	echo "Bonjour",$_POST['nom'];
}
if(isset($_POST['naissance']) && $_POST['naissance']!="") {
	echo "tu es né(e) le",$_POST['naissance'];
	if(isset($_POST['blague'] && $_POST['blague']!="") {
		echo"et ta blague est",$_POST['blague']!=""
	} 
}
?>


