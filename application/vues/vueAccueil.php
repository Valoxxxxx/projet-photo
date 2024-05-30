<?php require('header.php'); ?>
<head>
<link rel="stylesheet" href="../../public/css/global.css">
<script src="../../public/js/script.js">defer</script>
</head>

<main>


    <?php
    foreach ($listePhotos as $photo) { ?>
    <section class="image-section">
       <div>
        <img  id="myImage" src="../../<?php echo ($photo['chemin_photo'])?>"alt="#">
        <h3><?php echo $photo['auteur_photo']; ?></h3>
        <h2><?php echo $photo['titre_photo']; ?></h2>
        <p><?php echo $photo['description_photo']; ?></p>
        <p><?php echo $photo['date_photo'];?></p>
        <!-- systeme de note -->
        </div>
    </section>
    <?php
    }
    ?>
    
    </main>

<?php require('footer.php') ?>