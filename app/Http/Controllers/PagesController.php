<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my webshop';
        return view('pages.index')->with('title', $title);
    }
    public function products(){
        $title = 'Welcome to my products';
        return view ('pages.products')->with('title', $title);
    }
    public function catagorys(){
        $data = array(
        'title' => 'Catagorys',
        'catagorys' => ['Kabels', 'Device', 'Gear']
        );
        return view('pages.catagorys')->with($data);
    }
    public function shoppingcart(){
        $title = 'Welcome to my shoppingcart';
        return view('pages.shoppingcart')->with('title', $title);
    }
}
