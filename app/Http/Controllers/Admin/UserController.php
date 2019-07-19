<?php

namespace App\Http\Controllers\Admin;




use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;

use Auth;
use Image;

use App\User;
use App\Profile;
use App\Role;
use App\Post;


class UserController extends Controller
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
        $user = Auth::user();
        $role = Role::find($user->profile->role_id);

        $pageData = ['title' => 'Perfil de '.$user->name  , 'smenu' => '', 'bg' => 'img/profile-bg.jpg'];

        $total = Post::where('user_id', auth()->user()->id)->count();
        $publicadas  =  Post::where('status','PUBLISHED')
            ->where('user_id', auth()->user()->id)
            ->count();

        $numberOfPosts = [ "total" => $total, "publicadas" => $publicadas ] ;

        $posts = Post::orderBy('id','DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate(8);

        return view('admin.profile.index',compact('user','pageData','role','numberOfPosts','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $user = User::find($id);
        $role = Role::find($user->profile->role_id);


        $pageData = ['title' => 'Perfil de '.$user->name, 'smenu' => '', 'bg' => 'img/profile-bg.jpg'];


        $total = Post::where('user_id', $id)->count();
        $publicadas  =  Post::where('status','PUBLISHED')
            ->where('user_id', $id)
            ->count();

        $numberOfPosts = [ "total" => $total, "publicadas" => $publicadas ] ;

        return view('admin.profile.show',compact('user','pageData','role','numberOfPosts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);


        $role = Role::find($user->profile->role_id);

        $pageData = ['title' => 'Perfil de '.$user->name, 'smenu' => '', 'bg' => 'img/profile-bg.jpg'];


        $posts = Post::orderBy('id','DESC')
            ->where('user_id', $id)
            ->paginate(8);

        return view('admin.profile.edit',compact('user','pageData','role','posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        //$user->fill($request->all())->save();

        $user->fill([
            'name'       => (!empty($request->get('name'))?$request->get('name'): $user->name),
            'password'   => (!empty($request->get('password'))?$request->get('password'):$user->password),
        ])->save();

        console.log('aqui esta');

        $profile = Profile::where('user_id',$id);

        //$profile->fill($request->all())->save();
        $profile->fill([
            'name'       => (!empty($request->get('profileName'))?$request->get('profileName'): $user->profile->name),
            'surname'    => (!empty($request->get('profileSurname'))?$request->get('profileSurname'): $user->profile->surname),
            'body'       => (!empty($request->get('body'))?$request->get('body'): $user->profile->body),
            'local'      => (!empty($request->get('local'))?$request->get('local'): $user->profile->local),
            'country'    => (!empty($request->get('country'))?$request->get('country'): $user->profile->contry),
            'birth'      => (!empty($request->get('birth'))?$request->get('birth'): $user->profile->birth),
            'genre'      => (!empty($request->get('genre'))?$request->get('genre'): $user->profile->genre),
            'social1'    => (!empty($request->get('social1'))?$request->get('social1'): $user->profile->social1),
            'social2'    => (!empty($request->get('social2'))?$request->get('social2'): $user->profile->social2),
            'social3'    => (!empty($request->get('social3'))?$request->get('social3'): $user->profile->social3),
            'web'        => (!empty($request->get('web'))?$request->get('web'): $user->profile->web),
            'phone'      => (!empty($request->get('phone'))?$request->get('phone'): $user->profile->phone),
        ])->save();


        return redirect()->route('adminprofile.edit', $id)
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
        //
    }


    public function profile()
    {
        $user = Auth::user();
        $role = Role::find($user->profile->role_id);

        $pageData = ['title' => 'Perfil de '.$user->name, 'smenu' => '', 'bg' => 'img/profile-bg.jpg'];

        $total = Post::where('user_id', auth()->user()->id)->count();
        $publicadas  =  Post::where('status','PUBLISHED')
            ->where('user_id', auth()->user()->id)
            ->count();

        $numberOfPosts = [ "total" => $total, "publicadas" => $publicadas ] ;

        $posts = Post::where('status','PUBLISHED')
            ->where('user_id', auth()->user()->id);

        return view('admin.profile.profile',compact('user','pageData','role','numberOfPosts','posts'));
    }


    public function update_avatar(Request $requeest){
        $user = Auth::user();

        if($requeest->hasFile('file')){
            $file = $requeest->file('file');
            $filename = $user->id . time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300,300)->save( public_path('/img/users/'.$filename ));

            $user->profile->file = '/img/users/' . $filename;

            $user->profile->save();

        }

        return back()->with('info','Operação executada com sucesso.');


    }





}
