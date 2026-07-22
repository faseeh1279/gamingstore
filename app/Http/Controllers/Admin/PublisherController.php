<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Models\Publisher; 
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Storage; 

class PublisherController extends Controller
{
    public function index(Request $request)
    {
        $query = Publisher::query();

        if ($request->filled('search')) {

            $query->where('name', 'like', '%' . $request->search . '%');

        }

        $publishers = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.publishers.index', [

            'publishers' => $publishers,

            'activePublishers' => Publisher::where('is_active', true)->count(),

            'inactivePublishers' => Publisher::where('is_active', false)->count(),

            'logoPublishers' => Publisher::whereNotNull('logo')->count(),

        ]);
    }
    public function create(){ 
        return view('admin.publishers.create'); 
    }

    public function view(Publisher $publisher)
    {
        $publisher->load('games');

        return view('admin.publishers.view', compact('publisher'));
    }

    public function edit(Publisher $publisher)
    {
        return view('admin.publishers.edit', compact('publisher'));
    }

    public function store(StorePublisherRequest $request)
    {
        try {

            DB::transaction(function () use ($request) {

                $data = $request->validated();

                $data['is_active'] = $request->boolean('is_active');

                if ($request->hasFile('logo')) {

                    $data['logo'] = $request
                        ->file('logo')
                        ->store('publishers', 'public');

                }

                Publisher::create($data);

            });

            return redirect()
                ->route('admin.publisher.index')
                ->with('success', 'Publisher created successfully.');

        } catch (\Throwable $e) {

            Log::error('Publisher creation failed.', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while creating the publisher.');

        }
    }

    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        try {

            DB::transaction(function () use ($request, $publisher) {

                $data = $request->validated();

                $data['is_active'] = $request->boolean('is_active');

                if ($request->hasFile('logo')) {

                    if (
                        $publisher->logo &&
                        Storage::disk('public')->exists($publisher->logo)
                    ) {
                        Storage::disk('public')->delete($publisher->logo);
                    }

                    $data['logo'] = $request
                        ->file('logo')
                        ->store('publishers', 'public');
                }

                $publisher->update($data);

            });

            return redirect()
                ->route('admin.publisher.index')
                ->with('success', 'Publisher updated successfully.');

        } catch (\Throwable $e) {

            Log::error('Publisher update failed.', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'user_id' => auth()->id(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while updating the publisher.');
        }
    }


    public function destroy(Publisher $publisher)
    {
        try {

            DB::transaction(function () use ($publisher) {

                if (
                    $publisher->logo &&
                    Storage::disk('public')->exists($publisher->logo)
                ) {
                    Storage::disk('public')->delete($publisher->logo);
                }

                $publisher->delete();

            });

            return redirect()
                ->route('admin.publisher.index')
                ->with('success', 'Publisher deleted successfully.');

        } catch (\Throwable $e) {

            Log::error('Publisher deletion failed.', [

                'publisher_id' => $publisher->id,

                'message' => $e->getMessage(),

                'file' => $e->getFile(),

                'line' => $e->getLine(),

                'user_id' => auth()->id(),

            ]);

            return redirect()
                ->route('admin.publisher.index')
                ->with('error', 'Something went wrong while deleting the publisher.');

        }
    }
    
}
