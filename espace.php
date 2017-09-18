<?php
  try
  {
  $bdd = new PDO('mysql:host=localhost;dbname=site_ecommerce;charset=utf8', 'phpmyadmin', 'sana15');
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
  ?>

  <form class="formu" action="espace.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" name="titre"  placeholder="titre">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="description">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" name="descriptionmax" placeholder="descriptionmax">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" name="prix" placeholder="prix">
      </div>
      <button type="submit" value="Ajouter" class="btn btn-primary">Ajouter</button>
    </form>




<?php
    $req = $bdd->prepare('INSERT INTO article(titre , description, descriptionmax, prix) VALUES(:titre, :description, :descriptionmax, :prix)');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'description' => $_POST['description'],
        'descriptionmax' => $_POST['descriptionmax'],
        'prix' => $_POST['prix']
        ));


$cart = $bdd->query('SELECT * from article');
        while ($value = $cart->fetch())
            {
?>

<div class="container">
  <div class="row">

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

      </div>
      </div>

        <?php
        }
        ?>
