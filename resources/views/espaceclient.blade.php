<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord de gestion de l'entretien de la voiture</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">
</head>
<body>
    <style>
        /* Réinitialisation des styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styles généraux de la page */
body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

nav {
    background-color: #444;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style: none;
}

nav li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
}

main {
    padding: 20px;
}
.conseils{
    text-align: center;
}
.card{
    box-shadow: 8px 8px 12px #aaa;
}
.card:hover{
    background-color: rgba(255, 244, 241, 0.9);
    color: orange;
}
a{
    text-decoration: none;
    color: green;
}
section{
    background-image:url('');
    background-repeat: none;
}
.bvn{
    color: gray;
}

/* Styles spécifiques au tableau de bord */
/* Vous devrez personnaliser cette section en fonction de vos besoins. */

    </style>

    <header>
        <div class="row">
            <div class="col-md-2">
            <img src="{{ asset('images/Log.png')}}" alt="" width="100px" height="100px">
            </div>
            <div class="col pt-3">
            <h1>Bienvenue sur votre application Mon Véhicule et Moi</h1>
            </div>
        </div>

    </header>
    <nav>
        <ul>
            <li><a href="{{route('entretien.store')}}"id="entretien">Entretiens</a></li>
            <li><a href="{{route('entretien.store')}}">Historique</a></li>
            <li><a href="{{route('profil.store')}}">Profil du véhicule</a></li>
            <li><a href="{{route('piece')}}">Pièces de rechange</a></li>
            <li><a href="">Déconnexion</a></li>
        </ul>
    </nav>
    <main>
        <div id="calendar-container"></div> <!-- Le conteneur pour le calendrier -->
    </main>
    <section class="container-fluid">
    <div>
        <h2 class="bvn">
            <strong>Conseils pratiques pour la longevité de votre véhicule et surtout pour la sécurité routière.</strong>
        </h2>
    </div>
        <div class="row pt-5">
            <div class="col-md-3 offset-1 card">
                <h1>1</h1>
                <h2>Verifier les niveaux </h2>
                <a href="{{route('niveau')}}">details</a>
            </div>
            <div class="col-md-3 offset-1 card">
                <h1>2</h1>
                <h2>Vérifier l’état des pneus</h2>
                <a href="{{route('pneu')}}">details</a>
            </div>
            <div class="col-md-3 offset-1 card">
                <h1>3</h1>
                <h2>Vérifier le freinage</h2>
                <a href="{{route('frein')}}">details</a>
            </div>
        </div>
        <div class="row pt-5">
        <div class="col-md-3 offset-1 card">
                <h1>4</h1>
                <h2>Protéger votre véhicule</h2>
                <a href="{{route('protection')}}">details</a>
            </div>
            <div class="col-md-3 offset-1 card">
                <h1>5</h1>
                <h2>Contrôler les éclairages</h2>
                <a href="{{route('eclairage')}}">details</a>
            </div>
            <div class="col-md-3 offset-1 card">
                <h1>6</h1>
                <h2>Véhicule toujours propre</h2>
            </div>
        </div>
    </section>
    
</body>
</html>
