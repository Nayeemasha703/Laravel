<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Laravel Deep Learning Project";
        $des = "This is an Laravel deep learning program.";

        //Compact methode
        // return view('products.index', compact('title', 'des'));

        // with methode

        $data = [
            'p1' => "iPhone",
            'p2' => "Xiome",
            'p3' => "Samsong",
        ];

        // return view('products.index')->with('data', $data);

        // Data parching Directly in view 
        return view('products.index', [
            'data' => $data
        ]);

    }
    
    public function about(){
        return 'About Us Page';
    }
    
    public function about_back(){
        return redirect('/products');
    }
}
