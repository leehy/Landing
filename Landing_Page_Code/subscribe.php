<?php

if (isset($_POST['valider'])) {

    $Email = filter_input(INPUT_POST, 'Email');
    $today = date("y-m-d H:i:s");

    //On se connecte
    $base = mysqli_connect('localhost', 'root', '', 'Oria');

    if (!empty($Email)) {

        //if (mysql_num_rows($requete == 0)) { 
        //On prépare la commande sql d'insertion
        $sql = 'INSERT INTO Test_Table VALUES("' . $Email . '","' . $today . '")';

        /* on lance la commande (mysql_query) et au cas où, 
          on rédige un petit message d'erreur si la requête ne passe pas (or die)
          (Message qui intègrera les causes d'erreur sql) */
        mysqli_query($base, $sql) or die('Erreur SQL !' . $sql . '<br />' . mysqli_error($base));

        // on ferme la connexion
        mysqli_close($base);

        // on redirige vers thanks page
        header("Location:http://www.oria.io/thank_page.php");
        /* } else {
          header("Location:http://www.oria.io/already_created_news.php"); */
    } else {
        header("Location:http://www.oria.io/empty_news.php");
    }
}
?>
