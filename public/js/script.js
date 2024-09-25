const baseURL = 'http://workshop.local/';
// const baseURL = 'http://workshopsn3.alwaysdata.net/';

// S'assurer que le DOM est complètement chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function () {

    // Simple JS for smooth scrolling to sections
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            // Vérifie que l'élément cible existe avant d'utiliser scrollIntoView
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                console.error("Cible non trouvée pour le scroll:", this.getAttribute('href'));
            }
        });
    });

    // Récupérer les éléments du DOM
    const modal = document.getElementById('modal');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const confirmationMessage = document.getElementById('confirmationMessage');

    // Vérifie si les éléments existent avant d'ajouter les event listeners
    if (modal && registerForm && confirmationMessage) {

        // Afficher la boîte de connexion quand on clique sur "Connexion"
        const loginLink = document.querySelector('a[href="#login"]');
        if (loginLink) {
            loginLink.addEventListener('click', function (e) {
                e.preventDefault();
                modal.classList.remove('hidden');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                confirmationMessage.classList.add('hidden');
            });
        }

        // Afficher la boîte d'inscription quand on clique sur "ici"
        const registerLink = document.querySelector('a[href="#register"]');
        if (registerLink) {
            registerLink.addEventListener('click', function (e) {
                e.preventDefault();
                modal.classList.remove('hidden');
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
                confirmationMessage.classList.add('hidden');
            });
        }

        // Gestion de la soumission du formulaire d'inscription
        registerForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Empêche l'envoi par défaut du formulaire
            
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const message = document.getElementById('registerMessage').value;

            // Vérifier si l'email se termine par "@ecoles-epsi.net" ou "@ecoles-wis.net"
            const emailPattern = /@(ecoles-epsi\.net|ecoles-wis\.net)$/;

            if (!emailPattern.test(email)) {
                alert("L'adresse e-mail doit se terminer par '@ecoles-epsi.net' ou '@ecoles-wis.net'");
                return; // Arrêter l'exécution si l'email est invalide
            }

            // Vérification de la complexité du mot de passe
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
            if (!passwordPattern.test(password)) {
                alert("Le mot de passe doit contenir au moins 8 caractères, dont une majuscule, une minuscule et un chiffre.");
                return;
            }

            // Création des données à envoyer sous forme de URL-encoded
            const formData = new URLSearchParams();
            formData.append('mail', email);
            formData.append('pass', password);
            formData.append('msg', message);

            // Envoi des données à l'API
            fetch(`${baseURL}Api/Etudiant`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded' // Définir le type de contenu
                },
                body: formData.toString() // Convertir les données en chaîne URL-encoded
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors de l\'envoi des données');
                }
                return response.json(); // Convertir la réponse en JSON
            })
            .then(data => {
                console.log('Succès:', data);
                confirmationMessage.classList.remove('hidden'); // Afficher le message de confirmation
            })
            .catch((error) => {
                console.error('Erreur:', error);
            });
        });
    }

    // Cacher la modale en cliquant en dehors de celle-ci
    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });

});
