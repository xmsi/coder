<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'lang' => Rule::in(['ru', 'en', 'uz'])
        ]);

        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
