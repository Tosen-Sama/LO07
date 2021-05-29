
<!-- ----- début viewId -->
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      // $results contient un tableau avec la liste des clés.
      ?>

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='<?php echo($target); ?>'>
        <label for="vin_id">Selectionnez un vin : </label><br/>
        <select name="vin_id" id="vin_id" ><?php foreach ($liste_vin as $vin) {
                    $option_value = $vin[0]." : ".$vin[1]." : ".$vin[2];
                    echo("<option> $option_value </option>");
                      }
                ?>
        </select><br/>                          
        <label for="producteur_id">Selectionnez un producteur : </label><br/>
        <select name="producteur_id" id="producteur_id" ><?php foreach ($liste_producteur as $producteur) {
                    $option_value = $producteur[0]." : ".$producteur[1]." : ".$producteur[2]." : ".$producteur[3];
                    echo("<option> $option_value </option>");
                      }
                ?>
        </select><br/>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewId -->