<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGameRequest;
use App\Models\Category;
use App\Models\Cpu;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Gpu;
use App\Models\MinimumRequirement;
use App\Models\Platform;
use App\Models\Publisher;
use App\Models\RecommendedRequirement;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with([
            'category',
            'developer',
            'publisher',
            'platform',
        ])->latest()->paginate(10);

        return view('admin.games.index', [
            'games' => $games,
            'categories' => Category::orderBy('name')->get(),
            'totalGames' => Game::count(),
            'publishedGames' => Game::where('is_active', true)->count(),
            'draftGames' => Game::where('is_active', false)->count(),
            'categoriesCount' => Category::count(),
        ]);
    }

    public function create()
    {
        return view('admin.games.create', [

            'categories' => Category::orderBy('name')->get(),

            'developers' => Developer::orderBy('name')->get(),

            'publishers' => Publisher::orderBy('name')->get(),

            'platforms' => Platform::orderBy('name')->get(),

            'cpus' => Cpu::orderBy('model')->get(),

            'gpus' => Gpu::orderBy('model')->get(),

            'tags' => Tag::orderBy('name')->get(),

        ]);
    }

    public function edit(){ 
        return view('admin.games.edit'); 
    }

    public function store(StoreGameRequest $request)
    {
        try {

            DB::transaction(function () use ($request) {

                $data = $request->validated();

                /*
                |--------------------------------------------------------------------------
                | Slug
                |--------------------------------------------------------------------------
                */

                $data['slug'] = Str::slug($data['title']);

                /*
                |--------------------------------------------------------------------------
                | Status
                |--------------------------------------------------------------------------
                */

                $data['is_active'] = $request->boolean('is_active');

                /*
                |--------------------------------------------------------------------------
                | Cover Image
                |--------------------------------------------------------------------------
                */

                if ($request->hasFile('cover_image')) {

                    $data['cover_image'] = $request
                        ->file('cover_image')
                        ->store('games/covers', 'public');
                }

                /*
                |--------------------------------------------------------------------------
                | Banner Image
                |--------------------------------------------------------------------------
                */

                if ($request->hasFile('banner_image')) {

                    $data['banner_image'] = $request
                        ->file('banner_image')
                        ->store('games/banners', 'public');
                }

                /*
                |--------------------------------------------------------------------------
                | Create Game
                |--------------------------------------------------------------------------
                */

                $game = Game::create($data);

                /*
                |--------------------------------------------------------------------------
                | Tags
                |--------------------------------------------------------------------------
                */

                if ($request->filled('tags')) {

                    $game->tags()->sync($request->tags);
                }

                /*
                |--------------------------------------------------------------------------
                | Minimum Requirements
                |--------------------------------------------------------------------------
                */

                MinimumRequirement::create([

                    'game_id' => $game->id,

                    'cpu_id' => $request->minimum_cpu_id,

                    'gpu_id' => $request->minimum_gpu_id,

                    'ram' => $request->minimum_ram,

                    'storage' => $request->minimum_storage,

                    'operating_system' => $request->minimum_os,

                    'directx' => $request->minimum_directx,

                ]);

                /*
                |--------------------------------------------------------------------------
                | Recommended Requirements
                |--------------------------------------------------------------------------
                */

                RecommendedRequirement::create([

                    'game_id' => $game->id,

                    'cpu_id' => $request->recommended_cpu_id,

                    'gpu_id' => $request->recommended_gpu_id,

                    'ram' => $request->recommended_ram,

                    'storage' => $request->recommended_storage,

                    'operating_system' => $request->recommended_os,

                    'directx' => $request->recommended_directx,

                ]);

            });

            return redirect()
                ->route('admin.games.index')
                ->with('success', 'Game created successfully.');

        } catch (\Throwable $e) {

            Log::error('Game creation failed.', [

                'message' => $e->getMessage(),

                'file' => $e->getFile(),

                'line' => $e->getLine(),

                'user_id' => auth()->id(),

            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while creating the game.');
        }
    }

    public function view(Game $game)
    {
        $game->load([
            'category',
            'developer',
            'publisher',
            'platform',
            'tags',
            'minimumRequirement.cpu',
            'minimumRequirement.gpu',
            'recommendedRequirement.cpu',
            'recommendedRequirement.gpu',
        ]);

        return view('admin.games.view', compact('game'));
    }

    public function update(){ 
        return redirect()->route('admin.games.index')->with('success', 'Game created successfully'); 
    }

    public function destroy(){ 
        return redirect()->route('admin.games.index')->with('success', 'Game created successfully'); 
    }
}
