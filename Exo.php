<?php
session_start();
if(count($_GET)!=0)
{
	if(!empty($_GET['txtNom']))
	{
		$lesParticipants = $_SESSION['lesParticipants'];
		array_push($lesParticipants,$_GET['txtNom']);
		$_SESSION['lesParticipants']=$lesParticipants;
	}
	else
	{
		echo "Erreur : Veuillez saisir un nom";
	}
}
else
{
	$lesParticipants = array();
	$_SESSION['lesParticipants'] = $lesParticipants;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Exo1Page1.php" method="get">
            Nom du participant
            <input type="text" name="txtNom"><br>
            <input type="submit" name="btnAjouter" value="Ajouter">
        </form>
        <form action="Exo1Page2.php" method="post">
            <input type="submit" name="btnAfficher" value="Afficher">
        </form>
    </body>
</html>