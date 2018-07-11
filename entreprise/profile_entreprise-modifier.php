<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

getHeader("Accueil");
?>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Mon Profil</legend>

 <button type="button" class="btn btn-outline-danger"><a href="index.php">ANNULER</a></button>   
    
    
    
<!-- NOM PRENOM-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom">Nom de l'entreprise</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-briefcase">
        </i>
       </div>
       <input id="Nom" name="Nom" type="text" placeholder="Nom de l'entreprise" class="form-control input-md">
      </div>

    
  </div>

  
</div>
    

    
    <!-- Numéro de tel -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Téléphone">Numéro de téléphone </label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="Téléphone" name="Téléphone" type="text" placeholder="Numéro de fixe" class="form-control input-md">
    
      </div>

  
  </div>
</div>
    
    

<!-- Adresse mail-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Adresse Email</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email" name="Email" type="text" placeholder="Adresse Email" class="form-control input-md">
    
      </div>
  
  </div>
</div>
    

    <hr>



<!--Numéro de SIRET-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Numéro de SIRET">Numéro de SIRET</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <input id="Numéro de SIRET" name="Numéro de SIRETe" type="text" placeholder="Numéro de SIRET" class="form-control input-md">
      </div>
  
    
  </div>
</div>


<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Spécialisation">Spécialisations</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Spécialisation-0">
      <input type="checkbox" name="Spécialisation" id="Spécialisation-0" value="1">
      Marketing
    </label>
    </div>
  <div class="checkbox">
    <label for="Spécialisation-1">
      <input type="checkbox" name="Spécialisation" id="Spécialisation-1" value="2">
      Développement
    </label>
    </div>
  <div class="checkbox">
    <label for="Spécialisation-2">
      <input type="checkbox" name="Spécialisation" id="Spécialisation-2" value="3">
      WebDesign
    </label>
    </div>

<div class="othertop">
    <label for="Spécialisation-4">
    
     
  
    </label>

     <input type="input" name="Spécialisation" id="Spécialisation-4"  placeholder="Autre spécialisations">
    </div>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Enregistrer</a>
    
  </div>
</div>

</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail">
    <input type="file" name="imgprofil" />
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<?php getFooter(); ?>