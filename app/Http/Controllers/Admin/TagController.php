<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTagRequest; 
use Illuminate\Support\Str; 
use App\Http\Requests\UpdateTagRequest; 

class TagController extends Controller
{
    public function view(Tag $tag){ 
        return view('admin.tags.view', compact('tag')); 
    }

    public function create(){ 
        return view('admin.tags.create'); 
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function index()
    {
        $tags = Tag::withCount('games')
            ->when(request('search'), function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $totalTags = Tag::count();

        $usedTags = Tag::has('games')->count();

        $unusedTags = Tag::doesntHave('games')->count();

        $totalTaggedGames = \DB::table('game_tag')->count();

        return view('admin.tags.index', compact(
            'tags',
            'totalTags',
            'usedTags',
            'unusedTags',
            'totalTaggedGames'
        ));
    }

    public function store(StoreTagRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = $data['slug'] ?: Str::slug($data['name']);

        Tag::create($data);

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'Tag created successfully.');
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        try {

            $data = $request->validated();

            $data['slug'] = !empty($data['slug'])
                ? Str::slug($data['slug'])
                : Str::slug($data['name']);

            $tag->update($data);

            return redirect()
                ->route('admin.tags.index')
                ->with('success', 'Tag updated successfully.');

        } catch (\Throwable $e) {

            Log::error('Tag update failed.', [

                'message' => $e->getMessage(),

                'file' => $e->getFile(),

                'line' => $e->getLine(),

                'user_id' => auth()->id(),

            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while updating the tag.');

        }
    }

    public function destroy(){ 
        return redirect()->route('admin.tags.delete')->with('success', 'Tag Deleted Successfully'); 
    }

    
}
