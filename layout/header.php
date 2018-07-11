<?php $utilisateur = currentUser(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier DEV - <?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/style.css">


<!-- PAGE PROFIL -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/script.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
</head>
<body>

    <header class="site-header">
      <nav class="main-nav">
          <ul>
              <li><a href="#">Entreprises</a></li>
              <li><a href="http://wwwW.facebook.com">
              <span class="fa fa-stack">
                <i class="fa fa-circle fa-stack-2x" style="color :#01E59A  "></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span></a></li>
              <li><a href="http://wwwW.twitter.com">
              <span class="fa fa-stack">
                <i class="fa fa-circle fa-stack-2x" style="color : #01E59A "></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span></a></li>
              <?php if(isset($utilisateur["id"])) : ?>
              <li style="float:right"><a href="<?php echo SITE_URL; ?>logout.php">Déconnexion</a></li>
            <?php endif; ?>
          </ul>
      </nav>
    </header>

    <main>
