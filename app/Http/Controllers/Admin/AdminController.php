<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\District;
use App\County;
use App\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $pageData = ['title' => 'Administração', 'smenu' => '', 'bg' => ''];


        $posts = Post::orderBy('created','ASC')
            ->where('status','DRAFT')
            ->paginate();

        $postsDraft = Post::where('status','DRAFT')->count();



        return view('admin.main.index', compact('pageData','posts','postsDraft') );
    }

    public function teste()
    {
        $districts = District::all()->pluck("name","district_id");
        $districts = array_merge(['0'=>'Selecione o distrito'],$districts->toArray());

        $place = [];
        $pageData = ['title' => 'Administração - Teste', 'smenu' => '', 'bg' => ''];


        return view('admin.main.teste2', compact('pageData','districts','place') );

    }

    public function teste2()
    {


        return view('admin.posts.show');

    }



    public function getStateList(Request $request)
    {
        $counties = County::orderBy('name','ASC')
            ->where("district_id",$request->district_id)
            ->pluck("name","county_id","district_id");
        return response()->json($counties);
    }

    public function getCityList(Request $request)
    {
        $places = Place::orderBy('name','ASC')
            ->where("county_id",$request->county_id)
            ->where("district_id",$request->district_id)
            ->pluck("name","id");
        return response()->json($places);
    }

    public function getPlace(Request $request)
    {
        $place = Place::orderBy('name','ASC')
            ->where("id",$request->place_id)
            ->all();

        return response()->json($place);
    }

}
