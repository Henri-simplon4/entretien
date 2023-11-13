<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protection du véhicule</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">

</head>
<body>
    <section>
        <h1 class="pl-5">Protection de votre véhicule</h1>
        <div class="row pt-5">
            <div class=" offset-1 col-md-3 ">
            <img src="{{ asset('images/couvrir.jpg')}}" alt="" width="255px" height="200px">
            <p>
                Toujours couvrir le véhicule
            </p>
            </div>
            <div class="col-md-3 offset-2 ">
                <div class="col-md-3">
                <img src="{{ asset('images/hangar.jpg')}}" alt="" width="250px" height="250px">
                </div>
                <div class="col">
                <p>
                Garer votre véhicule sous un hangar ou dans le garrage de la maison
                </p>
                </div>
            </div>
            <div class="col">
            <a href="{{route('espaceclient')}}"><span>Retour</span></a>
            </div>
        </div>
    </section>
</body>
</html>