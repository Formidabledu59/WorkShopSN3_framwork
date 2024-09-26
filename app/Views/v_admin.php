        <!-- Main Content -->
        <main class="flex-1 p-10">
            <h2 class="text-4xl font-bold mb-6">Tableau de bord</h2>

            <!-- Stats Cards -->
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold">Total Utilisateurs</h3>
                    <p class="text-3xl font-bold">124</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold">Fiches Étudiants</h3>
                    <p class="text-3xl font-bold">98</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold">Connexions aujourd'hui</h3>
                    <p class="text-3xl font-bold">12</p>
                </div>
            </div>

            <!-- Graphs and Activity -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold mb-4">Activité récente</h3>
                <canvas id="activityChart" class="w-full h-64 bg-white shadow-md rounded-lg"></canvas>
            </div>
        </main>
        </div>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('activityChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'],
                    datasets: [{
                        label: 'Connexions par jour',
                        data: [10, 15, 12, 18, 9],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                }
            });
        </script>