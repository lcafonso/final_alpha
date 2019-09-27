<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Role;
use App\User;
use App\District;
use App\County;
use App\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;


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

        $users = User::orderBy('created_at','ASC')
            ->where('email_verified_at', null )
            ->paginate();

        $usersToApprove = User::where('email_verified_at', null )->count();


        return view('admin.main.index', compact('pageData','posts','postsDraft','users','usersToApprove') );
    }

    public function teste()
    {

        $posts = Post::orderBy('created','ASC')
            ->where('status','PUBLISHED')
            ->get();

        $base = DB::table('posts')
            ->where('posts.status','PUBLISHED')
            ->join('details', 'posts.id', '=', 'details.post_id')
            ->join('places', 'details.place_id', '=', 'places.place_id')
            ->join('districts', 'places.district_id', '=', 'districts.district_id')
            ->join('counties', function($join) {
                $join->on('places.district_id', '=', 'counties.district_id')
                    ->on('places.county_id', '=', 'counties.county_id');
                    })
            ->select('posts.*', 'details.*', 'places.name AS local',
                'places.county_id',  'counties.name AS freguesia',
                'places.district_id', 'districts.name AS distrito',
                'places.CP4' ,'places.CP3','places.CPALF',
                'places.latitude', 'places.longitude'
            )->orderBy('posts.id','DESC')->get();


        $places = Place::orderBy('name','ASC')
            ->get();

        $pageData = ['title' => 'Administração - Teste', 'smenu' => '', 'bg' => ''];

        dd($base);
        return view('admin.main.teste', compact('pageData','posts','base') );

    }


    public function teste2()
    {
        $id = 280;


        $post = Post::find($id);
        $user = User::find($post->user_id);
        $pageData = ['title' => 'Administração - Teste', 'smenu' => '', 'bg' => ''];


        return view('admin.main.teste2', compact('pageData','user','post') );

    }

    public function showUser($id)
    {
        $user = User::find($id);
        $role = Role::find($user->profile->role_id);

        $total = Post::where('user_id', $id)->count();
        $publicadas  =  Post::where('status','PUBLISHED')
            ->where('user_id', $id)
            ->count();

        $numberOfPosts = [ "total" => $total, "publicadas" => $publicadas ];

        $followers = $user->followers;
        $followings = $user->followings;

        return view('admin.users.userProfile', compact('user','role', 'numberOfPosts', 'followers', 'followings'));
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
            ->get();

        return response()->json($place);
    }

}
