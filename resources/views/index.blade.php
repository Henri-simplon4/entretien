@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Statistiques</div>
                <div class="card-body">
                    <p>Nombre total de véhicules : {{ $totalVehicles }}</p>
                    <!-- Ajoutez d'autres statistiques ici -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Prochains entretiens</div>
                <div class="card-body">
                    <ul>
                        @foreach($upcomingMaintenance as $maintenance)
                            <li>{{ $maintenance->description }} - {{ $maintenance->date }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
