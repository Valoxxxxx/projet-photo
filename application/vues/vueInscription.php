<?php require('header.php'); ?>


    <div>
     <form action='../controleurs/inscription.php' method='post'>
     <label for="mail"></label>
     <input type="text" id="mail" name="mail"required placeholder="Votre mail"><br><br>

     <label for="pseudo"></label>
     <input type="text" id="pseudo" name="pseudo" required  placeholder="Nom d'utilisateur"><br><br>

     <label for="pw"></label>
     <input type="password" id="pw" name="pw" required  placeholder="Mot de passe"><br><br>

     <input class="btn" type="submit" value="S'inscrire">
     </form>
    </div>




<?php require('footer.php'); ?>
