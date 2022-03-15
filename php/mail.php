<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('zoe.louyot24@gmail.com',
        'Envoi depuis la page Contact',
        $_POST['user_message'],
        'From: webmaster@zoelouyot.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>