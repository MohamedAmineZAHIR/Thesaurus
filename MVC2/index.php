
<?php
include_once 'global/init.php';
//include_once "global/init.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=”Content-Language” content=”fr” charset=UTF-8” />
		<title>Projet BDD</title>
		<link rel="stylesheet" type="text/css" media="screen" href="ecran.css" />
	</head>

	<body>


<?php

//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'Controleur.php'))
{
    include_once 'controleurs/'.$_GET['page'].'Controleur.php';
}
else
{
	include_once 'controleurs/accueilControleur.php';
}

?>
	</body>
</html>