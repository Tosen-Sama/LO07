
<!-- ----- debut ControllerCave -->
<?php
//require_once '../model/ModelCave.php'; 

class ControllerCave {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerCave : caveAccueil : vue = $vue");
  require ($vue);
 }
 
 public static function mesPropositions() {
     include 'config.php';
  $vue = $root . '/public/documentation/mesPropositions.php';
  //if (DEBUG)
   echo ("ControllerCave : mesPropositions : vue = $vue");
  require ($vue);
 }
 
 public static function innovation1() {
     include 'config.php';
  $vue = $root . '/public/documentation/innovation1.php';
  //if (DEBUG)
   echo ("Documentation : Innovation : vue = $vue");
  require ($vue);
 }

  public static function innovation2() {
     include 'config.php';
  $vue = $root . '/public/documentation/innovation2.php';
  //if (DEBUG)
   echo ("Documentation : Innovation : vue = $vue");
  require ($vue);
 }
 
  public static function innovation3() {
     include 'config.php';
  $vue = $root . '/public/documentation/innovation3.php';
  //if (DEBUG)
   echo ("Documentation : Innovation : vue = $vue");
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerCave -->


