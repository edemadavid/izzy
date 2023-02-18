<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:sermons|max:255',
            'location' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'date' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect('sermon/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        $events = new Event();
        $events->title =  $validated['title'];
        $events->location = $validated['location'];
        $events->venue = $validated['venue'];
        $events->description = $validated['description'];
        $events->date = $validated['date'];

        $events -> save();

        return redirect()->action(
            [EventController::class, 'index']

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event, $id)
    {
        $events = Event::find($id)->get();

        return view('admin.editEvent', Compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event, $id)
    {
        $events = Event::find($id);

        // validateds all input...
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:sermons|max:255',
            'location' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'date' => 'required',

        ]);

        // checks id validator fails and returns to form ...
        if ($validator->fails()) {
            return redirect('sermon/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        $events->title =  $validated['title'];
        $events->location = $validated['location'];
        $events->venue = $validated['venue'];
        $events->description = $validated['description'];
        $events->date = $validated['date'];

        $events -> save();

        $events->save();


        return redirect()->action(
            [EventController::class, 'index']

        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event, $id)
    {
        $event = Event::find($id);

        $event->delete();


        return redirect()->action(
            [EventController::class, 'index']
        );
    }
}
