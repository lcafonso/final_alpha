<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Auth;
use App\User;



class ProfileController extends Controller
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

        $users = User::orderBy('id','DESC')->paginate();

        return view('admin.users.index',compact('users'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        return view('admin.users.create', compact('user') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $user = User::find($id);
        $followers = $user->followers;
        $followings = $user->followings;


        return view('admin.users.show', compact('user', 'followers' , 'followings') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->fill([
            'name'       => (!empty($request->get('name'))?$request->get('name'): $user->name),
            'password'   => (!empty($request->get('password'))?$request->get('password'):$user->password),
        ])->save();


        $profile = Profile::where('user_id',$id);

        $profile->fill($request->all())->save();


        return redirect()->route('adminprofiles.edit', $id)
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


    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function followUser(int $profileId)
    {
        $user = User::find($profileId);
        if(! $user) {
            return back()->with('info', 'User does not exist.');
        }
        $user->followers()->attach(auth()->user()->id);
        return back()->with('info', 'Successfully followed the user.');
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function unFollowUser(int $profileId)
    {
        $user = User::find($profileId);
        if(! $user) {
            return back()->with('info', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return back()->with('info', 'Successfully unfollowed the user.');
    }

}
