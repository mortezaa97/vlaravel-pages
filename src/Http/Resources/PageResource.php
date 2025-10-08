<?php

declare(strict_types=1);

namespace Mortezaa97\Pages\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'name' => $this->name,
            'slug' => $this->slug,
            'desc' => $this->desc,
            'meta_title' => $this->meta_title,
            'meta_desc' => $this->meta_desc,
            'is_for_seo' => $this->is_for_seo,
            'meta_keywords' => $this->meta_keywords,
            'content' => $this->content,
            'data' => $this->data,
        ];
    }
}
