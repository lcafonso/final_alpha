<?php

namespace App\Http\Controllers\Admin;

use App\District;
use App\Tag;
use App\Category;
use App\Technologie;
use App\Post;
use App\Detail;
use App\Place;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;


class PostController extends Controller
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
    public function index()
    {
        if(auth()->user()->profile->role_id <= 2) {
            // Para Administrador e Revisor
            $posts = Post::orderBy('id','DESC')->paginate(6);
        } else {
            // utilizador normal vo ve o que lhe pertence
            $posts = Post::orderBy('id','DESC')
                ->where('user_id', auth()->user()->id)
                ->paginate(6);
        }

        return view('admin.posts.index', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all()->pluck("name","district_id");
        $districts = array_merge(['0'=>'Selecione o distrito'],$districts->toArray());

        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();

        $technologies = Technologie::orderBy('name','ASC')->pluck('name','id');

        $image = 'NO_IMAGE.png';

        $posts = Post::orderBy('created','DESC')
            ->where('status','PUBLISHED')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        //Post
        $post = new Post;

        //Detalhes
        $detail = new Detail;

        //Place
        $place = new Place;

        return view('admin.posts.create', compact('post','categories','tags','image','posts','districts','technologies','detail','place'));

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {


        $post = Post::create($request->all());


        //Images
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('img/imagens/' . $filename );
            Image::make($file)->save($path);

            $post->fill(['file' => asset('img/imagens/'.$filename)])->save();
        }




        //Tags
        $post->tags()->attach($request->get('tags'));



        //Detalhes
        $detail = new Detail;



        $detail->fill([
            'latitude'       => (!empty($request->get('imgLat'))?$request->get('imgLat'):"0"),
            'longitude'      => (!empty($request->get('imgLong'))?$request->get('imgLong'):"0"),
            'equipment'      => (!empty($request->get('cameraModel'))?$request->get('cameraModel'):"undefined!"),
            'exposure'       => (!empty($request->get('exposureTime'))?$request->get('exposureTime'):"undefined!"),
            'aperture'       => (!empty($request->get('aperture'))?$request->get('aperture'):"undefined!"),
            'iso'            => (!empty($request->get('ISO'))?$request->get('ISO'):"undefined!"),
            'dimensionX'     => (!empty($request->get('pdX'))?$request->get('pdX'):"0"),
            'dimensionY'     => (!empty($request->get('pdY'))?$request->get('pdY'):"0"),
            'resolution'     => (!empty($request->get('focalDistance'))?$request->get('focalDistance'):"0"),
            'post_id'        => (!empty($post->id)?$post->id:null),
            'technologie_id' => (!empty($request->get('technologie'))?$request->get('technologie'):"1"),
            'place_id'       => (!empty($request->get('place'))?$request->get('place'):"1"),
        ])->save();


        return redirect()->route('adminposts.edit', $post->id)
            ->with('info','Operação executada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $tech = Technologie::where('id',$post->detail->technologie_id)->first();


       /* $posts = Post::orderBy('created','DESC')
            ->where('status','PUBLISHED')
            ->where('id','!=',$post->id)
            ->where('user_id',$post->user_id)
            ->paginate();*/

        $posts = Post::where('post_id',$post->id)
            ->paginate();


        /*return view('admin.posts.show', compact('post', 'tech','posts'));*/
        return view('admin.posts.show', compact('post', 'tech','posts'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $districts = District::all()->pluck("name","district_id");
        $districts = array_merge(['0'=>'Selecione o distrito'],$districts->toArray());



        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();
        $post = Post::find($id);

        $posts = Post::orderBy('created','DESC')
            ->where('status','PUBLISHED')
            ->where('id','!=',$post->id)
            ->where('user_id',$post->user_id)
            ->paginate();

        $image = $post->file;

        $technologies = Technologie::orderBy('name','ASC')->pluck('name','id');

        $detail = Detail::where('id', $post->id)->get();

        $place = Place::where('place_id', $post->detail->place_id )->get();

        return view('admin.posts.edit', compact('post','categories','tags','image','posts','districts','technologies','detail','place'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);

        $post->fill($request->all())->save();


        //Images
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('img/imagens/' . $filename );
            Image::make($file)->save($path);

            $post->fill(['file' => asset('img/imagens/'.$filename)])->save();
        }

        //Tags
        $post->tags()->sync($request->get('tags'));

        //Detalhes
        $detail =  new Detail;


        $detail->fill([
            'latitude'       => (!empty($request->get('imgLat'))?$request->get('imgLat'):"0"),
            'longitude'      => (!empty($request->get('imgLong'))?$request->get('imgLong'):"0"),
            'equipment'      => (!empty($request->get('cameraModel'))?$request->get('cameraModel'):"undefined!"),
            'exposure'       => (!empty($request->get('exposureTime'))?$request->get('exposureTime'):"undefined!"),
            'aperture'       => (!empty($request->get('aperture'))?$request->get('aperture'):"undefined!"),
            'iso'            => (!empty($request->get('ISO'))?$request->get('ISO'):"undefined!"),
            'dimensionX'     => (!empty($request->get('pdX'))?$request->get('pdX'):"undefined!"),
            'dimensionY'     => (!empty($request->get('pdY'))?$request->get('pdY'):"undefined!"),
            'resolution'     => (!empty($request->get('focalDistance'))?$request->get('focalDistance'):"0"),
            'post_id'        => (!empty($post->id)?$post->id:null),
            'technologie_id' => (!empty($request->get('technologie'))?$request->get('technologie'):"1"),
            'place_id'       => (!empty($request->get('place'))?$request->get('place'):"1"),
        ])->save();


        return redirect()->route('adminposts.edit', $post->id)
            ->with('info','Operação executada com sucesso.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return back()->with('info','Operação executada com sucesso.');
    }


    public function repost($id) {

        $post = Post::find($id);
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();
        $technologies = Technologie::orderBy('name','ASC')->pluck('name','id');

        $districts = District::all()->pluck("name","district_id");
        $districts = array_merge(['0'=>'Selecione o distrito'],$districts->toArray());

        return view('admin.posts.repost', compact('post','categories','tags','technologies','districts'));

    }

    public function compare($id) {

        $postA = Post::find($id);
        $postB = Post::find($postA->post_id);

        $pageData = ['title' => 'Publicação - compare', 'smenu' => '', 'bg' => 'img/post-bg.jpg'];

        return view('admin.posts.compare', compact('postA','postB','pageData'));

    }


}
