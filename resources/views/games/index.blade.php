<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        body { 
            background: black; 
            color: white; 
        }
        
    </style>
</head>
<body>
    <h2>You have logged In as {{ $user->name }}</h2>
    <div class="container" id="dashboard">
        <a href="{{ route('games.create') }}" style="" class="btn btn-primary">Add Game</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Publisher</th>
                    <th>Release Date</th>
                    <th>Ram</th>
                    <th>Storage</th>
                    <th>GPU</th>
                    {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{ $game->genres->pluck('name')->implode(', ') }}</td>
                    <td>{{$game->publisher}}</td>
                    <td>{{$game->release_date}}</td>
                    <td>{{$game->requirement?->ram}}</td>
                    <td>{{$game->requirement?->storage}}</td>
                    <td>{{$game->requirement?->gpu}}</td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

</body>
</html>