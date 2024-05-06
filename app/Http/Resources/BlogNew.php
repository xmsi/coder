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
        return [
            'title' => $this->{'title_'.$request->lang},
            'description' => $this->{'description_'.$request->lang},
            'image' => url('storage') . '/' . $this->image,
            'link' => $this->link,
            'date' => $this->normalized_date,
        ];
    }
}
