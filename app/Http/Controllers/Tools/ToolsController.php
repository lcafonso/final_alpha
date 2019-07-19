<?php

namespace App\Http\Controllers\Tools;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tools()
    {


        return view('tools.tools');
    }

    public function events()
    {

        return 'eventos.';
    }

    public function status()
    {
        return 'status';
    }



}
