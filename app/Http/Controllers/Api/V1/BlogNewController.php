<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogNewCollection;
use App\Models\BlogNew;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'lang' => ['required', Rule::in(['ru', 'en', 'uz'])],
            'limit' => ['numeric']
        ]);

        $blogNews = BlogNew::latest();

        if($request->limit){
            $blogNews->limit($request->limit);
        }    
        
        $blogNews = $blogNews->get();
        return new BlogNewCollection($blogNews);
    }
}
