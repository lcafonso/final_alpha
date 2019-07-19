<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TechnologieStoreRequest;
use App\Http\Requests\TechnologieUpdateRequest;

use App\Http\Controllers\Controller;

use App\Technologie;

class TechnologieController extends Controller
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
        $technologies = Technologie::orderBy('id','DESC')->paginate();

        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.technologies.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TechnologieStoreRequest $request)
    {
        $technologie = Technologie::create($request->all());

        return redirect()->route('admintechnologies.edit', $technologie->id)
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
        $technologie = Technologie::find($id);

        return view('admin.technologies.show', compact('technologie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technologie = Technologie::find($id);

        return view('admin.technologies.edit', compact('technologie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TechnologieUpdateRequest $request, $id)
    {
        $technologie = Technologie::find($id);

        $technologie->fill($request->all())->save();

        return redirect()->route('admintechnologies.edit', $technologie->id)
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
        Technologie::find($id)->delete();

        return back()->with('info','Operação executada com sucesso.');
    }
}
