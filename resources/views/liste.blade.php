<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>
<body>

<x-layout>
    <x-slot name="header">
        <!-- Contenu de l'en-tête -->
    </x-slot>

    @section('content')
        <!-- Contenu principal de la vue -->
    @endsection

    <x-slot name="footer">
        <!-- Contenu du pied de page -->
    </x-slot>
</x-layout>


<ul>
@extends('layouts.app')

@section('content')
    <h1>List of Items</h1>

    <h2>Profils:</h2>
    <ul>
        @foreach ($profils as $profil)
            <li>
                Name: {{ $profil->name }}
                Vehicle Make: {{ $profil->vehicle_make }}
                Vehicle Model: {{ $profil->vehicle_model }}
                Vehicle Year: {{ $profil->vehicle_year }}
                Vehicle VIN: {{ $profil->vehicle_vin }}
            </li>
        @endforeach
    </ul>

    <h2>Entretiens:</h2>
    <ul>
        @foreach ($services as $service)
            <li>Service: {{ $service->service }}</li>
        @endforeach
    </ul>
@endsection

</ul>

</body>
</html>