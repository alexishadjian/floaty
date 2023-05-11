<?php require_once('Views/parts/header-page.php'); ?>

<div id="login" class="wrapper">
    <div class="login-form">
        <h2><?= $datas['title']; ?></h2>
        <form method="POST" action="validation_login">
            <input type="text" name="login" id="user-login" placeholder="Nom d'utilisateur">
            <input type="password" name="password" id="user-password" placeholder="Mot de passe">
            <input type="submit" value="Connexion" class="btn btn_secondary">
        </form>
    </div>
</div>