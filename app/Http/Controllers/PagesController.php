<?php

namespace App\Http\Controllers;

use App\Models\links;
use App\Models\pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($id)
    {
        $page = pages::where('page_name', $id)->first();
        if ($page == NULL) {
            return abort('404');
        } else {
            $links = links::where('page_id', $page->id)->get();
        }
        return view('pages')->with('page', $page)->with('links', $links);
    }
}
