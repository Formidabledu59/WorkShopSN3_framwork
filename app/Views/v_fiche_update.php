<div class="container mx-auto my-10 p-5">
    <div class="md:flex no-wrap md:-mx-2 ">
        <!-- Profile Card -->
        <div class="w-full md:w-3/12 md:mx-2">
            <div class="bg-white p-3 border-t-4 border-blue-400">
                <div class="image overflow-hidden">
                    <img class="h-auto w-full mx-auto"
                        src="https://source.unsplash.com/300x300/?portrait"
                        alt="Student Profile">
                </div>
                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Modifier les informations</h1>
                <h3 class="text-gray-600 font-lg text-semibold leading-6">Étudiant Epsi / Wis</h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                    Modifiez vos informations personnelles ci-dessous.
                </p>
                <form action="<?php echo base_url('Cfiche/bioUpdate'); ?>" method="POST">
                    <!-- Bio Section -->
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
                                    <input type="date" name="birth_day" placeholder="2000-12-24" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Password</div>
                                <div class="px-4 py-2">
                                    <input type="password" name="pass" placeholder="123Parbrise" value="123Parbrise" class="border rounded p-1 w-full" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Téléphone</div>
                                <div class="px-4 py-2">
                                    <input type="tel" name="num" placeholder="+33 6 12 34 56 78" value="+33 6 12 34 56 78" class="border rounded p-1 w-full"required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Adresse</div>
                                <div class="px-4 py-2">
                                    <input type="text" name="adresse" placeholder="25 rue du ketchup, Paris"  value="25 rue du ketchup" class="border rounded p-1 w-full"required>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Spécialité</div>
                                <div class="px-4 py-2">
                                    <input type="text" name="domaine" placeholder="Développement Full-Stack" value="Développement Full-Stack" class="border rounded p-1 w-full"required>
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
                                <input type="url" name="git" placeholder="https://github.com/username" value="https://github.com/username" class="border rounded p-1 w-full"required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Instagram</div>
                            <div class="px-4 py-2">
                                <input type="url" name="instagram" placeholder="https://instagram.com/username" value="https://instagram.com/username" class="border rounded p-1 w-full"required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Discord</div>
                            <div class="px-4 py-2">
                                <input type="url" name="discord" placeholder="https://discord.com/users/username" value="https://discord.com/users/username" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">LinkedIn</div>
                            <div class="px-4 py-2">
                                <input type="url" name="linkedin" placeholder="https://linkedin.com/in/username" value="https://linkedin.com/in/username" class="border rounded p-1 w-full"required>
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
                                <input type="text" name="interets_1" placeholder="" value="" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 2</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_2" placeholder="" value="" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 3</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_3" placeholder=""  value="" class="border rounded p-1 w-full" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Intérêts 4</div>
                            <div class="px-4 py-2">
                                <input type="text" name="interets_4" placeholder="" value="" class="border rounded p-1 w-full" required>
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