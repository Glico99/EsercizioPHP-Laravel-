<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function submit()
    {
        $validated = request()->validate([
            'content' => 'required|min:3|max:240',
        ]);

        $validated['user_id'] = auth()->user()->id;

        $idea = Idea::create($validated);

        $idea->save();

        return redirect()->route('showDashboard')->with('success', 'Idea Created!');
    }

    public function show(Idea $id)
    {
        return view('idea', [
            'idea' => $id,
        ]);
    }

    public function edit(Idea $id)
    {
        if (auth()->id() == $id->user_id) {
            $editing = true;
        } else {
            return redirect()->route('loginUser');
        }

        return view('idea', [
            'idea' => $id,
            'editing' => $editing,
        ]);
    }

    public function update(Idea $id)
    {
        if (auth()->id() == $id->user_id) {
            $id->update([
                'content' => request()->get('updated', ''),
            ]);
        } else {
            return redirect()->route('loginUser');
        }

        return redirect()->route('showDashboard')->with('updated', 'Idea Updated!');
    }

    public function delete(Idea $id)
    {
        if (auth()->id() == $id->user_id) {
            $id->delete();
        } else {
            return redirect()->route('loginUser');
        }

        return redirect()->route('showDashboard')->with('deleted', 'Idea Deleted!');
    }
}
