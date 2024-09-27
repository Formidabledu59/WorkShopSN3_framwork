<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Contact - Étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Container Principal -->
    <div class="container mx-auto py-10">

        <div class="flex">

            <!-- Sidebar pour les filtres -->
            <div class="w-full md:w-1/4 bg-white p-5 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-5">Filtres</h2>

                <!-- Formulaire de filtre -->
                <form action="<?php echo base_url('Ccontact/filtre'); ?>" method="POST">

                    <!-- Filtre par nom et prénom -->
                    <div class="mb-4">
                        <label for="nom_prenom" class="block text-sm font-medium text-gray-700">Nom ou Prénom</label>
                        <input type="text" id="nom_prenom" name="nom_prenom"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Rechercher...">
                    </div>

                    <!-- Filtre par école -->
                    <div class="mb-4">
                        <label for="ecole" class="block text-sm font-medium text-gray-700">École</label>
                        <select id="ecole" name="ecole"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">Toutes les écoles</option>
                            <option value="EPSI">EPSI</option>
                            <option value="WIS">WIS</option>
                        </select>
                    </div>

                    <!-- Filtre par année de naissance -->
                    <div class="mb-4">
                        <label for="annee" class="block text-sm font-medium text-gray-700">Année de Naissance</label>
                        <select id="annee" name="annee"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">Toutes les années</option>
                            <option value="before_2000">Avant 2000</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="after_2005">Après 2005</option>
                        </select>
                    </div>

                    <!-- Bouton Filtrer -->
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none">
                        Appliquer les filtres
                    </button>
                </form>
            </div>

            <!-- Section pour les étudiants -->
            <div class="w-full md:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ml-6">
                <?php
                if (($result) != NULL) {
                    //$i = 0; 
                    foreach ($result as $row) {

                        //$i++;
                        //echo "$i\n\t-\t";

                        echo '<div class="bg-white p-5 rounded-lg shadow-md text-center">';

                        if (!is_null($row['photo_profil'])) {
                            if (($row['id_etudiant']) == 1) {
                                echo '<img class="h-32 w-32 rounded-full mx-auto" src="' . $row['photo_profil'] . '" alt="Student Profile">';
                            } else {
                                echo '<img class="h-32 w-32 rounded-full mx-auto" src="' . base_url($row['photo_profil'])  . '" alt="Student Profile">';
                            }
                        } else {
                            echo '<img class="h-32 w-32 rounded-full mx-auto" src="https://t4.ftcdn.net/jpg/05/09/59/75/360_F_509597532_RKUuYsERhODmkxkZd82pSHnFtDAtgbzJ.jpg" alt="Student Profile">';
                        }

                        echo '<h2 class="text-xl font-semibold mt-3">' . $row['prenom'] . ' ' . $row['nom'] . '</h2>';

                        // Extraction du domaine pour déterminer le groupe
                        $email = $row['mail'];
                        list($user, $domain) = explode('@', $email);

                        if (in_array($domain, ['ecoles-epsi.net', 'ecoles-wis.net'])) {
                            // Extraction du groupe
                            preg_match('/ecoles-(.*).net/', $email, $matches);
                            $groupe = $matches[1] ?? null;

                            if (!is_null($groupe)) {
                                $groupe = ucfirst(strtolower($groupe));
                                echo  '<p class="text-gray-500">' . $groupe . '</p>';
                            }
                        }
                        echo '<a href="' . base_url('Ccontact/voirProfil/' . $row['id_etudiant']) . '" class="text-green-500 hover:underline">Voir</a>';
                        echo '</div>';
                    }
                } else echo "Aucun résultat trouvé";

                ?>
                <!-- Ajoutez ici d'autres cartes d'étudiants -->
                <!-- Utilisation d'une boucle pour afficher jusqu'à 9 étudiants -->
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-5">
            <nav aria-label="Page navigation">
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="#" class="py-2 px-3 mx-1 text-sm text-gray-500 rounded-lg border border-gray-300 hover:bg-gray-200" aria-label="Précédent">
                            &lt;
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 mx-1 text-sm text-gray-500 rounded-lg border border-gray-300 hover:bg-gray-200">1</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 mx-1 text-sm text-gray-500 rounded-lg border border-gray-300 hover:bg-gray-200">2</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 mx-1 text-sm text-gray-500 rounded-lg border border-gray-300 hover:bg-gray-200">3</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 mx-1 text-sm text-gray-500 rounded-lg border border-gray-300 hover:bg-gray-200" aria-label="Suivant">
                            &gt;
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</body>