    <!-- Main Content -->
    <main class="flex-1 p-10">
        <h2 class="text-4xl font-bold mb-6">Gestion des Utilisateurs</h2>

        <!-- Table of Users -->
        <div class="bg-white p-6 shadow-md rounded-lg">
            <div class="flex justify-between mb-4">
                <h3 class="text-xl font-semibold">Liste des utilisateurs check etudiant</h3>
            </div>

            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/4 py-2">E-mail</th>
                        <th class="w-1/4 py-2">Pass</th>
                        <th class="w-1/4 py-2">Message</th>
                        <th class="w-1/4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (($result_check_ETD) != NULL) {
                        //$i = 0; 
                        foreach ($result_check_ETD as $row) {

                            //$i++;
                            //echo "$i\n\t-\t";
                            echo '<tr class="text-center border-b">';
                            echo '<td class="py-4">' . $row['mail']. '</td>';
                            echo '<td class="py-4">' . $row['pass']. '</td>';
                            echo '<td class="py-4">'. $row['msg'] .'</td>';
                            echo '<td class="py-4">';
                            echo '<a href="' . base_url('Cadmin/createEtudiant?mail=' . $row['mail'] . '&pass=' . $row['pass'] . '&id_etudiant=' . $row['id_etudiant']) . '" class="text-blue-500 hover:underline">Ajouter</a> | ';
                            echo     '<a href="'. base_url('Cadmin/deleteCheckEtudiant/' . $row['id_etudiant']) .'" class="text-red-500 hover:underline">Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else echo "Aucun résultat trouvé";

                    ?>
                   <!-- Repeater for all users -->
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <!-- Table of Users -->
        <div class="bg-white p-6 shadow-md rounded-lg">
            <div class="flex justify-between mb-4">
                <h3 class="text-xl font-semibold">Liste des utilisateurs</h3>
            </div>

            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/4 py-2">Nom</th>
                        <th class="w-1/4 py-2">Email</th>
                        <th class="w-1/4 py-2">Rôle</th>
                        <th class="w-1/4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center border-b">
                        <td class="py-4">Jean Dupont</td>
                        <td class="py-4">jean.dupont@example.com</td>
                        <td class="py-4">Étudiant</td>
                        <td class="py-4">
                            <a href="#" class="text-blue-500 hover:underline">Modifier</a> |
                            <a href="#" class="text-red-500 hover:underline">Supprimer</a>
                        </td>
                    </tr>
                    <!-- Repeater for all users -->
                </tbody>
            </table>
        </div>