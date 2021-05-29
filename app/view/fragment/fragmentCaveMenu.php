
<!-- ----- début fragmentCaveMenu -->

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="router2.php?action=CaveAccueil">Jeff TCHELONG</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">VIN <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=vinReadAll">Liste des vins</a></li>
          <li><a href="router2.php?action=vinReadId&target=vinReadOne">Sélection d'un vin par son id</a></li>
          <li><a href="router2.php?action=vinCreate">Insertion d'un vin</a></li>     
          <li><a href="router2.php?action=vinReadId&target=vinDeleted">Supression d'un vin</a></li>
        </ul>
      </li>   
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">PRODUCTEUR <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=producteurReadAll">Liste des producteurs</a></li>
          <li><a href="router2.php?action=producteurReadId&target=producteurReadOne">Sélection d'un producteur par son id</a></li>
          <li><a href="router2.php?action=producteurCreate">Insertion d'un producteur</a></li>
          <li><a href="router2.php?action=producteurRegionReadAll">Liste sans doublon des régions</a></li>
          <li><a href="router2.php?action=producteurCountByRegion">Nombre de producteurs par région</a></li>
          <li><a href="router2.php?action=producteurReadId&target=producteurDeleted">Suppression d'un producteur par son id</a></li>

        </ul>
      </li> 
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">RECOLTE <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=recolteReadAll">Liste des recoltes</a></li>
          <li><a href="router2.php?action=recolteReadId&target=recolteReadOne">Sélection d'une recolte</a></li>
          <li><a href="router2.php?action=recolteCreateUpdate">Insertion/mise à jour d'une recolte</a></li>     
          <li><a href="router2.php?action=recolteReadId&target=recolteDeleted">Suppression d'une recolte</a></li>
        </ul>
      </li> 
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">DOCUMENTATION <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=mesPropositions">Proposition d'amélioration</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- ----- fin fragmentCaveMenu -->
