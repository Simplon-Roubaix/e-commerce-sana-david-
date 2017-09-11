
<?php include ("section.php");
 include ("header.php");

$article = $_GET['article'];
?>

<div class="retour">
  <a href="index.php" class="btn btn-primary tonbou">Accueil</a>
</div>






<div class="tecar">
  <img src="<?php echo $coordonnees[$article]['image'];  ?>" alt="moto">
  <div class="inf">
    <h4 class="name"><?php echo $coordonnees[$article]['titre'];  ?></h4>
    <p>
      <?php echo $coordonnees[$article]['descriptionMax'];  ?>
    </p>
    <a href="#" class="btn btn-primary tonbou">Achetez</a>
  </div>
</div>





<?php include("footer.php"); ?>
