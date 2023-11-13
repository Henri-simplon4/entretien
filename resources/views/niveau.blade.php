<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveaux</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">

</head>
<body>
    <section>
        <h4> Garez votre véhicule sur un sol plat. Coupez le moteur puis ouvrez le capot</h4>
        <div class="row">
            <div class="col">
           <h3>Vérification l’huile moteur</h3>
           <p>Attention, il convient de vérifier le niveau d’huile moteur 1 heure après avoir éteint le moteur. Autrement, vous risquez de vous faire asperger d’huile brûlante ou de mal lire le niveau.
                L’opération à effectuer est exactement la même que pour le liquide de transmission.
                De nouveau, il faut vérifier que le niveau est bien situé entre les deux marques sur la jauge.
            </p>
             <img src="{{ asset('images/jauge.jpg')}}" alt="" width="255px" height="200px">

            </div>
            <div class="col">
                <h3>Vérification liquide de réfroidissement</h3>
                    <p>
                    Vérifiez qu’il soit bien situé entre le niveau minimum et le niveau maximum indiqué.
                    </p>
                    <img src="{{ asset('images/refroi.jpg')}}" alt="" width="255px" height="200px">

            </div>
            <div class="col">
                <h3>Vérification l’huile de transmission</h3>
                <p>
                La vérification de l'huile de transmission se fait généralement lorsque le moteur est allumé et encore chaud.
                En vous référant au manuel du propriétaire de votre véhicule, trouvez la jauge du liquide de transmission. Retirez complètement la jauge et essuyez-la avec un vieux chiffon, puis replongez de nouveau la jauge dans le carter. Sortez-la de nouveau et lisez le niveau de liquide indiqué.
                Vérifiez que le niveau de liquide correspond à celui indiqué dans le manuel et ajustez-le si nécessaire.
                </p>
                <img src="{{ asset('images/transmi.jpg')}}" alt="" width="255px" height="200px">

            </div>
            <div class="col">
                <h3>Liquide de frein</h3>
                <p>
                À l’aide du manuel de votre véhicule, cherchez le réservoir de liquide de frein.
                En général, vous pouvez vérifier le niveau par transparence.
                Sinon, ouvrez le bouchon du réservoir et regardez à l’intérieur.
                </p> 
                <img src="{{ asset('images/frein.jpg')}}" alt="" width="255px" height="200px">

            </div>
        </div>
        <div class="row">
        <div class="col">
                <h3>Liquide de direction assistée</h3>
                <p>
                Comme pour le liquide de frein, celui de la direction assistée se situe dans un réservoir en plastique.
                Le réservoir présente deux lignes : la première pour le moteur à chaud et la deuxième pour le moteur à froid.
                Prenez en compte la ligne correspondant à l’état de votre véhicule.
                </p>
                <img src="{{ asset('images/direction.jpg')}}" alt="" width="455px" height="350px">

            </div>
            <div class="col">
                <h3>Liquide lave-glace</h3>
                <p>
                Il s’agit du liquide utilisé pour nettoyer le pare-brise. Peu coûteux, 
                il permet de retirer les insectes et saletés qui restent collés sur le pare-brise de la voiture.
                En hiver, optez pour un liquide lave-glace antigel, pour éviter les mauvaises surprises.
                </p>
                <img src="{{ asset('images/essuie.jpg')}}" alt="" width="455px" height="350px">

            </div>
        </div>
        <div class="col">
            <a href="{{route('espaceclient')}}"><span>Retour</span></a>
            </div>
    </section>
</body>
<style>
    /* Apply a background color to the section */
section {
  background-color: #f5f5f5;
  padding: 20px;
}

/* Style the headings */
h3 {
  font-size: 24px;
  color: orange;
  margin-bottom: 10px;
}

/* Style the paragraphs */
p {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

/* Style the rows and columns */
.row {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.col {
  flex: 1;
  padding: 15px;
  border: 1px solid #ddd;
  background-color: #fff;
  margin: 5px;
  box-shadow: 8px 8px 12px #aaa;
}

</style>
</html>