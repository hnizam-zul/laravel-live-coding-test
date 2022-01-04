<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Event::latest()->paginate(5);

        return view('index', compact('events'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Event $event)
    {
        return view('show', compact('event'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
        ]);
        Event::create($request->all());

        $user = Auth::user();

        // Send email notification
        $user->notify(new EventCreated);

        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    public function edit(Event $event)
    {
        return view('edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
        ]);
        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('posts.index')->with('success', 'Event deleted successfully');
    }
}
