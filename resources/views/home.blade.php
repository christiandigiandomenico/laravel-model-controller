<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Database</title>
</head>
<body>

    @foreach($movies as $movie)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->date}}</h6>
          <p class="card-text">{{$movie->vote}}</p>
        </div>
    </div>
    @endforeach
    
</body>
</html>