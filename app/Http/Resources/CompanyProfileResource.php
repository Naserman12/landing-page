<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyProfileResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'logo_url' => $this->logo_url,
            'achievements' => AchievementResource::collection($this->whenLoaded('achievements')),
            'videos' => VideoResource::collection($this->whenLoaded('videos')),
            'social_links' => SocialLinkResource::collection($this->whenLoaded('socialLinks')),
        ];
    }
}