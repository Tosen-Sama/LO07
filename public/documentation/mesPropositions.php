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
   panel_head("Le point de vue global sur notre projet :");
  
  panel("Le cycle de vie de notre projet : ", 
          . "<ul>"
          . "<li>le cadrage : la définition des besoins et des objectifs de notre site</li>"
          . "<li>la conception : choix des outils , repartition des taches , planning de travail </li>"
        . "<li>conception : avec l'utilisation d'un outil qui nous a facilité le travail (<b>Le modèle MVC</b>) </li>"
          . "</ul>");
  
  panel("Les améliorations effectuées : ", "Pour rendre ce projet encore plus performant qu'il ne l'était déjà nous avons ajouter à celui-ci certaines innovations : "
          . "<ul>"
          . "<li> la mise à jour des informations sur un patient</li>"
         . "<li> la mise à jour des informations sur un centre</li>"
         . "<li> la mise à jour des informations sur un stock de vaccin</li>"
          . "</ul>");
   panel("Notre avis :",
         ."Nous avons personnelement trouvé ce sujet très interéssant parceque:" 
         . "<p> premièrement , il parle d'un phénomène que nous vivons actuellement dans le monde : celui de la vaccination du COVID-19 , donc c'est un sujet qui touche à l'acutalité </p>"
         . "<p> Deuxièmement , ce sujet nous permet d'avoir une idée de comment ça se passe dans les centres de vaccination ( comment se passe la geston des vaccins , la gestion des patient , des stocks de vaccin...) , ce qui est très bénéfique pour notre culture personnelle.</p>"
         ."<p>Et troisièmement nous avons réelement apprécié la manière dont c'est déroulé l'UE car au vue des multiples DMs que nous avons  eu à traiter tout au long du semestre , cela a été très simple pour nous de réaliser ce projet qui était juste le condensé de tout les devoirs déjà remis</p>");
           "<br>
           <br>"
           
           "<h5><b><i>Nous vous remercions ;) </h5></b></i>" 
   ?>
  </div>   
  
  
  <?php
  include $root . '/app/view/fragment/fragmentCaveFooter.php';
  ?>

  <!-- ----- fin de la page cave_acceuil -->

