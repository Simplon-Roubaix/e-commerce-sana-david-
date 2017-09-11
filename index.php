
<?php include ("header.php"); ?>

<div class="tof">
  <img src="img/1.jpg" alt="image de reduction de tarif">
</div>
<?php include("section.php"); ?>


<div class="container">
  <div class="row">

<?php foreach ($coordonnees as $key => $value){
   ?>
   <div class="card carte col-12 col-md-6 col-lg-5" >
     <img class="card-img-top img-fluid" src="<?php echo $value['image'];  ?>" alt="moto">
     <div class="card-block">
       <h4 class="card-title"><?php echo $value['titre']; ?></h4>
       <p class="card-text">
         <?php echo $value['description']; ?>
       </p>
    <a href="detail.php?article=<?php echo $key?>" class="btn btn-primary tonbou">Voir produit</a>
     </div>
   </div>





<?php
}
?>
</div>
</div>

<?php include("footer.php"); ?>
