<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DistrictUpdateRequest;
use App\Http\Requests\DistrictStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\District;

class DistrictController extends Controller
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
        $districts = District::orderBy('district_id','ASC')->paginate();

        return view('admin.districts.index', compact('districts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = new District;
        return view('admin.districts.create', compact('district') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictStoreRequest $request)
    {
        $district = District::create($request->all());

        return redirect()->route('admindistricts.edit', $district->id)
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
        $district = District::find($id);

        return view('admin.districts.show', compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::find($id);

        return view('admin.districts.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistrictUpdateRequest $request, $id)
    {
        $district = District::find($id);

        $district->fill($request->all())->save();

        return redirect()->route('admindistricts.edit', $district->id)
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
        District::find($id)->delete();

        return back()->with('info','Operação executada com sucesso.');
    }
}
