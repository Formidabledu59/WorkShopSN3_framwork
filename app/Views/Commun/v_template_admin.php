<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?> - EpsiConect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 flex justify-between items-center shadow-md">
        <h1 class="text-3xl font-bold"><a href="<?php echo base_url('Cadmin'); ?>">EpsiConect Admin</a></h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="<?php echo base_url('Cadmin'); ?>" class="hover:underline">Menu</a></li>
                <li><a href="<?php echo base_url(''); ?>" class="hover:underline">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white min-h-screen p-6">
            <ul class="space-y-4">
                <li><a href="<?php echo base_url('Cadmin/index'); ?>" class="hover:bg-blue-500 p-3 block">Tableau de bord</a></li>
                <li><a href="<?php echo base_url('Cadmin/GestionETD'); ?>" class="hover:bg-blue-500 p-3 block">Gestion des utilisateurs</a></li>
                <li><a href="<?php echo base_url('Cadmin/GestionFiche'); ?>" class="hover:bg-blue-500 p-3 block">Gestion des fiches étudiants</a></li>
                <li><a href="<?php echo base_url('Cadmin/Support'); ?>" class="hover:bg-blue-500 p-3 block">Support</a></li>
            </ul>
        </aside>
        <?php echo $contenu; ?>
    </div>


</body>

</html>