<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.add-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        $event = Event::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'thumbnail'=>'image'
        ]);

        if ($event && $request->thumbnail){
            $thumbnail = $request->thumbnail;
            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->save(base_path('/public/storage/events/'.$event->id.'-'. $image_new_name));
            $event->thumbnail = 'http://127.0.0.1:8000/storage/events/'.$event->id.'-'. $image_new_name;
            $event->save();
        }
        if ($event) {
            Session::flash('success', 'Event Created Successfully :)');
        }

        return redirect()->back();
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
