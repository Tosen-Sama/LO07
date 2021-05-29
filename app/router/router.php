
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerVaccin.php');
require ('../controller/ControllerCentre.php');
require ('../controller/ControllerCave.php');




// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

unset($param["action"]);
$args = $param ;

// --- Liste des méthodes autorisées
switch ($action) {
 case "vaccinReadAll" :
 case "vaccinReadOne" :
 case "vaccinReadId" :
 case "vaccinCreate" :
 case "vaccinCreated" :
 case "vaccinUpdate" :
 case "vaccinUpdated" :     
  ControllerVaccin::$action($args);
  break;


 case "centreReadAll" :
 case "centreReadOne" :
 case "centreReadId" :
 case "centreCreate" :
 case "centreCreated" :    
  ControllerCentre::$action($args);
  break;

 case "producteurReadAll" :
 case "producteurReadOne" :
 case "producteurReadId" :
 case "producteurRegionReadAll" :
 case "producteurCountByRegion" :
 case "producteurCreate" :
 case "producteurCreated" :
 case "producteurDeleted" :
  ControllerProducteur::$action($args);
  break;

case "mesPropositions" :
  ControllerCave::$action();
  break;

case "recolteReadAll" :
 case "recolteReadOne" :
 case "recolteReadId" :
 case "recolteCreateUpdate" :
 case "recolteCreatedUpdated" :
 case "recolteDeleted" :
  ControllerRecolte::$action($args);
  break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerCave::$action();
}
?>
<!-- ----- Fin Router1 -->

