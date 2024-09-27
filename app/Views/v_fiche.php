<div class="container mx-auto my-10 p-5">
    <div class="md:flex no-wrap md:-mx-2">
        <!-- Profile Card -->
        <div class="w-full md:w-3/12 md:mx-2">
            <div class="bg-white p-3 border-t-4 border-blue-400">
                <div class="image overflow-hidden">
                    <?php
                    if (!is_null($result['photo_profil'])) {
                        if (($result['id_etudiant']) == 1) {
                            echo '<img class="h-auto w-full mx-auto" src="'.$result['photo_profil'].'" alt="Student Profile">';
                        } else {
                            echo '<img class="h-auto w-full mx-auto" src="' . base_url($result['photo_profil'])  . '" alt="Student Profile">';
                        }
                    } else {
                        echo '<img class="h-auto w-full mx-auto" src="https://t4.ftcdn.net/jpg/05/09/59/75/360_F_509597532_RKUuYsERhODmkxkZd82pSHnFtDAtgbzJ.jpg" alt="Student Profile">';
                    }
                    ?>
                </div>
                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">
                    <?php echo $result['prenom'] . " " . $result['nom']; ?>
                </h1>
                <h3 class="text-gray-600 font-lg text-semibold leading-6">
                    Étudiant
                    <?php
                    // Extraction du domaine pour déterminer le groupe
                    $email = $result['mail'];
                    list($user, $domain) = explode('@', $email);

                    if (in_array($domain, ['ecoles-epsi.net', 'ecoles-wis.net'])) {
                        // Extraction du groupe
                        preg_match('/ecoles-(.*).net/', $email, $matches);
                        $groupe = $matches[1] ?? null;

                        if (!is_null($groupe)) {
                            $groupe = ucfirst(strtolower($groupe));
                            echo $groupe;
                        }
                    }
                    ?>
                </h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                    <?php echo $result['bio']; ?>
                </p>
                <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <li class="flex items-center py-3">
                        <span>Membre depuis</span>
                        <span class="ml-auto">
                            <?php
                            $date = $result['date'];
                            $dateObject = new DateTime($date);
                            $formattedDate = $dateObject->format('d/m/Y');
                            echo $formattedDate;
                            ?>
                        </span>
                    </li>
                </ul>
                <button class="block w-full text-white text-sm font-semibold bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline focus:bg-blue-600 rounded-lg p-3 my-4">
                    <a href="<?php echo base_url('Cfiche/ModifieFiche'); ?>">Modifier Profil</a>
                </button>
            </div>
        </div>

        <!-- Profile Details -->
        <div class="w-full md:w-9/12 mx-2 h-64">
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span class="text-blue-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 13.876l7.757-7.757m0 0l7.757 7.757M5.121 13.876H18.879" />
                        </svg>
                    </span>
                    <span class="tracking-wide">Informations Personnelles</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Login</div>
                            <div class="px-4 py-2"><?php echo $result['user']; ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Date de naissance</div>
                            <div class="px-4 py-2">
                                <?php
                                $birthDate = new DateTime($result['birth_day']);
                                echo $birthDate->format('d/m/Y');
                                ?>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Email</div>
                            <div class="px-4 py-2">
                                <a class="text-blue-800" href="mailto:<?php echo $result['mail']; ?>"><?php echo $result['mail']; ?></a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Téléphone</div>
                            <div class="px-4 py-2"><?php echo $result['num']; ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Adresse</div>
                            <div class="px-4 py-2"><?php echo $result['adresse']; ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Spécialité</div>
                            <div class="px-4 py-2"><?php echo $result['domaine']; ?></div>
                        </div>
                    </div>
                </div>
                <button class="block w-full text-blue-800 text-sm font-semibold bg-gray-100 hover:bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-gray-200 rounded-lg p-3 my-4">
                    Montrer plus
                </button>
            </div>

            <div class="my-4"></div>

            <!-- Skills Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="grid grid-cols-2">
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <span class="text-blue-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Lien</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            <li>
                                <div class="text-teal-600">Git profil</div>
                                <div class="text-gray-500 text-xs"><?php echo $result['git']; ?></div>
                            </li>
                            <li>
                                <div class="text-teal-600">Instagram</div>
                                <div class="text-gray-500 text-xs"><?php echo $result['instagram']; ?></div>
                            </li>
                            <li>
                                <div class="text-teal-600">Discord</div>
                                <div class="text-gray-500 text-xs"><?php echo $result['discord']; ?></div>
                            </li>
                            <li>
                                <div class="text-teal-600">Linkedin</div>
                                <div class="text-gray-500 text-xs"><?php echo $result['linkedin']; ?></div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <span class="text-blue-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Intérêts</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            <li><?php echo $result['interets_1']; ?></li>
                            <li><?php echo $result['interets_2']; ?></li>
                            <li><?php echo $result['interets_3']; ?></li>
                            <li><?php echo $result['interets_4']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>