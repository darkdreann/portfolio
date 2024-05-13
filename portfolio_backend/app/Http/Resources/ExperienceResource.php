<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'position' => $this->position,
            'description' => $this->description,
            'company' => $this->company,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ];

        return array_filter($data);
    }
}
