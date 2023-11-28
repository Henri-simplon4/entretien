<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">


    <style>
        .dataTables_wrapper {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <table id="myTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Service</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Numéro de série</th>
                <th>Pièces</th>
                <th>Odomètre</th>
                <th>Prochain entretien</th>
                <th>Prix</th>
                <th>Nom</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entretiens as $entretien)
            <tr>
                <td>{{ $entretien->service }}</td>
                <td>{{ optional($entretien->profil)->vehicle_make }}</td>
                <td>{{ optional($entretien->profil)->vehicle_model }}</td>
                <td>{{ optional($entretien->profil)->vehicle_year }}</td>
                <td>{{ optional($entretien->profil)->vehicle_vin }}</td>
                <td>{{ $entretien->pieces }}</td>
                <td>{{ $entretien->odometer }}</td>
                <td>{{ $entretien->next_service_odometer }}</td>
                <td>{{ $entretien->price }}</td>
                <td>{{ optional($entretien->profil)->name }}</td>
                <td>{{ $entretien->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal{{$entretien->id}}">
                        Details
                    </button>
                    <!-- Delete button (opens delete confirmation modal) -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$entretien->id}}">
                Delete
            </button>
            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteModal{{$entretien->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete {{ $entretien->service }}?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{ route('supprimer', $entretien) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="modal fade" id="detailsModal{{$entretien->id}}" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Details for {{ $entretien->service }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Add details content here -->
                            <p>Vehicle Make: {{ optional($entretien->profil)->vehicle_make }}</p>
                            <p>Vehicle Model: {{ optional($entretien->profil)->vehicle_model }}</p>
                            <!-- Add more details as needed -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('accueil') }}">
        <button class="btn-seccondary">Retour</button>
    </a>


    <script>
        $(document).ready(function () {
            let table = $('#myTable').DataTable({
                "order": [[0, "desc"]],
                "language": {
                    "lengthMenu": "Afficher _MENU_ lignes par page",
                    "zeroRecords": "Aucun résultat trouvé",
                    "info": "Affichage de la page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun résultat trouvé",
                    "infoFiltered": "(filtré sur _MAX_ résultats)",
                    "search": "Rechercher :",
                    "paginate": {
                        "first": "Premier",
                        "last": "Dernier",
                        "next": "Suivant",
                        "previous": "Précédent"
                    }
                }
            });
        });
    </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
