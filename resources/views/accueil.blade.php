@include('layouts/header')
<div class="ui divider nav"></div>
<body class="accueil">
    <main>
        <div class="film_semaine">
            <h1> Films de la semaine : </h1>

            <div class="glider-contain">
                <div class="glider">
                @foreach($films as $film)
                    <a href="{{route('film', ['id' => $film->id]) }}">
                        <div class="carousel">
                            <img src=" {{$film->image}} " height="400px" width="300px">
                        </div>
                    </a>
                @endforeach
                </div>  
                <button aria-label="Previous" class="glider-prev"> < </button>
                <button aria-label="Next" class="glider-next"> > </button>
            </div>
        </div>
        <div class="ui divider film"></div>
        <div class="film_salle">
            <h1> Films actuellement en salle : </h1>
            <div class="allFilm">
                @foreach($films as $film)
                <div class="filmOverlay">
                    <a href="{{route('film', ['id' => $film->id]) }}">
                        <div class="filmImg">
                            <img src=" {{$film->image}}" class="testx" height="400px" width="300px">
                        </div>
                    </a>
                    <div class="filmTitre">
                        <h2> {{$film->titre}} </h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>  
    <script src="/js/glider.min.js"></script> 
    <script src="/js/script.js"></script> 
    </body>
</html>