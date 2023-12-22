<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Pierre, Feuille, Ciseaux</title>
</head>
<body>
    <h1>Jeu de Pierre, Feuille, Ciseaux</h1>
    <form action="" method="post">
        <label for="choix">Choisissez :</label>
        <select id="choix" name="choix">
            <option value="pierre">Pierre</option>
            <option value="feuille">Feuille</option>
            <option value="ciseaux">Ciseaux</option>
        </select>
        <button type="submit">Jouer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $options = ['pierre', 'feuille', 'ciseaux'];
        $choixOrdinateur = $options[array_rand($options)];
        $choixJoueur = $_POST['choix'];

        echo "<p>Ordinateur : $choixOrdinateur</p>";
        echo "<p>Joueur : $choixJoueur</p>";

        if ($choixJoueur === $choixOrdinateur) {
            echo "<p>Égalité !</p>";
        } elseif (
            ($choixJoueur === 'pierre' && $choixOrdinateur === 'ciseaux') ||
            ($choixJoueur === 'feuille' && $choixOrdinateur === 'pierre') ||
            ($choixJoueur === 'ciseaux' && $choixOrdinateur === 'feuille')
        ) {
            echo "<p>Le joueur gagne !</p>";
        } else {
            echo "<p>L'ordinateur gagne !</p>";
        }
    }
    ?>
        <h1>Helloworld</h1>
</body>
</html>
