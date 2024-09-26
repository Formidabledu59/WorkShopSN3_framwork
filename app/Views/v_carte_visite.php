<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Rencontre Amicale - La Belle & l’EPSI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3b82f6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>La Belle & l’EPSI </h1>
        <form action="#" method="POST">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" required>

            <label for="sexe">Sexe :</label>
            <select id="sexe" name="sexe" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Non-binaire">Non-binaire</option>
                <option value="Prefere ne pas repondre">Préfère ne pas répondre</option>
            </select>

            <label for="ville">Ville de résidence :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="niveau">Niveau d’études :</label>
            <select id="niveau" name="niveau" required>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="B3">B3</option>
                <option value="M1">M1</option>
                <option value="M2">M2</option>
            </select>

            <label for="domaine">Domaine d’études :</label>
            <input type="text" id="domaine" name="domaine" required>

            <label for="langues">Langues parlées :</label>
            <input type="text" id="langues" name="langues" required>

            <label for="sport">Aimez-vous le sport ?</label>
            <select id="sport" name="sport" required>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
                <option value="Parfois">Parfois</option>
            </select>

            <label for="genre_musique">Quel genre de musique écoutez-vous ?</label>
            <input type="text" id="genre_musique" name="genre_musique" required>

            <label for="soiree">Préférez-vous les soirées tranquilles ou sortir avec des amis ?</label>
            <select id="soiree" name="soiree" required>
                <option value="Soirées tranquilles">Soirées tranquilles</option>
                <option value="Sortir avec des amis">Sortir avec des amis</option>
            </select>

            <label for="voyages">Aimez-vous voyager ?</label>
            <select id="voyages" name="voyages" required>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
                <option value="Parfois">Parfois</option>
            </select>

            <label for="destination_revee">Quelle est votre destination de voyage rêvée ?</label>
            <input type="text" id="destination_revee" name="destination_revee" required>

            <label for="intro_extro">Êtes-vous plutôt introverti(e) ou extraverti(e) ?</label>
            <select id="intro_extro" name="intro_extro" required>
                <option value="Introverti(e)">Introverti(e)</option>
                <option value="Extraverti(e)">Extraverti(e)</option>
                <option value="Un peu des deux">Un peu des deux</option>
            </select>

            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>
</html>
