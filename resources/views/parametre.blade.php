<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('style/parametre.css')}}">

    <title>Paramettres</title>
</head>
<body>
    <section>
        <div>
            <main>
                <div class="row">
                    <div class="col">
                        <form action="{{ route('annee') }}" method="post">
                            @csrf

                            <label for="annee">Années</label>
                            <input type="integer" id="annee" name="libellee_annee" required min="1990" max="9999">

                            <button type="submit">Ajouter</button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ route('marque') }}" method="post">
                            @csrf

                            <label for="marque">Marques</label>
                            <input type="text" id="marque" name="libellee_marque" required>

                            <button type="submit">Ajouter</button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ route('model') }}" method="post">
                            @csrf

                            <label for="modelveh">Modèles</label>
                            <input type="text" id="modelveh" name="libellee_models" required>

                            <button type="submit">Ajouter</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </section>
</body>
</html>
