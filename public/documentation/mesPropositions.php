 <?php

require ($root . '/app/controller/config.php');
require_once ($root . '/outil/bibliotheque.php');
?>
<!-- ----- debut de la page cave_acceuil -->
<?php include $root . '/app/view/fragment/fragmentCaveHeader.php'; ?>
<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.php';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.php';
    ?>
      
    <?php
  panel_head("Propositions d'amélioration :");
  panel("Proposition 1 : ", "<h4>Nouvelles fonctionnalités</h4>"
          . "<ul>"
          . "<li>Ajouter des fonctionnalités pour pour mettre à jour les informations sur dans les modèles.</li>"
          . "<li>Ajouter des fonctionnalités pour supprimer des informations dans les modèles.</li>"
          . "</ul>");
  
  panel("Proposition 2 : ", "<h4>Compléter nos modèles</h4>"
          . "<ul>"
          . "<li>Exploiter la table RECOLTE de notre base de donnée</li>"
          . "</ul>");
    ?>
  </div>   
  
  
  <?php
  include $root . '/app/view/fragment/fragmentCaveFooter.php';
  ?>

  <!-- ----- fin de la page cave_acceuil -->

