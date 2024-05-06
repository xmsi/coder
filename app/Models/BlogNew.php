<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BlogNew extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getNormalizedDateAttribute(){
        $date = $this->created_at->locale('is_IS')->format('d.m.Y');
        if($this->posted_at){
            $date = Carbon::createFromFormat('Y-m-d', $this->posted_at)->format('d.m.Y');
        }

        return $date;
    }
}
