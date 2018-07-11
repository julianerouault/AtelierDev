<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

getHeader("Accueil");
?>

<div class="container">
  <div class="row">

<div class="col-md-4">
      <form action="login.php" method="post" class="form-signin">

        <h1 class="h3 mb-3 font-weight-normal" style="color: #253745">CONNEXION</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn-lg btn-block btn-vert" type="submit">SE CONNECTER</button>
        </form>
</div>
<div class="col-md-2"></div>
<div class="col-md-6">
        <form action="inscription.php" method="post" class="form-signin">

          <?php if (isset($_GET["inscription_error"])) : ?>
            <?php if ($_GET["inscription_error"] == "emailexist") : ?>
              <p>L'email est déjà utilisé</p>
            <?php endif; ?>
          <?php endif; ?>
          <h1 class="h3 mb-3 font-weight-normal" style="color: #253745">INSCRIPTION</h1>
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
          <label for="inputPassword" class="sr-only">Mot de passe</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        </br>
          <label for="role">Vous êtes ?</label><br />
          <select name="role" class="form-control" id="role">
            <option value="etudiant">Etudiant</option>
            <option value="professionnel">Professionnel</option>
          </select>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
        </div>
        <button class=" btn-lg btn-block btn-gris" type="submit">S'INSCRIRE</button>
      </form>
</div>

</div>
</div>
</div>
</section>

<?php getFooter(); ?>
