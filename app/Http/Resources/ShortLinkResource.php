<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShortLinkResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'original_url' => $this->original_url,
            'short_code' => $this->short_code,
            'clicks' => $this->clicks,
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}