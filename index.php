<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../images/gand" />
    <title>Générateur de civilisation Civ 6</title>
</head>
<body>
    <header>
        <h1>Générateur aléatoire de civilisation</h1>
    </header>
    <section class="container">
        <div class="box">
            <div class="contenue">
                <!-- Les civilisations -->
                <?php
                $civilisations = [
                    "Allemagne" => [
                        "Représentant" => "Frédéric Barberousse",
                        "Extention" => "Classique"                
                    ],
                    "Amérique" => [
                        "Représentant" => "Theodore Roosevelt",
                        "Extention" => "Classique"
                    ],
                    "Angleterre" => [
                        "Représentant" => "Aliénor d'Aquitaine",
                        "Extention" => "GS"
                    ],
                    "Angleterre" => [
                        "Représentant" => "Victoria",
                        "Extention" => "Classique"
                    ],
                    "Arabie" => [
                        "Représentant" => "Saladin",
                        "Extention" => "GS"
                    ],
                    "Australie" => [
                        "Représentant" => "John Curtin",
                        "Extention" => "Classique"
                    ],
                    "Aztèque" => [
                        "Représentant" => "Moctezuma",
                        "Extention" => "Classique"
                    ],
                    "Brésil" => [
                        "Représentant" => "Pierre II du Brésil",
                        "Extention" => "Classique"
                    ],
                    "Canada" => [
                        "Représentant" => "Wilfrid Laurier",
                        "Extention" => "GS"
                    ],
                    "Chine" => [
                        "Représentant" => "Qui Shi Huangdi",
                        "Extention" => "Classique"
                    ],
                    "Corée" => [
                        "Représentant" => "Seondeok",
                        "Extention" => "R&F"
                    ],
                    "Cris" => [
                        "Représentant" => "Poundmaker",
                        "Extention" => "R&F"
                    ],
                    "Écosse" => [
                        "Représentant" => "Robert Bruce",
                        "Extention" => "R&F"
                    ],
                    "Égypte" => [
                        "Représentant" => "Cléopâtre",
                        "Extention" => "Classique"
                    ],
                    "Espagne" => [
                        "Représentant" => "Philippe II",
                        "Extention" => "Classique"
                    ],
                    "France" => [
                        "Représentant" => "Aliénor d'Aquitaine",
                        "Extention" => "GS"
                    ],
                    "France" => [
                        "Représentant" => "Catherine de Médicis",
                        "Extention" => "Classique"
                    ],
                    "Géorgie" => [
                        "Représentant" => "Tamar",
                        "Extention" => "R&F"
                    ],
                    "Grèce" => [
                        "Représentant" => "Gorgô",
                        "Extention" => "Classique"
                    ],
                    "Grèce" => [
                        "Représentant" => "Périclès",
                        "Extention" => "Classique"
                    ],
                    "Hongrie" => [
                        "Représentant" => "Matthias Corvin",
                        "Extention" => "GS"
                    ],
                    "Incas" => [
                        "Représentant" => "Pachacutec",
                        "Extention" => "GS"
                    ],
                    "Inde" => [
                        "Représentant" => "Gandhi",
                        "Extention" => "Classique"
                    ],
                    "Inde" => [
                        "Représentant" => "Chandgragupta",
                        "Extention" => "R&F"
                    ],
                    "Indonésie" => [
                        "Représentant" => "Dyah Gitarja ",
                        "Extention" => "Classique"
                    ],
                    "Japon" => [
                        "Représentant" => "Hōjō Tokimune",
                        "Extention" => "Classique"
                    ],
                    "Kongo" => [
                        "Représentant" => "Mvemba a Nzinga",
                        "Extention" => "Classique"
                    ],
                    "Macédoine" => [
                        "Représentant" => "Alexandre",
                        "Extention" => "Classique"
                    ],
                    "Mali" => [
                        "Représentant" => "Mansa Moussa",
                        "Extention" => "GS"
                    ],
                    "Maoris" => [
                        "Représentant" => "Kupe",
                        "Extention" => "GS"
                    ],
                    "Mapuches" => [
                        "Représentant" => "Lautaro",
                        "Extention" => "R&F"
                    ],
                    "Mongolie" => [
                        "Représentant" => "Gengis Khan",
                        "Extention" => "R&F"
                    ],
                    "Norvège" => [
                        "Représentant" => "Harald Hardrade",
                        "Extention" => "Classique"
                    ],
                    "Nubie" => [
                        "Représentant" => "Aminatoré",
                        "Extention" => "Classique"
                    ],
                    "Ottomans" => [
                        "Représentant" => "Soliman Ier",
                        "Extention" => "Classique"
                    ],
                    "Pays-Bas" => [
                        "Représentant" => "Wilhelmine",
                        "Extention" => "R&F"
                    ],
                    "Perse" => [
                        "Représentant" => "Cyrus",
                        "Extention" => "Classique"
                    ],
                    "Peuple khmer" => [
                        "Représentant" => "Jayavrman VII",
                        "Extention" => "Classique"
                    ],
                    "Phénicie" => [
                        "Représentant" => "Didon",
                        "Extention" => "GS"
                    ],
                    "Pologne" => [
                        "Représentant" => "Hedwige Ière",
                        "Extention" => "Classique"
                    ],
                    "Rome" => [
                        "Représentant" => "Trajan",
                        "Extention" => "Classique"
                    ],
                    "Russie" => [
                        "Représentant" => "Pierre Ier le Grand",
                        "Extention" => "Classique"
                    ],
                    "Scythie" => [
                        "Représentant" => "Tomyris",
                        "Extention" => "Classique"
                    ],
                    "Suède" => [
                        "Représentant" => "Christine de Suède",
                        "Extention" => "GS"
                    ],
                    "Sumer" => [
                        "Représentant" => "Gilgamesh",
                        "Extention" => "Classique"
                    ],
                    "Zoulous" => [
                        "Représentant" => "Chaka",
                        "Extention" => "Classique"
                    ],

                ];

                $randomCountry = array_rand($civilisations);
                ?>

                <p><?= $randomCountry.":"?></p>
                <p>Représentant :<?= $civilisations[$randomCountry]["Représentant"]?></p>
                <p><?= $civilisations[$randomCountry]["Extention"]?></p>
                
              
                
                
                <button class="alignement" onClick="window.location.reload();">Une autre civilisation ?</button>               
            </div>
        </div>        
    </section>
    <footer>
        <p>Civilisation 6 est un jeu édité par <a href="https://www.2k.com/en-US/">2K games</a>. "Mon site" est un site non-officiel sans aucun lien avec 2K games.</p>
    </footer>
</body>
</html>