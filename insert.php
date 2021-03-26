
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

	if (isset($_REQUEST['ok'])) {
		$xml=new DOMDocument("1.0","utf-8");
		$xml->load("envoyer.xml");
		$nbre=intval($xml->getElementsByTagname("restaurant")->length);
		echo $nbre;
	
		$rootTag=$xml->getElementsByTagname("restaurants")->item(0);

		$restaurant=$xml->createElement("restaurant");
		$restaurant->setAttribute('validation', "false");

		$coordonnees=$xml->createElement("coordonnees");


$nom=$xml->createElement("nom",$_REQUEST['nom']);
$adresse=$xml->createElement("adresse",$_REQUEST['adresse']);
$nomrestaurateur=$xml->createElement("nomrestaurateur",$_REQUEST['nomr']);
$descsriptioncord=$xml->createElement("descsription");

$paragraphe=$xml->createElement("paragraphe",$_REQUEST['descriptioncoor']);
$image=$xml->createElement("image",$_REQUEST['urlimage']);
$image->setAttribute('place', $_REQUEST['place']);
//Ajout des coordonnees
$descsriptioncord->appendChild($paragraphe);
$descsriptioncord->appendChild($image);
$coordonnees->appendChild($nom);
$coordonnees->appendChild($adresse);
$coordonnees->appendChild($nomrestaurateur);
$coordonnees->appendChild($descsriptioncord);
//
$restaurant->appendChild($coordonnees);
//
$carte=$xml->createElement("carte");
$plat=$xml->createElement("plat");
$plat->setAttribute('indication', $_REQUEST['indication']);
$descriptionplat=$xml->createElement("description_plat",$_REQUEST['descriptionplat']);
$prix=$xml->createElement("prixplat",$_REQUEST['prixplat']);
$plat->appendChild($descriptionplat);
$plat->appendChild($prix);

//
$carte->appendChild($plat);
$restaurant->appendChild($carte);

//
$listemenu=$xml->createElement("listemenu");
$listemenu->setAttribute('ordre', $_REQUEST['ordre']);
$titre=$xml->createElement("titre",$_REQUEST['titre']);
$descriptionlistemenu=$xml->createElement("description",$_REQUEST['descriptionmneu']);
$prix=$xml->createElement("prix",$_REQUEST['prixmenu']);
$listemenu->appendChild($titre);
$listemenu->appendChild($descriptionlistemenu);
$listemenu->appendChild($prix);
//
$restaurant->appendChild($listemenu);

$rootTag->appendChild($restaurant);
$xml->save("envoyer.xml");
	header('Location: index.php');

	}

	if (isset($_REQUEST['valider'])) {

$xml=simplexml_load_file("envoyer.xml");
  foreach ($xml->restaurant as $value) {
 if($value->coordonnees->nom==$_POST['nomrest']){
 	 $value->attributes()->{'validation'}="true";
	}}
	file_put_contents("envoyer.xml", $xml->saveXML());
		header('Location: gestionnaire.php');

}
	
	
	?>
</body>
</html>