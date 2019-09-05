<?php

namespace App\Http\Controllers\Web;

use App\Role;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\User;
use App\Post;
use App\Category;
use App\Technologie;


class PageController extends Controller
{
    public function home() {

        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $categs = DB::table('categories')->get();

        $pageData = ['title' => 'Home', 'smenu' => '1', 'bg' => 'img/home-bg.jpg'];

        return view('web.home', compact('pageData') );

    }

    public function publications() {

        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $categs = DB::table('categories')->get();

        $pageData = ['title' => 'Publicações', 'smenu' => '2', 'bg' => 'img/publish-bg.jpg'];

        return view('web.publications', compact('pageData','posts','categs') );

    }

    public function gallery() {

        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate( 12);
        $categs = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');

        $pageData = ['title' => 'Fotografias', 'smenu' => '23', 'bg' => 'img/publish-bg.jpg'];

        return view('web.gallery', compact('pageData','posts','categs','tags') );

    }

    public function simple(Request $request) {


        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED');

        if( $request->input('search')){
            $posts = $posts->where('name', 'LIKE', "%" . $request->search . "%");
        }

        $posts = $posts->paginate(12);

        $categs = Category::orderBy('name','ASC')->pluck('name','id');


        $tags = Tag::orderBy('name','ASC')->pluck('name','id');
        $pageData = ['title' => 'Fotografias', 'smenu' => '23', 'bg' => 'img/publish-bg.jpg'];

        return view('web.gallery', compact('pageData','posts','categs','tags'));

    }

    public function author(Request $request) {


        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED');


        if( $request->input('search')){
            $user = User::where('name', 'LIKE', "%" . $request->search . "%")->first();
            $posts = $posts->where('user_id', $user->id);

        }


        $posts = $posts->paginate(12);

        $categs = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');
        $pageData = ['title' => 'Fotografias', 'smenu' => '23', 'bg' => 'img/publish-bg.jpg'];

        return view('web.gallery', compact('pageData','posts','categs','tags'));

    }


    public function advance(Request $request)

    {


        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED');

        $tagId = $request->tag;
        $slug = Tag::where('id', $tagId)->pluck('slug');
        if($tagId){
            $posts = Post::whereHas('tags', function($query) use ($slug) {
                     $query->where('slug', $slug);
                })->orderBy('id','DESC')->where('status','PUBLISHED');
        }

        if( $request->name){

            $posts = $posts->where('name', 'LIKE', "%" . $request->name . "%");

        }

        if( $request->category_id){

            $posts = $posts->where('category_id', $request->category_id );

        }



        $dataInicio = $request->dataInicio;
        $dataFim = $request->dataFim;

        if( $dataInicio && $dataFim){

           $posts = $posts->where('created', '>=', $dataInicio)
            ->where('created', '<=',$dataFim);

        }

        $posts = $posts->paginate(12);
        $categs = Category::orderBy('name','ASC')->pluck('name','id');

        $tags = Tag::orderBy('name','ASC')->pluck('name','id');

        $pageData = ['title' => 'Fotografias', 'smenu' => '23', 'bg' => 'img/publish-bg.jpg'];

        return view('web.gallery', compact('pageData','posts','categs','tags'));

    }



    public function detail($slug)
    {
        $pageData = ['title' => 'Detalhe', 'smenu' => '21', 'bg' => 'img/post-bg.jpg'];

        $post = Post::where('slug', $slug)->first();


        $posts = Post::orderBy('id','DESC')
            ->where('status','PUBLISHED')
            ->where('id','!=',$post->id)
            ->where('user_id',$post->user_id)
            ->paginate();

        $user = User::find($post->user_id);
        $role = Role::find($user->profile->role_id);
        $tags = Tag::orderBy('name','ASC')->get();

        $total = Post::where('user_id', $user->id)->count();
        $publicadas  =  Post::where('status','PUBLISHED')
            ->where('user_id', $user->id)
            ->count();

        $numberOfPosts = [ "total" => $total, "publicadas" => $publicadas ] ;

        $followers = $user->followers;
        $followings = $user->followings;


        $me = Auth::user()->id;

        $isFollow = $followers->contains($me);



        return view('web.detail-post',compact('post','posts','pageData','user','role','tags', 'numberOfPosts','followers' , 'followings', 'isFollow'));
    }


    public function credits()
    {
        $pageData = ['title' => 'Creditos', 'smenu' => '21', 'bg' => 'img/post-bg.jpg'];

        return view('web.credits',compact('pageData'));
    }

    public function policy() {
        $pageData = ['title' => 'Politica de Privacidade', 'smenu' => '31', 'bg' => 'img/project-bg.jpg'];
        return view('web.terms', compact('pageData'));
    }

    public function terms() {
        $pageData = ['title' => 'Termos', 'smenu' => '3', 'bg' => 'img/project-bg.jpg'];
        return view('web.terms', compact('pageData'));
    }

    public function published() {


        return view('web.published');
    }

    public function contacts() {
        $pageData = ['title' => 'Contactos', 'smenu' => '4', 'bg' => 'img/contact-bg.jpg'];
        return view('web.contacts',compact('pageData'));
    }

    public function category($slug) {
        $category = Category::where('slug',$slug)->first();
        $posts = Post::where('category_id',$category->id)
            ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(3);

        $categs = Category::orderBy('name','ASC')->get();

        $pageData = ['title' => 'Publicações '.$category->name , 'smenu' => '2', 'bg' => 'img/publish-bg.jpg'];

        return view('web.publications', compact('pageData','posts','categs') );

    }

    public function tag($slug) {

        $tag = Tag::where('slug',$slug)->pluck('name')->first();
        $posts = Post::whereHas('tags', function ($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(3);

        $categs = Category::orderBy('name','ASC')->get();

        $pageData = ['title' => 'Publicações - ' + $tag->name, 'smenu' => '2', 'bg' => 'img/publish-bg.jpg'];

        return view('web.publications', compact('pageData','posts','categs') );
    }

}
