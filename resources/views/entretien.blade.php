
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de suivi d'entretien</title>
    <style>
        
body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select, input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            height: 40px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Formulaire de suivi d'entretien</h1>
    <form id="event-form" action="{{ route('entretien.store') }}" method="post">
            @csrf
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
    
    <
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
<label for="event-price" style="display: none;">Prix :</label>
<input type="number" id="event-price" style="display: none;" name="price">

<button type="submit">Enregistrer</button>
    </form>
    @if (session('success'))
    
   
        <div class="alert alert-success">
        {{ session('success') }}
         </div>
        @endif
</div>

<script>
    const eventTitle = document.getElementById("event-title");
    const eventTitleSub = document.getElementById("event-title-sub");
    const eventPrice = document.getElementById("event-price");

    eventTitle.addEventListener("change", function () {
        if (eventTitle.value === "Remplacement de pièces") {
            eventTitleSub.style.display = "block";
        } else {
            eventTitleSub.style.display = "none";
        }

        if (eventTitle.value === "Vidange" || eventTitle.value === "Inspection" || eventTitle.value === "Remplacement de pièces") {
            eventPrice.style.display = "block";
        } else {
            eventPrice.style.display = "none";
        }
    });
</script>

</body>
</html>
