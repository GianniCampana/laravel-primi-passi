<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <h2>Ciamo mi chiamo {{$nome}} {{$cognome}}</h2>

    @if($nome === 'Gianni' && $cognome === 'Campana')
      <h1>Nome accettato</h1>
    @else
      <h1>Nome non accettano</h1>
      @endif

      <ul>
          @foreach ($albums as $album )
            <li>{{$album}}</li>
          @endforeach
      </ul>

</body>
</html>