<!DOCTYPE html>
<html lang="fr">
<body>
<header>
    <nav>
        <a href="#section1">Accueil</a>
        <a href="#section2">Contactez-moi</a>
    </nav>
</header>

        <!-- section1 -->
<section id="section1">
    <div class="row">
        <img src="https://picsum.photos/200/150" alt="random">
        <p>Mettre du texte random</p>
        <p>Mettre du texte random</p>
    </div>
</section>  

        <!-- section2 -->
<section id="section2">
    <div class="row">

        <img src="https://picsum.photos/200/150" alt="random">

        <form method="POST">
            <p>Nom : <input type="text" name="nom" required></p>
            <p>Email : <input type="email" name="email" required></p>

            <button type="submit">Validez</button>

            <?php 
                if (!empty($_POST)) {

                    $nom = trim($_POST['nom']);
                    $email = trim($_POST['email']);

                    if ($nom !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<p class="message success">Votre demande est bien envoyée !</p>';
                    } else {
                        echo '<p class="message error">Vos informations ne sont pas correctes</p>';
                    }
                }
            ?>
        </form>

    </div>
</section>

<footer>
    Page web faite par nolan
    <strong>
        <?php
            $premier_prenom = "baptiste";
            echo $premier_prenom;
        ?>
    </strong>
    venant de la base de données Php.
</footer>

</body>