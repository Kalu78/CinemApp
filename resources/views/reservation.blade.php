@include('layouts/header')

<div class="info_reservation">
    <h1>Merci {{$user}} pour votre reservation !</h1>
    <h2> Voici vos places pour le film {{$titre}} : Place n°{{ $places }} </h2>
    <h2>Vous pouvez retrouver toutes vos réservations sur la page <a href="/account"><i>account</i></a> </h2>
</div>