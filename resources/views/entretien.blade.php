
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de suivi d'entretien</title>
    <link rel="stylesheet" href="{{asset('style/entretien.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">

</head>
<body>
<div class="row">
    <h1>Enregistrer votre entretien</h1>
    <div class=" col-md-5 container">
        <form id="event-form" action="{{ route('entretien.store') }}" method="post">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" id="event-name" name="name" required>

                <label for="event-title">Services :</label>
            <select id="event-title" name="service" required>
                <option value="Vidange">Vidange</option>
                <option value="Remplacement de pièces">Remplacement de pièces</option>
                <option value="Inspection">Inspection</option>
            </select>

            <label for="event-title-sub" style="display: none;">Type de remplacement :</label>
            <select id="event-title-sub" style="display: none;" name="pieces">
                <option value="Capteurs">Capteurs</option>
                <option value="Rotule">Rotule</option>
                <option value="Plaquettes de freins">Plaquettes de freins</option>
            <option value="Pompes">Pompes</option>
            </select>

            <!-- Champ pieces par défaut (caché) -->
            <input type="hidden" name="pieces" value="null" id="pieces-null">

            <label for="event-date">Date :</label>
            <input type="date" name="date" id="event-date" required>

            <label for="event-odometer">Compteur :</label>
            <input type="number" id="event-odometer" name="odometer" required>

            <label for="event-next-service-date">Compteur du prochain service :</label>
            <input type="number" name="next_service_odometer" id="event-next-service-odometer" required>

            <!-- Champ "prix" (caché) -->
            <label for="event-price" >montant/main d'ouevre :</label>
            <input type="integer" id="event-price" name="price">

            <button type="submit">Enregistrer</button>
        </form>
    </div>
    <div class="col-md-5">
        <img src="{{asset('images/12094.png')}}" alt="">
    </div>

        @if (session('success'))


        <div class="alert alert-success">
        {{ session('success') }}
         </div>
        @endif
</div>

<script>
    const eventTitle = document.getElementById("event-title");
    const eventTitleSub = document.getElementById("event-title-sub");


    eventTitle.addEventListener("change", function () {
        if (eventTitle.value === "Remplacement de pièces") {
            eventTitleSub.style.display = "block";
        } else {
            eventTitleSub.style.display = "none";
        }

    });
</script>

</body>
</html>
