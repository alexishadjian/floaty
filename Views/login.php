<div id="login">
    <div class="login-form">
        <h2><?= $datas['title']; ?></h2>
        <form method="POST" action="validation_login">
            <input type="text" name="login" id="login" placeholder="Nom d'utilisateur">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion" class="btn btn_secondary">
        </form>
    </div>
</div>