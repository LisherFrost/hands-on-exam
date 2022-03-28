<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Post()
    {
        $sample_id = array ( 
            'name' => 'Vijay Karl',
            'course' => 'BSIT',
            'year' => '3rd Year',
            'block' => 'A'
        );
        return view('post')->with('sample_id', $sample_id);
    }

    
}
