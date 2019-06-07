<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use home;
class Homescontroller extends Controller
{
    //
   public function index()
    {
    	# code...
    	//$data=home::all();
    	/*$sum=12+4;
    	// return view('welcome');
    	return view('welcome', compact('sum'));

    	*/
        $title="Welcome to Laravel!";
    	return view('Pages.index')->with('title', $title);
    }
}
