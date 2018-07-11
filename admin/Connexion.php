
<?php
try
{
    //connexion à la base de données
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost:8889;dbname=atelier_dev;charset=utf8', 'root', 'root', $pdo_options);

    $email = $_POST['email'];


    function existeEmail($email)
{
    global $bdd;

    $sql = "SELECT 1
            FROM utilisateur
            WHERE adressemail = '$email'"
          

    $res = $bdd->query($sql);
    $row = $res->fetch();

    return !empty($row);
}

    if(existeEmail($email) )
    {
    ?>
        <p class="message error">email déjà utilisé !</p>



        <?php
     }

     elseif(!empty($_POST['email']) AND !empty($_POST['password']))
{
        $req = $bdd->prepare('INSERT INTO utilisateur (adressemail, mot_de_passe) VALUES (?,?)');
        $req->execute(array($_POST['email'], $_POST['password']));
    ?>
            <p class="message error">Bienvenue
                <?php echo htmlspecialchars($_POST['email']); ?> ! </p>
            <?php
      } else {
     }

}
      catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

 ?>
