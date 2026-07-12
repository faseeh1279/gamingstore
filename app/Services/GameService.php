<?php 

namespace App\Services;

use App\Http\Requests\CreateGameRequest;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameService { 
   public $genres = [
        'Action',
        'Adventure',
        'Animation',
        'Comedy',
        'Crime',
        'Documentary',
        'Drama',
        'Family',
        'Fantasy',
        'History',
        'Horror',
        'Music',
        'Mystery',
        'Romance',
        'Science Fiction',
        'TV Movie',
        'Thriller',
        'War',
        'Western',
    ];
    public function createGame(Request $request): Game{ 
        $gameData = $request->only([
            'name', 'publisher', 'release_date'
        ]); 

        $requirementsData = $request->only([ 
            'ram', 'storage', 'gpu'
        ]); 

        $game = Game::create($gameData); 
        $game->requirement()->create($requirementsData); 
        $game->genres()->attach($request->genres);
        return $game; 
    }

    public function updateGame(Game $game, int $id){ 
        // $gameToUpdate = Game:
    }

    public function fetchGames(){ 
        $result = Game::with('requirement', 'genres')->get(); 
        return $result; 
    }

    public function fetchGenres(){ 
        $result = Genre::all(); 
        // dd($result); 
        return $result; 
    }
}