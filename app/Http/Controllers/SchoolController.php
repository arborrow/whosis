<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;

class SchoolController extends Controller
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
        $schools = \App\Models\School::orderBy('title', 'ASC')->paginate(25);

        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request)
    {
        $school = new \App\Models\School;
        $school->title = $request->input('title');
        $school->principal = $request->input('principal');
        $school->address = $request->input('address');
        $school->city = $request->input('city');
        $school->state = $request->input('state');
        $school->phone = $request->input('phone');
        $school->e_mail = $request->input('e_mail');
        $school->www_address = $request->input('www_address');

        $school->save();

        \Session::flash('flash.banner', $school->title.' '.__('saved'));

        return Redirect::action('SchoolController@show', $school->id); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = \App\Models\School::findOrFail($id);
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = \App\Models\School::findOrFail($id);
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateSchoolRequest $request, $id)
    {
        $school = \App\Models\School::findOrFail($id);

        $school->title = $request->input('title');
        $school->principal = $request->input('principal');
        $school->address = $request->input('address');
        $school->city = $request->input('city');
        $school->state = $request->input('state');
        $school->phone = $request->input('phone');
        $school->e_mail = $request->input('e_mail');
        $school->www_address = $request->input('www_address');
        $school->save();

        \Session::flash('flash.banner', $school->title.' '.__('updated'));
        \Session::flash('flash.bannerStyle', 'success');

        return redirect()->action([SchoolController::class, 'show'], $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = \App\Models\School::findOrFail($id);

        \App\Models\School::destroy($id);

        \Session::flash('flash.banner', $school->title.' '.__('deleted'));
        \Session::flash('flash.bannerStyle', 'warning');

        return Redirect::action('SchoolController@index');
    }
}
