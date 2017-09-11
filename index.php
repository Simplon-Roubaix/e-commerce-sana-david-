<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Site de Vente</title>
        <meta name="description" content="site de vente de moto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
 <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Faster+One|Roboto" rel="stylesheet">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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
    <a href="detail.php?" class="btn btn-primary tonbou">Voir produit</a>
  </div>
</div>


<?php
}
?>
</div>
</div>

<?php include("footer.php"); ?>


          <script src="js/vendor/modernizr-2.8.3.min.js"></script>
          <script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js" integrity="{{JQUERY_SRI_HASH}}" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
          <script src="js/plugins.js"></script>
          <script src="js/main.js"></script>

          <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
          <script>
              window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
              ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
          </script>
          <script src="https://www.google-analytics.com/analytics.js" async defer></script>
      </body>
  </html>
