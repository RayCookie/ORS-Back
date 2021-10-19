<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
    if (Auth::user()){
        return view('event.event_list',compact('events'));}
        return view('guest.events',compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('event.event_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'auteur' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $event = new Event();
        $event->title = $request->get('title');
        $event->body = $request->get('body');
        $event->auteur = $request->get('auteur');
        $event->image = $input['imagename'];
        $event->save();
        return redirect()->route('all_events')->with('status', 'New event has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return view('event.event_edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event_id)
    {
        $event = Blog::find($event_id);
        $event->title = $request->get('title');
        $event->body = $request->get('body');
        $event->auteur = $request->get('auteur');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $event->image = $input['imagename'];
        }
        $event->save();
        return redirect()->route('all_events')->with('status', 'event has been successfully updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id)
    {
        $event_id->delete();
        return redirect()->route('all_events')->with('status', 'event has been successfully deleted!');
    }
}
