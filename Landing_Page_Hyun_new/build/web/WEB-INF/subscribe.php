<?php

if (isset($_POST['valider'])) {
    //On récupère les valeurs entrées par l'utilisateur :
    $Email = $_POST['Email'];
    //On construit la date d'aujourd'hui
    //strictement comme sql la construit
    $today = date("y-m-d");
    //On se connecte
    $base = mysqli_connect('localhost', 'root', '', 'Oria');
    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO Test_Table VALUES("' . $Email . '","' . $today . '")';

    /* on lance la commande (mysql_query) et au cas où, 
      on rédige un petit message d'erreur si la requête ne passe pas (or die)
      (Message qui intègrera les causes d'erreur sql) */
    mysqli_query($base, $sql) or die('Erreur SQL !' . $sql . '<br />' . mysqli_error($base));

    // on ferme la connexion
    mysqli_close($base);
}
?>