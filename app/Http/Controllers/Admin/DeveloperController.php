<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeveloperRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use App\Models\Developer; 
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage; 
use App\Http\Requests\UpdateDeveloperRequest; 

class DeveloperController extends Controller
{
    public function index()
    {
        $developers = Developer::latest()->paginate(10);

        return view('admin.developers.index', [
            'developers' => $developers,
            'activeDevelopers' => Developer::where('is_active', true)->count(),
            'inactiveDevelopers' => Developer::where('is_active', false)->count(),
            'developersWithLogo' => Developer::whereNotNull('logo')->count(),
        ]);
    }

    public function create(){ 
        return view('admin.developers.create'); 
    }

    public function view(Developer $developer)
    {
        $developer->load('games');

        return view('admin.developers.view', [
            'developer' => $developer,
        ]);
    }

    public function edit(Developer $developer){ 
        return view('admin.developers.edit', compact('developer')); 
    }

    public function store(StoreDeveloperRequest $request)
    {
        try {

            DB::transaction(function () use ($request) {

                $data = $request->validated();

                $data['slug'] = Str::slug($data['name']);

                $data['is_active'] = $request->boolean('is_active');

                if ($request->hasFile('logo')) {

                    $data['logo'] = $request->file('logo')
                        ->store('developers', 'public');
                }

                Developer::create($data);
            });

            return redirect()
                ->route('admin.developer.index')
                ->with('success', 'Developer created successfully.');

        } catch (\Throwable $e) {

            Log::error('Developer creation failed.', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'user_id' => auth()->id(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while creating the developer.');
        }
    }

    public function update(UpdateDeveloperRequest $request, Developer $developer)
    {
        try {

            DB::transaction(function () use ($request, $developer) {

                $data = $request->validated();

                $data['slug'] = Str::slug($data['name']);

                $data['is_active'] = $request->boolean('is_active');

                if ($request->hasFile('logo')) {

                    if ($developer->logo && Storage::disk('public')->exists($developer->logo)) {

                        Storage::disk('public')->delete($developer->logo);

                    }

                    $data['logo'] = $request
                        ->file('logo')
                        ->store('developers', 'public');
                }

                $developer->update($data);

            });

            return redirect()
                ->route('admin.developer.index')
                ->with('success', 'Developer updated successfully.');

        } catch (\Throwable $e) {

            Log::error('Developer update failed.', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'user_id' => auth()->id(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while updating the developer.');
        }
    }
    
    public function destroy(Developer $developer)
    {
        try {

            DB::transaction(function () use ($developer) {

                if (
                    $developer->logo &&
                    Storage::disk('public')->exists($developer->logo)
                ) {
                    Storage::disk('public')->delete($developer->logo);
                }

                $developer->delete();

            });

            return redirect()
                ->route('admin.developer.index')
                ->with('success', 'Developer deleted successfully.');

        } catch (\Throwable $e) {

            Log::error('Developer deletion failed.', [
                'developer_id' => $developer->id,
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'user_id' => auth()->id(),
            ]);

            return redirect()
                ->route('admin.developer.index')
                ->with('error', 'Something went wrong while deleting the developer.');
        }
    }

    
}
