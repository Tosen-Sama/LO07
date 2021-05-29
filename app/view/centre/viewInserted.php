
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results > 0) {
        if(!$existence){
            echo ("<h3>La nouvelle recolte a été ajouté </h3>");
        }else{
            echo ("<h3>La recolte a été mise à jour </h3>");
        }
    } else {
        if(!$existence){
          echo ("<h3>Problème d'insertion d'une recolte</h3>");
         }else{
          echo ("<h3>Problème de modification d'une recolte</h3>");
        }
    }
    
    echo("<ul>");
    echo ("<li>vin_id = " . $vin_id . "</li>");
    echo ("<li>producteur_id = " . $prod_id . "</li>");
    echo ("<li>quantite = " . htmlspecialchars($_GET['quantite']) . "</li>");
    echo("</ul>");

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    