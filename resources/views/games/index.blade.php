
    @extends('layouts.app')

    @section('content')
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

@endsection