<!-- Hero Section -->
<section class="bg-cover bg-center h-screen" style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/1400/7099fc28008799.56e41b31e770e.gif');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold">Bienvenue sur EpsiConect</h2>
                <p class="mt-4 text-xl">Un espace tout-en-un pour les étudiants</p>
                <a href="#modules" class="mt-6 inline-block bg-blue-500 px-6 py-3 text-lg rounded shadow-lg hover:bg-blue-400">Explorer les Modules</a>
            </div>
        </div>
    </section>

    <!-- Modules Section -->
    <section id="modules" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Modules Disponibles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-2xl font-semibold mb-4">Chat</h3>
                    <p class="text-gray-600">Discutez avec vos amis et collègues en temps réel.</p>
                    <a href="#chat" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400">Accéder</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-2xl font-semibold mb-4">Fiche Étudiant</h3>
                    <p class="text-gray-600">Gérez et visualisez les profils des étudiants.</p>
                    <a href="<?php echo base_url('Cfiche'); ?>" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400">Accéder</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-2xl font-semibold mb-4">Contact</h3>
                    <p class="text-gray-600">Jetez un oeil autour de vous.</p>
                    <a href="<?php echo base_url('Ccontact'); ?>" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400">Accéder</a>
                </div>
                <!-- Ajouter d'autres modules ici -->
            </div>
        </div>
    </section>