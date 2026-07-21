<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    


    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'file' => $this->file,
            'file_url' => asset('storage/' . $this->file),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}
