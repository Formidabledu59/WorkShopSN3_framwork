<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EpsiConect - Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url($css); ?>">
    <script src="<?php echo base_url('js/script.js'); ?>" defer></script>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <?php
            if (isset($_SESSION['id_etudiant']) == TRUE) {
            ?>

                <h1 class="text-3xl font-bold"><a href="<?php echo base_url('Chub'); ?>">EpsiConect</a></h1>

            <?php   } else {
            ?>

                <h1 class="text-3xl font-bold"><a href="<?php echo base_url(''); ?>">EpsiConect</a></h1>

            <?php

            } ?>
            <nav>

                <ul class="flex space-x-6">
                    <?php
                    if (isset($_SESSION['id_etudiant']) == TRUE) {
                    ?>

                        <li><a href="<?php echo base_url('fiche_etudiant.html'); ?>" class="hover:underline">Profil Étudiant</a></li>
                        <li><a href="#modules" class="hover:underline">Modules</a></li>
                        <li><a href="<?php echo base_url('Cconnexion/Deconnexion'); ?>" class="hover:underline">Déconnexion</a></li>

                    <?php   } else {
                    ?>

                        <li><a href="<?php echo base_url('Chub'); ?>" class="hover:underline">Il faut être connecté</a></li>
                        <li><a href="<?php echo base_url('Cconnexion'); ?>" class="hover:underline">Connexion</a></li>

                    <?php

                    } ?>
                </ul>
            </nav>
        </div>
    </header>

    <?php echo $contenu; ?>


</body>

</html>