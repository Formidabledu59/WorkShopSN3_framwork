<!-- Hero Section -->
<section class="min-h-screen bg-cover bg-center h-screen"
    style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/1400/7099fc28008799.56e41b31e770e.gif');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
        <div class="text-center text-white">
            <h2 class="text-5xl font-bold">Bienvenue sur EpsiConect</h2>
            <p class="mt-4 text-xl">Tu n'es pas inscrit ? Fais-le vite ! <a href="#register" class="hover:underline">ici</a></p>
            <a href="#modules" class="mt-6 inline-block bg-blue-500 px-6 py-3 text-lg rounded shadow-lg hover:bg-blue-400">Explorer les Modules</a>
        </div>
    </div>
</section>

<!-- Modal Background -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <!-- Modal Content -->
    <div class="bg-white p-8 rounded shadow-lg w-96">

        <!-- Login Form
            <div id="loginForm" class="space-y-4">
                <h2 class="text-2xl font-bold">Connexion</h2>
                <p>Veuillez entrer votre email et mot de passe :</p>
                <input type="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded"
                    id="loginEmail">
                <input type="password" placeholder="Mot de passe" class="w-full p-2 border border-gray-300 rounded"
                    id="loginPassword">
                <button class="bg-blue-600 text-white px-4 py-2 rounded" id="loginBtn">Se connecter</button>
                <p class="text-sm mt-2">Admin ? <a href="#" class="text-blue-500">Cliquez ici</a></p>
            </div> -->

        <!-- Registration Form -->
            <form action="<?php echo base_url('Caccueil/register'); ?>" method="post" id="registerForm" class="space-y-4 hidden">
                <h2 class="text-2xl font-bold">Inscription</h2>
                <?php $message = "Veuillez entrer vos informations : ";?>
                <p><?php echo $message;?></p>

                <input type="email" name="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded" id="registerEmail" required>

                <input type="password" name="password" placeholder="Mot de passe" class="w-full p-2 border border-gray-300 rounded" id="registerPassword" required>

                <textarea name="message" placeholder="Message pour les admins" class="w-full p-2 border border-gray-300 rounded" id="registerMessage"></textarea>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded" id="registerBtn">S'inscrire</button>

                <p id="confirmationMessage" class="text-green-500 hidden">Vos informations sont en cours de traitement, vous serez alerté par mail suite à la création de votre compte.</p>
            </form>
    </div>
</div>