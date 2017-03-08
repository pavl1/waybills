<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Organization;
use App\Auto;


class WaybillController extends Controller
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
        $waybills = DB::table('auto_organization')
            ->select('auto_id', 'organization_id')
            ->get();

        $autos = Auto::with('type', 'employers', 'employers')->get();
        $organizations = Organization::all();

        $waybills->transform( function($item) use ($autos, $organizations) {
            $item->auto = $autos->where('id', $item->auto_id)->first();
            $item->customer = $organizations->where('id', $item->organization_id)->first();
            $item->string = str_replace( ' ', '',
                mb_strtolower($item->auto->model) .
                mb_strtolower($item->auto->numberplate) .
                mb_strtolower($item->auto->type->name) .
                mb_strtolower($item->customer->name) .
                mb_strtolower($item->customer->address)
            );
            return $item;
        });

        return $waybills;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('waybill');
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
        //
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
}
