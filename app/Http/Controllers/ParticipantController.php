<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantRequest;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participants = Participant::paginate(5);
        return view('admin.participant.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.participant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipantRequest $request)
    {
        $participant = $request
            ->user()
            ->participants()
            ->create([
                'name' => $request['name'],
                'email' => $request['email'],
                'x' => $request['x'],
                'y' => $request['y'],
                'z' => $request['z'],
                'w' => $request['w'],
            ]);

        return redirect()->route('participant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        return view('admin.participant.edit', compact('participant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ParticipantRequest $request,
        Participant $participant
    ) {
        $this->authorize('update', $participant);

        $participant->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'x' => $request['x'],
            'y' => $request['y'],
            'z' => $request['z'],
            'w' => $request['w'],
        ]);

        return redirect()->route('participant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        $this->authorize('delete', $participant);

        $participant->delete();

        return redirect()->route('participant.index');
    }
}
