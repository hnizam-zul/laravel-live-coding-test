<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        return Event::all();
    }
 
    public function show($id)
    {
        return Event::find($id);
    }

    public function store(Request $request)
    {
        return Event::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());

        return $event;
    }

    public function delete(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return 204;
    }
}