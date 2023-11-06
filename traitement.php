<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dorito club</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    </head>



    <body>
        <header class="bg-dark text-white">
            <div class="row justify-content-between">
                <div class="col-3">
                    <img src="img/logo.png" alt="triangle" class="img-fluid">
                </div>
            </div>
        </header>


        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white abs-top-right">
            <button class="navbar-toggler fixed-top-right" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="navbarOffcanvasLg">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?p=787b">787b</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?p=wankel">Wankel</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?p=mazda">Mazda</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?p=formulaire">Concours</a></li>
                </ul>
            </div>
        </nav>



        <main class="mt-5">
            <div class="container bg-dark text-white">
                <div class="row">
                    <div class="col-12 mt-3 mb-3">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $nom = $_POST["nom"];
                                $prenom = $_POST["prenom"];
                                $date = $_POST["date"];
                                $genre = $_POST["genre"];
                                $email = $_POST["email"];
                                $tel = $_POST["tel"];
                                $pilot = $_POST["pilot"];
                                $niveau = $_POST["niveau"];
                                $type_pilot = $_POST["type_pilot"];
                                $autre = $_POST["autre"];
                    
                                echo "Nom : " . $nom . "<br>";
                                echo "prenom : " . $prenom . "<br>";
                                echo "date de naissance : " . $date . "<br>";
                                echo "genre : " . $genre . "<br>";
                                echo "email : " . $email . "<br>";
                                echo "téléphone : " . $tel . "<br>";
                                echo "as déjà piloté : " . $pilot . "<br>";
                                echo "niveau : " . $niveau . "<br>";
                                echo "types de voitures pilotées : " . $type_pilot . "<br>";
                                echo "autre : " . $autre . "<br>";
                    
                            }
                        ?>
                    </div>
                </div>
            </div>
        </main>



        <footer class="bg-dark text-white text-left p-2 mt-5">
            <div class="row">
                <div class="col-10 text-start">
                    &copy; Copiedroite 
                </div>
                <div class="col-2 text-end">
                    Tous droits pas trop réservés 
                </div>
            </div>
        </footer>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>