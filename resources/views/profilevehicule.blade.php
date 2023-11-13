<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil du véhicule</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* Styles spécifiques au formulaire du profil du véhicule */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="number"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
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

/* Ajustez ces styles en fonction de vos préférences de design */

    </style>
    <header>
        <h1>Profil du véhicule</h1>
    </header>
    <main>
        <form id="vehicle-profile-form" action="{{ route('profil.store') }}" method="post">
                @csrf

            <label for="name">Nom du propriétaire :</label>
            <input type="text" id="name" name="name" required>
            
            <label for="vehicle-make">Marque :</label>
            <input type="text" id="vehicle-make" name="vehicle_make" required>
            
            <label for="vehicle-model">Modèle :</label>
            <input type="text" id="vehicle-model" name="vehicle_model" required>
            
            <label for="vehicle-year">Année :</label>
            <input type="number" id="vehicle-year" name="vehicle_year" required>
            
            <label for="vehicle-vin">Numéro de série (VIN) :</label>
            <input type="text" id="vehicle-vin" name="vehicle_vin" required>
            
            <button type="submit">Enregistrer</button>
        </form>
        @if (session('success'))
    
   
        <div class="alert alert-success">
        {{ session('success') }}
         </div>
        @endif
    </main>
</body>
</html>
