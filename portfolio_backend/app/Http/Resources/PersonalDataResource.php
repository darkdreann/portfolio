<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonalDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'avatar' => $this->avatar,
            'name' => $this->name,
            'email' => $this->email,
            'about_me' => $this->about_me,
            'github' => $this->github,
            'linkedin' => $this->linkedin,
            'cv' => $this->cv
        ];
    }
}
