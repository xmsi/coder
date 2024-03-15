<?php

namespace App\Models;

use App\Enums\ProjectType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
        'logos' => 'array',
        'type' => ProjectType::class
    ];

    protected $guarded = ['id'];

    public function getLocalizedAttribute($attribute){
        $locale = app()->getLocale();
        $localizedColumn = $attribute . "_" . $locale;

        if (!isset($this->$localizedColumn)) {
            throw new \InvalidArgumentException("column doesn't exist");
        }

        return $this->$localizedColumn;
    }
}
