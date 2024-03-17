<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'image' => $this->image,
            'title' => $this->title,
            'description' => $this->description,
            'technologies' => $this->technologies,
            'github' => $this->github,
            'youtube' => $this->youtube,
            'website' => $this->website
        ];

        return array_filter($data);
    }
}
