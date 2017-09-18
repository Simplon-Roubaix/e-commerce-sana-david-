<?php include ("section.php");
 include ("header.php");

$article = $_GET['article'];
?>

<!-- <div class="retour">
  <a href="index.php" class="btn btn-primary tonbou">Retour</a>
</div> -->





<div class="tecar card col-8 col-md-8 col-lg-8">
  <img src="<?php echo $coordonnees[$article]['image'];  ?>" class="img-fluid" alt="moto">
  <div class="inf">
    <h4 class="name"><?php echo $coordonnees[$article]['titre'];  ?></h4>
    <p>
      <?php echo $coordonnees[$article]['descriptionMax'];  ?>
    </p>
    <a href="index.php" class="btn btn-primary tonbou">Retour</a>
    <a href="espace.php" class="btn btn-primary tonbou">Achetez</a>
  </div>
</div>






<?php include("footer.php"); ?>
