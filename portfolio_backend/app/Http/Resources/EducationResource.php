<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'certification' => $this->certification,
            'institution' => $this->institution,
            'completion_year' => $this->completion_year
        ];

        return array_filter($data);
    }
}
