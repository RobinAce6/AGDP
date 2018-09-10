<?php

namespace App\Http\Controllers;

use App\Models\Dependency;
use Illuminate\Http\Request;

class DependencyController extends Core\BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depend = Dependency::all();
        return view ('depend.listD', compact('depend'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:120'
        ]);
        
        $Dependency = new Dependency;


        $Dependency->name = $request->name;
        $Dependency->save();

        return redirect()->route('depend')
            ->with('flash_message',
             'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function show(Dependency $dependency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependency $dependency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependency $dependency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependency $dependency)
    {
        //
    }
}
