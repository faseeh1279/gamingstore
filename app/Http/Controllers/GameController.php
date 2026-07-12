<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateGameRequest;
use App\Models\Game;
use App\Services\GameService;
use Illuminate\Http\Request;


class GameController extends Controller
{
    protected GameService $gameService; 

    public function __construct(GameService $gameService){ 
        $this->gameService = $gameService; 
    }

    public function index(){ 
        $games = $this->gameService->fetchGames(); 
        return view('games.index', compact('games')); 
    }   

    public function createGame(){ 
        $genres = $this->gameService->fetchGenres(); 
        return view ('games.create', compact('genres')); 
    }

    public function store(Request $request){ 
        $this->gameService->createGame($request); 
        return redirect()->route('games.index')->with(201, 'Game created successfully.'); 
    }

    
}
