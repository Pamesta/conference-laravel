<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{

    public function showList()
    {
        $conferences = Conference::all();
        return view('conferences.list', ['conferences' => $conferences]);
    }

    public function showEditForm($id)
    {
        $conference = Conference::find($id);
        return view('conferences.edit', ['conference' => $conference]);
    }

    public function update($id, EditConferenceRequest $request)
    {

        $validated = $request->validated();

        $conference = Conference::find($id);
        $conference->fill($validated);
        $conference->save();

        $request->session()->flash('status', 'Conference updated');

        return redirect()->route('conferences/edit', $id);
    }

    public function delete($id)
    {
        $conference = Conference::find($id);
        $conference->delete();
        return redirect()->route('conferences');
    }
}
