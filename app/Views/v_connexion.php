
    <!-- Section de connexion sans cadre blanc -->
    <section class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/1400/7099fc28008799.56e41b31e770e.gif');">
        
        <!-- Cadre semi-transparent couvrant toute la page -->
        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-between w-full px-16">

            <!-- Colonne gauche avec texte/image -->
            <div class="w-1/2 text-white p-8">
                <h2 class="text-5xl font-bold">Bienvenue sur EpsiConect</h2>
                <p class="mt-4 text-lg">Accède à ton hub étudiant pour découvrir les fonctionnalités dédiées aux étudiants de l’EPSI.</p>
                <img src="https://media.licdn.com/dms/image/v2/C4E16AQEJfoMDwv7fMQ/profile-displaybackgroundimage-shrink_200_800/profile-displaybackgroundimage-shrink_200_800/0/1652694619947?e=2147483647&v=beta&t=suPIxOX3Ja1xlw1MmKQatQTMvasWFszmHEopNftajIw" alt="Image Epsi" class="mt-6 rounded-lg">
            </div>

            <!-- Colonne droite : Formulaire de connexion -->
            <div class="w-1/2 p-8">
                <form action="<?php echo base_url('Cconnexion/authentification') ?>" method="post" class="space-y-6">
                    <h1 class="text-3xl font-bold text-white">Connexion</h1>
                    <div class="input-box">
                        <label for="login" class="block text-white">Nom d'utilisateur ou Email</label>
                        <input type="text" id="login" name="login" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required>
                    </div>
                    <div class="input-box">
                        <label for="password" class="block text-white">Mot de passe</label>
                        <input type="password" id="password" name="password" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-500">Connexion</button>
                    <div class="register-link mt-4 text-white">
                        <p>Nouvelle Utilisateur ? <a href="<?php echo base_url('') ?>" class="text-blue-400 hover:underline">Inscription</a></p>
                    </div>
                </form>
            </div>

        </div>
    </section>