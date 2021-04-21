@include('layouts/header')

<body>
        <div class="table_titre">
                <h2> Mes reservations : </h2>
                <div class="table">
                        <table class="ui celled table">
                                <thead>
                                <tr><th>Numéro de reservation</th>
                                <th>Film</th>
                                <th>Numéro(s) de place(s)</th>
                                </tr></thead>
                        @foreach ($reservations as $reservation) 
                                <tbody>
                                <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->film_title }}</td>
                                <td>{{ $reservation->place_id}}</td>
                                </tr>
                                </tbody>
                        @endforeach 
                        </table>
                </div>
        </div>
</body>