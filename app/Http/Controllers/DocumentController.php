<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
// use Pest\Plugins\Tia\Storage;
use Illuminate\Support\Facades\Storage; 

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::latest()->get(); 
        return view('documents.index', compact('documents')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255', 
            'description' => 'nullable', 
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2046'
        ]); 

        $path = $request->file('file')->store('documents', 'public'); 
        Document::create([ 
            'title'=>$request->title, 
            'description'=> $request->description, 
            'file'=>$path
        ]); 

        return redirect()->route('documents.index')->with('success', 'Document uploaded'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('documents.edit', compact('document')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
            $request->validate([
            'title'=>'required|max:255',
            'description'=>'nullable',
            'file'=>'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('file'))
        {
            Storage::disk('public')->delete($document->file);

            $path = $request->file('file')
                            ->store('documents','public');

            $document->file = $path;
        }

        $document->title = $request->title;
        $document->description = $request->description;

        $document->save();

        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document->file);

        $document->delete();

        return back()->with('success','Deleted');
    }
}
