<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\CountyStoreRequest;
use App\Http\Requests\CountyUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\County;

class CountyController extends Controller
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
        $counties = County::orderBy('District_id','ASC')->orderBy('county_id','ASC')->paginate();

        return view('admin.counties.index', compact('counties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $county = new County;
        return view('admin.counties.create', compact('county') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountyStoreRequest $request, $id)
    {
        $county = County::create($request->all());

        return redirect()->route('admincounties.edit', $county->id)
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
        $county = County::find($id);

        return view('admin.counties.show', compact('county'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $county = County::find($id);

        return view('admin.counties.edit', compact('county'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountyUpdateRequest $request, $id)
    {
        $county = County::find($id);

        $county->fill($request->all())->save();

        return redirect()->route('admincounties.edit', $county->id)
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
        Countiy::find($id)->delete();

        return back()->with('info','Operação executada com sucesso.');
    }
}
