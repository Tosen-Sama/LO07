
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
  panel_head("Documentation innovation 3 : Corriger les informations dans le stock");
  
  panel("Problématique :", "<strong>Actuellement l'application permet de gérer le réapprovisionnement des centres en doses de vaccins (augementer les stocks suite à une commande). Cependant il peut arriver que des intempéries, des accidents ou des erreurs créés des pertes de stocks. Il faut donc être capable de repercuter ces pertes dans nos données grace à notre application.</strong><br/><br/>"
          . "Cette innovation permet à un opérateur d'exploiter la puissance de notre outil pour effectuer ces modifications plutôt que de devoir accéder à la base de donnée pour effectuer des modifications sur des enregistrements.<br/><br/>"
          . "En effet, Un accès direct à la base de donnée pour effectuer ce genre d'opérations est une porte ouverte aux erreurs de manipulation sur la base de données et aux suppressions accidentelles de données.<br/><br/>"
          . "Par ailleurs, cette innovation dispense l'opérateur (infirmier/medecin/secretaire) d'avoir les connaissances nécessaires en base de données pour pouvoir modifier des enregistrements en cas de changement."
          );
  
  panel("Implémentation :", "<h4>cette nouvelle fonctionnalité s'intègre bien au modèle MVC existant sur lequel repose notre application.</h4>"
          . "Pour rendre opérationnelle cette fonctionnalité, il a fallut apporter les ajouts suivants à l'existant :"
          . "<ul>"
          . "<li>dans router.php : ajouter l'option mise à jour d'un centre (<strong>stockCreateUpdate & stockCreatedUpdated</strong>) </li>"
          . "<li>dans ControllerStock.php : implémenter les méthodes statiques : "
          . "    <ul type='cercle'>"
          . "      <li> <strong>stockCreateUpdate</strong> : recupère le centre dont on souhaite modifier les informations.</li>"
          . "      <li> <strong>stockCreatedUpdated</strong>:  Procède à la modification du modèle, recupère et affiche le resultat du traitement .</li>"          . "    </ul>"
          . "<li>création de toutes les vues nécessaires.</li>"
          . "</ul>");
  
  
    ?>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.php'; ?>

  <!-- ----- fin viewAll -->
  
  
  