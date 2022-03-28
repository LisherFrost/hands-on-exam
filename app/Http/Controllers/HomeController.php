<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $sample_identity = array ( 
            'name' => 'Vijay Karl',
            'surname' => 'Magbata',
            'age' => '20',
        );
        return view('home')->with('sample_identity', $sample_identity);
    }

   
}
