<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //associate array
        $data = array(
            'title' => 'index page',
            'body' => 'this has been done through templating',
            'types' => ['web design' , 'Programming' , 'Maintenance']
        );
        return view('pages.index') -> with($data);
    }

    public function about()
    {
        $title = 'This is the about page !';
        // return view('pages.about',compact('title'));
        return view('pages.about') -> with('title',$title);
    }
}
