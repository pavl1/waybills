<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Auto;

class AutoController extends Controller
{

    public function __construct ()
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
        return Auto::with('type', 'organizations', 'employers', 'employers.position')->get();
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
        $auto = new Auto;
        $auto->model = $request->model;
        $auto->numberplate = $request->numberplate;
        $auto->type_id = $request->type_id;

        $auto->save();
        $auto->employers()->sync($request->employers_ids);

        $auto = Auto::with('type', 'organizations', 'employers', 'employers.position')->find($auto->id);

        return $auto;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auto');
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
        $auto = Auto::find($id);
        $auto->model = $request->model;
        $auto->numberplate = $request->numberplate;
        $auto->type_id = $request->type_id;

        $auto->save();
        $auto->employers()->sync($request->employer_ids);

        $auto = Auto::with('type', 'organizations', 'employers', 'employers.position')->find($id);

        return $auto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->organizations()->detach();
        $auto->employers()->detach();

        return Auto::destroy($id);
    }
}
