
<!-- ----- début viewInsert -->
 
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
        if(isset($view_banner)){
            panel_head($view_banner);
        }
      ?>
      
    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <?php
         if(isset($id)){
             echo "<input type='hidden' name='id' value='$id'>" ;
         }
        ?>
        <input type='hidden' name='action' value='<?php echo"$target"; ?>'>        
        <label for="nom">Nom : </label><input type="text" name='nom' size='75' value='tosen'><br/>                           
        <label for="prenom">Prenom : </label><input type="text" name='prenom' size='75' value='sama'><br/>
        <label for="adresse">Adresse : </label><input type="text" name='adresse' size='75' value='Soul Society'>  <br/>              
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.php'; ?>

<!-- ----- fin viewInsert -->



