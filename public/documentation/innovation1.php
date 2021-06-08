
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.php');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.php';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.php';
      ?>

      <?php
  panel_head("Documentation innovation 1 : Mettre à jour / Corriger les informations d'un patient");
  
  panel("Problématique :", "<strong>Nous avons très vite fait le constat que l'application telle qu'elle nous est demandée ne permet pas de corriger ou de modifier les informations d'un patient en cas "
          . "d'erreur. </strong><br/><br/>"
          . "Cette innovation permet à un opérateur d'exploiter la puissance de notre outil pour effectuer ces modifications plutôt que de devoir accéder à la base de donnée pour effectuer des modifications sur des enregistrements.<br/><br/>"
          . "En effet, un accès direct à la base de donnée pour effectuer ce genre d'opérations est une porte ouverte aux erreurs de manipulation sur la base de données et aux suppressions accidentelles de données.<br/><br/>"
          . "Par ailleurs, cette innovation dispense l'opérateur (infirmier/medecin/secretaire) d'avoir les connaissances nécessaires en base de données pour pouvoir modifier des enregistrements en cas de changement."
          );
  
  panel("Implémentation :", "<h4>Cette nouvelle fonctionnalité s'intègre parfaitement au modèle MVC existant sur lequel repose notre application.</h4>"
          . "Pour rendre opérationnelle cette fonctionnalité, il a fallut apporter les ajouts suivants à l'existant :"
          . "<ul>"
          . "<li>dans router.php : ajouter l'option mise à jour d'un patient (<strong>patientUpdate & patientUpdated</strong>) </li>"
          . "<li>dans ControllerPatient.php : implémenter les méthodes statiques : "
          . "    <ul type='cercle'>"
          . "      <li> <strong>patientUpdate</strong> : recupère le patient dont on souhaite modifier les informations.</li>"
          . "      <li> <strong>patientSetInfos</strong>: procède à la mise à jour dans le modèle .</li>"
          . "      <li> <strong>patientUpdated</strong>: Recupère et affiche le resultat du traitement .</li>"
          . "    </ul>"
          . "<li>création de toutes les vues nécessaires.</li>"
          . "</ul>");
  
  
    ?>
    
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.php'; ?>

  <!-- ----- fin viewAll -->
  
  
  