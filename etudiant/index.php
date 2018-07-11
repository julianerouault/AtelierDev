<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$utilisateur = currentUser();
if(!isset($utilisateur["etudiant"])) {
  header("Location: ../index.php");
}

getHeader("Accueil");
?>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-lg-offset-2 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Nom Prénom</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail" class="img-circle img-responsive"> 
                  
                    <div class="bouton_etudiant-doc pull-left">
                    <button type="button" class="btn btn-success">CV</button>
                    </div>
                    
                    <div class="bouton_etudiant-doc pull-left">
                    <button type="button" class="btn btn-success">Diplôme</button>
                    </div>
                    
                    <div class="bouton_etudiant-doc pull-left">
                    <button type="button" class="btn btn-success">Lettre de Motivation</button>
                    </div>
                
                  </div>
                

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Date de Naissance</td>
                        <td>01/24/1988</td>
                      </tr>
                    
                          <tr>
                        <td>Numéro de téléphone</td>
                        <td>02 00 00 00 00 (Fixe)<br>06 00 00 00 00 (Mobile)
                        </td>
                        </tr>
                        
                         <tr>
                        <td>Adresse Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        
                        <tr>
                        <td>Niveau d'étude</td>
                        <td>BAC +3 "Chef de Projet Web"</td>
                      </tr>
                        
                    <tr>
                        <td>Spécialisation</td>
                        <td>Marketing</td>
                      </tr>
                     
                     
                  
                     
                    </tbody>
                  </table>
                  
                  <a href="profile_etudiant-modifier.php" class="btn btn-primary">Modifier mon profil</a>
                <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('id01').style.display='block'">Modifier mon mot de passe</button>
                 
                    
                    <!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail " alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="psw"><b>Nouveau mot de passe</b></label>
      <input type="password" placeholder="Nouveau mot de passe" name="psw" required>

      <label for="psw"><b>Confirmer le nouveau mot de passe</b></label>
      <input type="password" placeholder="Confirmer le nouveau mot de passe" name="psw" required>

      <button class="btn btn-success" type="submit">Modifier mon mot de passe</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
                    
                </div>
              </div>
            </div>
                 
          </div>
        </div>
      </div>
    </div>

<?php getFooter(); ?>
