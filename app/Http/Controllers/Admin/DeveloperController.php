<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeveloperRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use App\Models\Developer; 
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\DB; 

class DeveloperController extends Controller
{
    public function index(){ 
        return view('admin.developers.index'); 
    }

    public function create(){ 
        return view('admin.developers.create'); 
    }

    public function view(){ 
        return view('admin.developers.view'); 
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

    public function update(){ 
        return redirect()->route('admin.developer.index')
        ->with('success', 'Developer updated successfully'); 
    }

    public function destroy(){ 
        return redirect()->route('admin.developer.index')
        ->with('success', 'Developer deleted successfully'); 
    }

    
}
