<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Author' => $this->user->name,
            'Title'  => $this->title,
            'Body'   => $this->body,
            // 'Tags'=>TagResource::collection($this->tags->pluck('name'))
            'Tags' => $this->tags->pluck('name'),

        ];
    }
}
