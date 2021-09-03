<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ route('homepage')}}">Home</a>
                    <a href="{{ route('chi-siamo')}}">About</a>
                    <a href="{{ route('nostri-contatti')}}">Contatti</a>
                    
                </div>

                <h2>{{ $title}}</h2>

                <ul>                    
                    @foreach ($nomi as $nome)
                        <li>
                            {{ $nome }}
                        </li>
                    @endforeach
                </ul>
            </div>
        
    </body>
</html>
