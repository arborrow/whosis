<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller

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
      $rooms = \App\Models\Room::orderBy('title', 'ASC')->paginate(25);

      return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = \App\Models\School::orderBy('title')->pluck('id','title');
        return view('rooms.create',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * room_id 	school_id 	title 	capacity 	description 	sort_order
     */
    public function store(StoreRoomRequest $request)
    {
      $room = new \App\Models\Room;

      $room->school_id = $request->input('school_id');
      $room->title = $request->input('title');
      $room->capacity = $request->input('capacity');
      $room->description = $request->input('description');
      $room->sort_order = $request->input('sort_order');

      $room->save();

      flash($room->title.' saved')->success();

      return Redirect::action('RoomController@show', $room->room_id); //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $room = \App\Models\Room::findOrFail($id);
      return view('rooms.show', compact('room'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $schools = \App\Models\School::orderBy('title')->pluck('id','title');
      $room = \App\Models\Room::findOrFail($id);

      return view('rooms.edit', compact('room','schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * room_id 	school_id 	title 	capacity 	description 	sort_order
     */

    public function update(UpdateRoomRequest $request, $id)
    {
        $room = \App\Models\Room::findOrFail($id);

        $room->school_id = $request->input('school_id');
        $room->title = $request->input('title');
        $room->capacity = $request->input('capacity');
        $room->description = $request->input('description');
        $room->sort_order = $request->input('sort_order');
        $room->save();

        flash($room->title.' updated')->success();

        return redirect()->action([RoomController::class, 'show'], $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $room = \App\Models\Room::findOrFail($id);

      \App\Models\Room::destroy($id);

      flash($room->title.' deleted')->warning()->important();

      return Redirect::action('RoomController@index');

    }
}
