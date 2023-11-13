<!DOCTYPE html>
<html>
<head>
    <title>Mon Layout</title>
</head>
<body>
    <header>
        @slot('header')
            <!-- Contenu de l'en-tête -->
        @endslot
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @slot('footer')
            <!-- Contenu du pied de page -->
        @endslot
    </footer>
</body>
</html>
