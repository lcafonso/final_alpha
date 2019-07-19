<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function generatePDF($slug)

    {

        $post = Post::where('slug', $slug)->first();


        $pdf = PDF::loadView('myPDF', compact('post'));


        return $pdf->download($slug.'.pdf');

    }
}
