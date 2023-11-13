<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freinage</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">
</head>
<body>
    <section>
        <div class="row">
            <div class="offset-2 col-md-5 card">
                <h1>Controle du freinage</h1>
                <p>
                Pour faire l’entretien régulier de votre voiture, surveillez les freins. 
                Le garagiste doit vérifier les plaquettes de freins et les disques au moins une fois par an. 
                Il devra également voir si le freinage ne présente pas des bruits anormaux ou des grincements inhabituels.
                </p>
                <img src="{{ asset('images/freins.jpg')}}" alt="" width="255px" height="200px">
            </div>
            <div class="col">
            <a href="{{route('espaceclient')}}"><span>Retour</span></a>
            </div>
        </div>
    </section>
</body>
</html>