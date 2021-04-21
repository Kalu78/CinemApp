<!doctype html>
<html lang="en">
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/connexion.css" rel="stylesheet">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  </head>

<body style="background: linear-gradient(180deg, #ED5757 0%, #F06E6E 5.73%, #E79595 38.54%, #D2ADAD 70.83%, #FFFFFF 100%)" class="signUpContent">
    <div class="title">
        <h1 class="ui center aligned icon header">
            <a href="/">
                <img class="logo" src="/img/logo.jpg" witdh="100px" height="100px" href="test.html">
            </a>
            Create a new account
        </h1>
    </div>

    <div class="login">

        <form class="ui form" method="post" action="signup">
            
            {{ csrf_field() }}
            
            <div class="field">
                <label>Prenom</label>
                <input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                @if($errors->has('prenom'))
                    <p> {{ $errors->first('prenom') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}">
                @if($errors->has('nom'))
                    <p> {{ $errors->first('nom') }} </p>
                @endif
            </div>

            <div class="field">
                <label>E-mail</label>
                <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <p> {{ $errors->first('email') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @if($errors->has('password'))
                    <p> {{ $errors->first('password') }} </p>
                @endif
            </div>

            <div class="field">
                <label>Password confirmation</label>
                <input type="password" name="password_confirmation" placeholder="Password confirmation" value="{{ old('password_confirmation') }}">
                @if($errors->has('password_confirmation'))
                    <p> {{ $errors->first('password_confirmation') }} </p>
                @endif
            </div>

            <button class="ui button" type="submit">Submit</button>

        </form>
    </div>
    <div class="new">
        <h3>Already have an account ? <a href="login"> Login !</a>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>  
    <script src="/js/film.js"></script> 
</body>