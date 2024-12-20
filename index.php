<?php
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'FR';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['language'])) {
    $lang = $_POST['language']; 
    setcookie('lang', $lang, time() + 3600);
}
switch ($lang) {
    case 'AR':
        $message = "أهلا وسهلا"; 
        break;
    case 'FR':
        $message = "Bienvenue"; 
        break;
    case 'AN':
        $message = "Welcome"; 
        break;
    case 'ES':
        $message = "Bienvenido"; 
        break;
    default:
        $message = "Bienvenue"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion et préférences</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <form action="session.php" method="post">
        <label for="name">Nom d'utilisateur :</label><br>
        <input name="name" type="text" required><br>
        <label for="password">Code :</label><br>
        <input name="password" type="password" required><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
   
    <form method="POST">
        <label for="language">Choisissez votre langue :</label>
        <select name="language" id="language">
            <option value="AR" <?php echo ($lang == 'AR') ? 'selected' : ''; ?>>Arabe</option>
            <option value="FR" <?php echo ($lang == 'FR') ? 'selected' : ''; ?>>Français</option>
            <option value="AN" <?php echo ($lang == 'AN') ? 'selected' : ''; ?>>Anglais</option>
            <option value="ES" <?php echo ($lang == 'ES') ? 'selected' : ''; ?>>Espagnol</option>
        </select>
        <input type="submit" value="Sauvegarder la préférence">
    </form>
</body>
</html>
