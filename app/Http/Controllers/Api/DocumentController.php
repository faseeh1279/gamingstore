<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkDeleteDocumentRequest;
use App\Http\Requests\BulkStoreDocumentRequest;
use App\Http\Requests\BulkUpdateDocumentRequest;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage; 
use App\Http\Resources\DocumentResource; 
use Illuminate\Support\Facades\DB; 

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::latest()->get(); 
        //     return response()->json([
        //     'success' => true,
        //     'data' => $documents
        // ]);
        return DocumentResource::collection(Document::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('documents.create'); 
    // }

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
        $document = Document::create([ 
            'title'=>$request->title, 
            'description'=> $request->description, 
            'file'=>$path
        ]); 


        return new DocumentResource($document); 
    }

    public function bulkStore(BulkStoreDocumentRequest $request){ 
        // dd($request->all());
        $documents = [];

        DB::transaction(function () use ($request, &$documents) {

            foreach ($request->file('files') as $index => $file) {

                $path = $file->store('documents', 'public');

                $documents[] = Document::create([

                    'title' => $request->titles[$index],

                    'description' => $request->descriptions[$index] ?? null,

                    'file' => $path,

                ]);

            }

        });

        return DocumentResource::collection(
            collect($documents)
        );
    }


    public function bulkDestroy(BulkDeleteDocumentRequest $request)
    {
        DB::transaction(function () use ($request) {

            $documents = Document::whereIn('id', $request->ids)->get();

            foreach ($documents as $document) {

                Storage::disk('public')->delete($document->file);

                $document->delete();
            }

        });

        return response()->json([
            'success' => true,
            'message' => 'Documents deleted successfully.'
        ]);
    }   

    public function bulkUpdate(BulkUpdateDocumentRequest $request)
    {
        $updatedDocuments = [];

        DB::transaction(function () use ($request, &$updatedDocuments) {

            foreach ($request->ids as $index => $id) {

                $document = Document::findOrFail($id);

                $document->title = $request->titles[$index];

                $document->description =
                    $request->descriptions[$index] ?? null;

                if ($request->hasFile("files.$index")) {

                    Storage::disk('public')->delete($document->file);

                    $path = $request->file("files.$index")
                                    ->store('documents', 'public');

                    $document->file = $path;
                }

                $document->save();

                $updatedDocuments[] = $document->fresh();
            }

        });

        return DocumentResource::collection($updatedDocuments);
    }
    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return response()->json([
        'success' => true,
        'data' => $document
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Document $document)
    // {
    //     return view('documents.edit', compact('document')); 
    // }

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

        return response()->json([
            'message'=>'Updated',
            'data'=>$document
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document->file);

        $document->delete();

        return response()->json([
            'message'=>'Deleted Successfully'
        ]);
    }
}
