<!-- ----- début fragmentCaveMenu -->

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="router.php?action=CaveAccueil">Yann Kevin & Jeff Jordan</a>
    </div>
    <ul class="nav navbar-nav">
        
      <?php
      addDropdownMenuItem("Gestion des vaccins",array(
          array("action"=>"vaccinReadAll","label"=>"Liste des vaccins"),
          array("action"=>"vaccinCreate","label"=>"Ajout d'un vaccin"),
          array("action"=>"vaccinUpdate","label"=>"Mise à jour d'un vaccin")
      ));

      addDropdownMenuItem("Gestion des centres",array(
          array("action"=>"centreCreate","label"=>"Ajout d'un centre"),
          array("action"=>"centreReadAll","label"=>"Liste des centres")
      ));
      
      addDropdownMenuItem("Gestion des patients",array(
          array("action"=>"patientCreate","label"=>"Ajout d'un patient"),
          array("action"=>"patientReadAll","label"=>"Liste des patients")
      ));
      
      addDropdownMenuItem("Gestion des stocks",array(
          array("action"=>"stockReadAllByVaccin","label"=>"Liste des centres avec le nombre de dose de chaque vaccin"),
          array("action"=>"stockReadAllGlobal","label"=>"Nombre global de doses des centres"),
          array("action"=>"stockDosesAdd","label"=>"Attribution d'un vaccin pour un centre")
       
      ));
   
      ?>
     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">PRODUCTEUR <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router.php?action=producteurReadAll">Liste des producteurs</a></li>
          <li><a href="router.php?action=producteurReadId&target=producteurReadOne">Sélection d'un producteur par son id</a></li>
          <li><a href="router.php?action=producteurCreate">Insertion d'un producteur</a></li>
          <li><a href="router.php?action=producteurRegionReadAll">Liste sans doublon des régions</a></li>
          <li><a href="router.php?action=producteurCountByRegion">Nombre de producteurs par région</a></li>
          <li><a href="router.php?action=producteurReadId&target=producteurDeleted">Suppression d'un producteur par son id</a></li>

        </ul>
      </li> 
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">RECOLTE <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router.php?action=recolteReadAll">Liste des recoltes</a></li>
          <li><a href="router.php?action=recolteReadId&target=recolteReadOne">Sélection d'une recolte</a></li>
          <li><a href="router.php?action=recolteCreateUpdate">Insertion/mise à jour d'une recolte</a></li>     
          <li><a href="router.php?action=recolteReadId&target=recolteDeleted">Suppression d'une recolte</a></li>
        </ul>
      </li> 
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">DOCUMENTATION <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router.php?action=mesPropositions">Proposition d'amélioration</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- ----- fin fragmentCaveMenu -->

