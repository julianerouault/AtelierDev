<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

getHeader("Accueil");
?>

<section class="container">

  <div class="row">

    <div class="col-lg-6">
      <form style="background-color: red;" action="index.php" method="post" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">CONNEXION</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">se connecter</button>
        </form>
      </div>

    <div class="col-lg-6">
      <form style="background-color: grey;"action="index.php" method="post" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">INSCRIPTION</h1>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

        <label for="inputName" class="sr-only">nom</label>
        <input type="name" name="nom" id="inputName" class="form-control" placeholder="Nom" required autofocus>

        <label for="inputPrenom" class="sr-only">Prénom</label>
        <input type="prenom" name="prenom" id="inputPrenom" class="form-control" placeholder="Prenom" required autofocus>

        <label for="inputDate" class="sr-only">Date de naissance</label>
        <input type="date" name="date" id="inputDate" class="form-control" placeholder="Date de naissance" required autofocus>

        <label for="inputPhone" class="sr-only">Numéro de téléphone</label>
        <input type="phone" name="phone" id="inputPhone" class="form-control" placeholder="Numéro de téléphone" required autofocus>

        <input type="file" name="nom" />
        <input type="file" name="nom" />


          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>

          </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">s'inscrire</button>
      </form>
    </div>

</div>

</section>
