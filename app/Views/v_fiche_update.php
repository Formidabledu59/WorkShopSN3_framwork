<div class="container mx-auto my-10 p-5">
    <div class="md:flex no-wrap md:-mx-2 ">
        <!-- Profile Card -->
        <div class="w-full md:w-3/12 md:mx-2">
            <div class="bg-white p-3 border-t-4 border-blue-400">
                <div class="image overflow-hidden">
                    <div class="image overflow-hidden">
                        <?php
                        if (!is_null($result['photo_profil'])) {
                            if (($result['id_etudiant']) == 1) {
                                echo '<img class="h-auto w-full mx-auto" src="' . $result['photo_profil'] . '" alt="Student Profile">';
                            } else {
                                echo '<img class="h-auto w-full mx-auto" src="' . base_url($result['photo_profil']) . '" alt="Student Profile">';
                            }
                        } else {
                            echo '<img class="h-auto w-full mx-auto" src="https://t4.ftcdn.net/jpg/05/09/59/75/360_F_509597532_RKUuYsERhODmkxkZd82pSHnFtDAtgbzJ.jpg" alt="Student Profile">';
                        }
                        ?>
                    </div>
                    <button onclick="openModal()" class="mt-3 bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                        Changer la photo de profil
                    </button>

                    <!-- Modal for profile picture selection -->
                    <div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
                        <div class="bg-white p-5 rounded-lg shadow-lg w-2/3 h-96 overflow-auto">
                            <h2 class="text-xl font-semibold mb-4">Sélectionnez une photo de profil</h2>
                            <div class="grid grid-cols-3 gap-4">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar1.jpg" alt="Avatar 1" onclick="selectAvatar('/avatar/avatar1.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar2.jpg" alt="Avatar 2" onclick="selectAvatar('/avatar/avatar2.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar3.jpg" alt="Avatar 3" onclick="selectAvatar('/avatar/avatar3.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar4.jpg" alt="Avatar 4" onclick="selectAvatar('/avatar/avatar4.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar5.jpg" alt="Avatar 5" onclick="selectAvatar('/avatar/avatar5.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar6.jpg" alt="Avatar 6" onclick="selectAvatar('/avatar/avatar6.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar7.jpg" alt="Avatar 7" onclick="selectAvatar('/avatar/avatar7.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar8.jpg" alt="Avatar 8" onclick="selectAvatar('/avatar/avatar8.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar9.jpg" alt="Avatar 9" onclick="selectAvatar('/avatar/avatar9.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar10.jpg" alt="Avatar 10" onclick="selectAvatar('/avatar/avatar10.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar11.jpg" alt="Avatar 11" onclick="selectAvatar('/avatar/avatar11.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar12.jpg" alt="Avatar 12" onclick="selectAvatar('/avatar/avatar12.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar13.jpg" alt="Avatar 13" onclick="selectAvatar('/avatar/avatar13.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar14.jpg" alt="Avatar 14" onclick="selectAvatar('/avatar/avatar14.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar15.jpg" alt="Avatar 15" onclick="selectAvatar('/avatar/avatar15.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar16.jpg" alt="Avatar 16" onclick="selectAvatar('/avatar/avatar16.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar17.jpg" alt="Avatar 17" onclick="selectAvatar('/avatar/avatar17.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar18.jpg" alt="Avatar 18" onclick="selectAvatar('/avatar/avatar18.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar19.jpg" alt="Avatar 19" onclick="selectAvatar('/avatar/avatar19.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar20.jpg" alt="Avatar 20" onclick="selectAvatar('/avatar/avatar20.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar21.jpg" alt="Avatar 21" onclick="selectAvatar('/avatar/avatar21.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar22.jpg" alt="Avatar 22" onclick="selectAvatar('/avatar/avatar22.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar23.jpg" alt="Avatar 23" onclick="selectAvatar('/avatar/avatar23.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar24.jpg" alt="Avatar 24" onclick="selectAvatar('/avatar/avatar24.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar25.jpg" alt="Avatar 25" onclick="selectAvatar('/avatar/avatar25.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar26.jpg" alt="Avatar 26" onclick="selectAvatar('/avatar/avatar26.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar27.jpg" alt="Avatar 27" onclick="selectAvatar('/avatar/avatar27.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar28.jpg" alt="Avatar 28" onclick="selectAvatar('/avatar/avatar28.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar29.jpg" alt="Avatar 29" onclick="selectAvatar('/avatar/avatar29.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar30.jpg" alt="Avatar 30" onclick="selectAvatar('/avatar/avatar30.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar31.jpg" alt="Avatar 31" onclick="selectAvatar('/avatar/avatar31.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar32.jpg" alt="Avatar 32" onclick="selectAvatar('/avatar/avatar32.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar33.jpg" alt="Avatar 33" onclick="selectAvatar('/avatar/avatar33.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar34.jpg" alt="Avatar 34" onclick="selectAvatar('/avatar/avatar34.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar35.jpg" alt="Avatar 35" onclick="selectAvatar('/avatar/avatar35.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar36.jpg" alt="Avatar 36" onclick="selectAvatar('/avatar/avatar36.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar37.jpg" alt="Avatar 37" onclick="selectAvatar('/avatar/avatar37.jpg')">
                                <img class="h-24 w-24 object-cover cursor-pointer" src="/avatar/avatar38.jpg" alt="Avatar 38" onclick="selectAvatar('/avatar/avatar38.jpg')">

                            </div>
                            <button onclick="closeModal()" class="mt-4 bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-700">
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Champ caché pour l'URL de la photo sélectionnée -->
                <form action="<?php echo base_url('Cfiche/ppUpdate'); ?>" method="POST">
                    <input type="hidden" id="selectedAvatar" name="pp">
                    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 mt-3">
                        Enregistrer la photo de profil
                    </button>
                </form>

                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Modifier les informations</h1>
                <h3 class="text-gray-600 font-lg text-semibold leading-6">Étudiant
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
                    ?></h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                    Modifiez vos informations personnelles ci-dessous.
                </p>

                <form action="<?php echo base_url('Cfiche/bioUpdate'); ?>" method="POST">
                    <div class="my-4">
                        <label class="px-4 py-2 font-semibold">Bio</label>
                        <textarea name="bio" placeholder="Parlez de vous..." class="border rounded p-1 w-full" required></textarea>
                    </div>

                    <div class="flex justify-between mt-4">
                        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Modifier</button>
                        <button type="button" class="bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-gray-700">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modification Form -->
        <div class="w-full md:w-9/12 mx-2">
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <form action="<?php echo base_url('Cfiche/ficheUpdate'); ?>" method="POST">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                        <span class="text-blue-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 13.876l7.757-7.757m0 0l7.757 7.757M5.121 13.876H18.879" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Modifier Informations Personnelles</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Date de naissance</div>
                                <div class="px-4 py-2">
                                    <?php
                                    // Si $result['birth_day'] est une chaîne de date (ex: 2000-12-24 ou autre format)
                                    if (isset($result['birth_day'])) {
                                        // Reformater la date si nécessaire
                                        $formattedDate = (new DateTime($result['birth_day']))->format('Y-m-d');
                                    } else {
                                        $formattedDate = ''; // Si aucune date n'est présente
                                    }
                                    ?>
                                    <input type="date" name="birth_day" placeholder="2000-12-24" value="<?php echo $formattedDate; ?>" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Password</div>
                                <div class="px-4 py-2">
                                    <input type="password" name="pass" placeholder="123Parbrise" value="<?php echo $result['pass']; ?>" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Téléphone</div>
                                <div class="px-4 py-2">
                                    <input type="tel" name="num" placeholder="+33 6 12 34 56 78" value="<?php echo $result['num']; ?>" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Adresse</div>
                                <div class="px-4 py-2">
                                    <input type="text" name="adresse" placeholder="25 rue du ketchup, Paris" value="<?php echo $result['adresse']; ?>" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Spécialité</div>
                                <div class="px-4 py-2">
                                    <input type="text" name="domaine" placeholder="Développement Full-Stack" value="<?php echo $result['domaine']; ?>" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-4"></div>

                    <!-- Links Section -->
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                        <span class="text-blue-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Modifier Liens</span>
                    </div>
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Git</div>
                            <div class="px-4 py-2">
                                <input type="url" name="git" placeholder="https://github.com/username" value="<?php echo $result['git']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Instagram</div>
                            <div class="px-4 py-2">
                                <input type="url" name="instagram" placeholder="https://instagram.com/username" value="<?php echo $result['instagram']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Discord</div>
                            <div class="px-4 py-2">
                                <input type="url" name="discord" placeholder="https://discord.com/users/username" value="<?php echo $result['discord']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">LinkedIn</div>
                            <div class="px-4 py-2">
                                <input type="url" name="linkedin" placeholder="https://linkedin.com/in/username" value="<?php echo $result['linkedin']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                        <span class="text-blue-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Modifier Intérêts</span>
                    </div>
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 1</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_1" placeholder="" value="<?php echo $result['interets_1']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 2</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_2" placeholder="" value="<?php echo $result['interets_2']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 3</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_3" placeholder="" value="<?php echo $result['interets_3']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 4</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_4" placeholder="" value="<?php echo $result['interets_4']; ?>" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="block w-full text-white text-sm font-semibold bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline focus:bg-blue-600 rounded-lg p-3 my-4">
                        Enregistrer les modifications
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>