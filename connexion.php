

<section class='connecter'>
  <div class='connexion'>
     <h1 class='titlesco'> Connexion </h1>

  <form class="" action="" method="post">
    <input  class="pseudo" type="text" name="pseudo" value="" placeholder=" admin"> <br />
    <input class="password" type="password" name="password" value="" placeholder="password"> <br />
    <input type="submit" name="validez" value="Validez" class='valid'>
  </form></div>



  <?php  try
            {
              $bdd = new PDO('mysql:host=localhost;dbname=site_ecommerce;charset=utf8', 'root', '22Misterhoo');
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }

?>

<?php

if ( isset($_POST['pseudo'])) {
            $reponse = $bdd->prepare('SELECT pseudo , password FROM connexion WHERE pseudo = ?');
            $reponse->execute(array(
              $_POST['pseudo']
            ));






            while ($donnees = $reponse->fetch()) {

              if ($_POST["password"] == $donnees["password"]) {

                 header('Location: index.php');


               }elseif (empty($_POST['password'])) {
                   echo 'mot de passe introuvable !';
                 }

               elseif ( $_POST['password'] != $donnees["password"]) {


                echo ' mot de passe incorrecte !';
              }
               elseif ($_POST['pseudo'] != $donnees['pseudo']) {
                  echo 'pseudo introuvable ';
                }
                else {
                header('Location: 404.html');}




              }
            }




  ?>

</section>
