<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
    	return view('Pages.index');
    }
    public function about()
    {
        $title="About Us!";
    	return view('Pages.about')->with('title', $title);
    }
    public function services()
    {
        $data=array(
            'title'=>'Services ', 'services'=>['Web Design', 'Mobile App Development', 'And other pgmming'] 

        );
    	return view('Pages.services')->with($data);
    }
}
