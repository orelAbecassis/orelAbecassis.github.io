
  <!-- Vue pour lister les fleurs
    ================================================== -->

<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <br>
      <thead>  
<?php
  $prixTotal = 0;
  if (comptePanier()>0){
    ?>
    <th>Image</th>     
    <th>Référence</th>
    <th>Libellé</th>
    <th>Prix</th>

    <?php
      if (estVisiteurConnecte()){
        ?>
        <th>Supression du panier</th>
        <?php
      }
    ?>
    </thead>
    <?php
    $i = 0;
    while($i < count($lafleur)){ 
 ?>    
      <tbody>  
      <tr>
        <td align="center"><img class="img-polaroid" src="../images/<?php echo $lafleur[$i]["image"]?>" /></td>  
        <td><?php echo $lafleur[$i]["ref"]?></td>
        <td><?php echo $lafleur[$i]["designation"]?></td>
        <?php $prixTotal+=$lafleur[$i]["prix"]; //Recupere le prix total du panier ?>
        <td align="right"><?php echo $lafleur[$i]["prix"]?></td>
        <?php
          if (estVisiteurConnecte()){
        ?>
            <td><a href="panier.php?ref=<?php echo $lafleur[$i]["ref"]?>">Supprimer du panier</a></td>
        <?php
          }
        ?>
<?php
        $i = $i + 1;
    }
    ?> <table class="table table-bordered table-striped table-condensed">
    <tr><tdbody><td align="right">
    <div style="text-align:right"><?php echo 'Total : '.$prixTotal ?></div></td></tr><?php
  }
  else {
    echo 'Votre panier est vide !';
  }
?>       
       </tbody>       
     </table>    
  </div>
<?php

