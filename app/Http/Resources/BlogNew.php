<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogNew extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $date = $this->created_at->locale('is_IS')->format('d.m.Y');
        if($this->posted_at){
            $date = Carbon::createFromFormat('Y-m-d', $this->posted_at)->format('d.m.Y');
        }


        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => url('storage') . '/' . $this->image,
            'link' => $this->link,
            'date' => $date,
        ];
    }
}
