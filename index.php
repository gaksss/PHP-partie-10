<?php



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (!empty($_POST)) {
        echo '<div class="form-container">';

        echo "<h1>Récapitulatif des données envoyées</h1>";
        echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
        echo "Prénom : " . htmlspecialchars($_POST['prenom']) . "<br>";
        echo "Date de naissance : " . htmlspecialchars($_POST['date_naissance']) . "<br>";
        echo "Pays de naissance : " . htmlspecialchars($_POST['pays_naissance']) . "<br>";
        echo "Nationalité : " . htmlspecialchars($_POST['nationalite']) . "<br>";
        echo "Adresse : " . htmlspecialchars($_POST['adresse']) . "<br>";
        echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Téléphone : " . htmlspecialchars($_POST['telephone']) . "<br>";
        echo "Diplôme : " . htmlspecialchars($_POST['diplome']) . "<br>";
        echo "Numéro Pôle Emploi : " . htmlspecialchars($_POST['pole_emploi']) . "<br>";
        echo "Nombre de badges : " . htmlspecialchars($_POST['badges']) . "<br>";
        echo "Liens Codecademy : " . htmlspecialchars($_POST['codecademy']) . "<br>";
        echo "Super héros/héroïne : " . htmlspecialchars($_POST['super_hero']) . "<br>";
        echo "Hack : " . nl2br(htmlspecialchars($_POST['hack'])) . "<br>";
        echo "Expérience en programmation : " . nl2br(htmlspecialchars($_POST['experience'])) . "<br>";

        echo "</div>";
    } else {

    ?>
        <div class="form-container">
            <h1>Formulaire d'inscription</h1>
            <form method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance" required>
                </div>
                <div class="form-group">
                    <label for="pays_naissance">Pays de naissance</label>
                    <input type="text" id="pays_naissance" name="pays_naissance" required>
                </div>
                <div class="form-group">
                    <label for="nationalite">Nationalité</label>
                    <input type="text" id="nationalite" name="nationalite" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="diplome">Diplôme</label>
                    <select id="diplome" name="diplome" required>
                        <option value="">-- Sélectionnez --</option>
                        <option value="sans">Sans</option>
                        <option value="bac">Bac</option>
                        <option value="bac+2">Bac+2</option>
                        <option value="bac+3">Bac+3 ou supérieur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pole_emploi">Numéro Pôle Emploi</label>
                    <input type="text" id="pole_emploi" name="pole_emploi" required>
                </div>
                <div class="form-group">
                    <label for="badges">Nombre de badges</label>
                    <input type="number" id="badges" name="badges" required>
                </div>
                <div class="form-group">
                    <label for="codecademy">Liens Codecademy</label>
                    <input type="url" id="codecademy" name="codecademy">
                </div>
                <div class="form-group">
                    <label for="super_hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <textarea id="super_hero" name="super_hero" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea id="hack" name="hack" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea id="experience" name="experience" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Soumettre</button>
                </div>
            </form>
        </div>
    <?php
    }
    
    ?>
</body>

</html>