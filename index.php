<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 4 partie 6 php</title>
  </head>
  <body>
    <a href="index.php?langage=PHP&amp;serveur=LAMP">Language</a>
    <?php
    if (isset($_GET['langage']) && ($_GET['serveur'])) {
    echo 'Language : ' . $_GET['langage'] . ' serveur :  ' . $_GET['serveur'];
  } else {
    echo 'Cliquez sur le lien pour afficher les informations !';
  };
    ?>
  </body>
</html>
