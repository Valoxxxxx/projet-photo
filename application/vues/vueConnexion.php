<?php require('header.php'); ?>

    <div>
    <form action="connexion.php" method="post">
        
        <label for="pseudo"></label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" ><br><br>

        <label for="pw"></label>
        <input type="password" id="pw" name="pw" placeholder="Mot de passe"><br><br>

        <button class="btn" type="submit">Se connecter</button>
    </form>
    </div>






<?php require('footer.php'); ?>
