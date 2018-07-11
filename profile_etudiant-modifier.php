<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

getHeader("Accueil");
?>

    
    <!-- Custom CSS -->
    <style>

    .othertop{margin-top:10px;}
    </style>


</head>

<body>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Mon Profil</legend>

 <button type="button" class="btn btn-outline-danger"><a href="profile_etudiant.php">ANNULER</a></button>   
    
    
    
<!-- NOM PRENOM-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom">Nom</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Nom" name="Nom" type="text" placeholder="Nom" class="form-control input-md">
      </div>

    
  </div>

  
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom">Prénom</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Prénom" name="Prénom" type="text" placeholder="Prénom" class="form-control input-md">
      </div>

    
  </div>

  
</div>


<!-- Date de Naissance -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Naissance">Date de naissance</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Naissance" name="Naissance" type="text" placeholder="Date de naissance" class="form-control input-md">
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
      <div class="input-group othertop">
       <div class="input-group-addon">
     <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
        
       </div>
    <input id="Mobile Téléphone" name="Mobile Téléphone" type="text" placeholder="Numéro de mobile" class="form-control input-md">
    
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



<!--Niveau d'étude-->
<div class="form-group">
  <label class="col-md-4 control-label" for="niveau étude">Niveau d'étude actuel</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <input id="niveau étude" name="niveau étude" type="text" placeholder="Niveau d'étude actuel" class="form-control input-md">
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

    
<!--CV-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CV">Télécharger mon CV</label>  
  <div class="col-md-4">
  <div class="input-group">
      <input type="file" name="CV" />
      </div>
  
    
  </div>
</div>

    
    
<!--Lettre de Motivation-->
<div class="form-group">
  <label class="col-md-4 control-label" for="diplome">Télécharger mes diplômes</label>  
  <div class="col-md-4">
  <div class="input-group">
      <input type="file" name="diplome" />
      </div>
  
    
  </div>
</div>
    
    
    

<!--Lettre de Motivation-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lettre de motivation">Télécharger ma lettre de motivation</label>  
  <div class="col-md-4">
  <div class="input-group">
      <input type="file" name="lettre de motivation" />
      </div>
  
    
  </div>
</div>
    
    
    
    
<!-- Description -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="Description" name="Description"></textarea>
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
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
    <input type="file" name="imgprofil" />
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


