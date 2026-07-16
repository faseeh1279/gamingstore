<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateGameRequest;
use App\Models\Game;
use App\Services\GameService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 

class GameController extends Controller
{
    use AuthorizesRequests;
    protected GameService $gameService; 

    public function __construct(GameService $gameService){ 
        $this->gameService = $gameService; 
    }

    public function create(){ 
        $this->authorize('create', Game::class); 
        return view('admin.games.create');
    }

    public function index(){ 
        return view('admin.games.index');
    }
    
    public function dashboard(){ 
        return view('admin.dashboard.index'); 
    }
}
