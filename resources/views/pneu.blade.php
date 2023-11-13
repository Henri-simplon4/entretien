<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pneus</title>
</head>
<body>
    <section>
        <h1>Vérification de l'etat de vos pneus</h1>
        <div class="row">
            <div class="col">
                <h3>L’état des reliefs</h3>
                <p>
                Les reliefs du pneu doivent être profonds, visibles et bien sculptés. Le code de la route précise qu’ils ne doivent pas faire moins de 1,6 mm.
                Vous pouvez facilement vérifier leur profondeur grâce aux témoins d’usure présents dans les rainures principales du pneu.
                </p>
                <img src="{{ asset('images/pneu.jpg')}}" alt="" width="260px" height="170px">

            </div>
            <div class="col">
                <h3>La pression des pneus</h3>
                <p>
                Il est conseillé de vérifier la pression des pneus au moins une fois par mois.
                Pour cela, rendez-vous dans une station service ou procurez-vous un nanomètre.
                </p>
                <img src="{{ asset('images/flanc.jpg')}}" alt="" width="255px" height="200px">

            </div>
            <div class="col">
                <h3> Les flancs</h3>
                <p>
                Contrôlez la partie latérale du pneu.
                Regardez qu’il n’y ait aucune boursouflure ni de déchirure.
                Sinon, il est temps de changer de pneu !
                </p>
                <img src="{{ asset('images/pression.jpg')}}" alt="" width="255px" height="200px">

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
h1,h3{
  color: orange;
}

img{
  padding-left:50px;
}

/* Style the paragraph at the top */
section p {
  font-size: 20px;
  color: #333;
  margin-bottom: 20px;
}

/* Style the headings for each column */
h3 {
  font-size: 20px;
  color: #333;
  margin-bottom: 10px;
}

/* Style the paragraphs within columns */
p {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

/* Style the rows and columns */
.row {
  display: flex;
  flex-wrap: wrap;
}

.col {
  flex: 1;
  padding: 15px;
  border: 1px solid #ddd;
  background-color: #fff;
  margin: 5px;
  box-shadow: 8px 8px 12px #aaa;
}

/* Add some spacing between columns for better readability */
.col + .col {
  margin-left: 20px;
}

/* Style links (if any) */
a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>
</html>