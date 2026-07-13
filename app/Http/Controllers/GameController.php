<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateGameRequest;
use App\Models\Game;
use App\Services\GameService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GameController extends Controller
{
    protected GameService $gameService; 

    public function __construct(GameService $gameService){ 
        $this->gameService = $gameService; 
    }

    public function index(){ 
        $games = $this->gameService->fetchGames(); 
        $user = Auth::user(); 
        return view('games.index', compact('user')); 
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
