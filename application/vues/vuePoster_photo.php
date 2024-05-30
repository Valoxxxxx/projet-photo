<link rel="stylesheet" href="../../public/css/global.css">



<div>
    <form enctype="multipart/form-data" action="../controleurs/poster_photo.php" method="post">
        
        

        <label for="titre">titre :</label>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description"require></textarea><br><br>
        
        <label for="photo">Choisir une photo :</label>
        <input type="file" name="photo" id="photo" accept="image/jpeg">
        
        <button class="btn" type="submit" name="login">Publier</button>
    </form>
    </div>
    




<?php require('footer.php'); ?>



