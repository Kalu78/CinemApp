@include('layouts/header')
    

    <body>
    <main>
        <content>
            <div class="film">
                <div class="info">
                    <div id="imageFilm" class="imageFilm">
                        <img src="{{$image}}"  height="500px" width="375px">
                    </div>
                    <div class="rightContent">
                        <div class="titre">
                            <h1> {{$titre}} </h1>
                        </div>
                        <div class="description">
                            <h2> {{$description}} </h2>
                        </div>
                        <div class="temps">
                            <h4><i class="far fa-clock"></i> {{ $durée }} </h4>
                        </div>
                        <div class="trailer">
                            <a href="{{$trailer}}" target="_blank"><button><h4>Watch trailer</h4></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book">
                <div class="titlePlace">
                    <h1 class="ui horizontal divider header">
                        BOOK A SEAT
                    </h1>
                </div>
                <div class='place'>
                @if($errors->any())
                    <h3>{{$errors->first()}}</h3>
                @endif
                    <div class="visualisation">
                        <h2> Salle n°{{$salle_id}} </h2>
                        <form id="form" autocomplete="off" method="post" action="reservation">
                        <input type="hidden" name="titre" value="{{$titre}}" />
                        {{ csrf_field() }}
            
                        @if ($salle_id == 1)
                            @foreach($place1 as $salle1_place)
                            <div class="case">   
                                <p>{{ $salle1_place->id }}</p>                                                   
                                @if ($salle1_place->reserve == NULL)
                                    <div class="ui checkbox">
                                        <input type="checkbox" class="checkbox" id="checkbox" name="place_id[]" value="{{$salle1_place->id}}"> 
                                        <label></label>
                                    </div>
                                @elseif ($salle1_place->reserve == 1)
                                    <div class="ui disabled checkbox">
                                        <input type="checkbox" class="checkbox" disabled="disabled"> 
                                        <label></label>
                                    </div>
                                @endif
                            </div>
                            @endforeach                            
                        @endif

                        @if ($salle_id == 2)
                            @foreach($place2 as $salle2_place)
                            <div class="case">
                                <p>{{ $salle2_place->id }}</p>
                                    @if ($salle2_place->reserve == NULL)
                                        <div class="ui checkbox">
                                            <input type="checkbox" class="checkbox" name="place_id[]" value="{{$salle2_place->id}}"> 
                                            <label></label>
                                        </div>
                                    @elseif ($salle2_place->reserve == 1)
                                        <div class="ui disabled checkbox">
                                            <input type="checkbox" class="checkbox" disabled="disabled"> 
                                            <label></label>
                                        </div>
                                    @endif
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="reservation">
                        <h2>Selected seats :</h2>
                        <h3> <span id="count-checked-checkboxes"> 0 </span> seat(s) </h3>
                        <h3> 
                        <h3> Total : <span id="count-price"> 0 </span> € </h3>
                        <button class="ui button" type="submit">Reserve ticket(s)</button>
                    </div>
                </form>
                        
            </div>
        </content>
    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>  
    <script src="/js/film.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            var $checkboxes = $('#form input[type="checkbox"]');
            
            $checkboxes.change(function(){
                var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
                $('#count-checked-checkboxes').text(countCheckedCheckboxes);
                $('#count-price').text(countCheckedCheckboxes * 10);
            });

        });
    </script>
</body>
</html>