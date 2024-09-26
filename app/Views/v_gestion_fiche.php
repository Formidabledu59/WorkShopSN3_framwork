<!-- Table of Users -->
<main class="flex-1 p-10">
    <h2 class="text-4xl font-bold mb-6">Gestion des Fiches</h2>
    <div class="bg-white p-6 shadow-md rounded-lg">
        <div class="flex justify-between mb-4">
            <h3 class="text-xl font-semibold">Liste des utilisateurs</h3>
        </div>

        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/4 py-2">Login</th>
                    <th class="w-1/4 py-2">Email</th>
                    <th class="w-1/4 py-2">Numéro</th>
                    <th class="w-1/4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (($result_ETD) != NULL) {
                    //$i = 0; 
                    foreach ($result_ETD as $row) {

                        //$i++;
                        //echo "$i\n\t-\t";
                        echo '<tr class="text-center border-b">';
                        echo '<td class="py-4">' . $row['user'] . '</td>';
                        echo '<td class="py-4">' . $row['mail'] . '</td>';
                        echo '<td class="py-4">' . $row['num'] . '</td>';
                        echo '<td class="py-4">';
                        echo '<a href="' . base_url('Cadmin/modifieEtudiant/' . $row['id_etudiant']) . '" class="text-blue-500 hover:underline">Modifier</a> | ';
                        echo     '<a href="' . base_url('Cadmin/voirEtudiant/' . $row['id_etudiant']) . '" class="text-green-500 hover:underline">Voir</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else echo "Aucun résultat trouvé";

                ?>
                <!-- Repeater for all users -->
            </tbody>
        </table>
    </div>
</main>