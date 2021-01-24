<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workplace;

class WorkplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workplaces = Workplace::paginate();
        return view('workplaces.index', compact ('workplaces')); 
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('workplaces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'title' => 'required|unique:workplaces|max:255',
            'started_at' => '']);
        $workplace = Workplace::create($validated);
        return view('workplaces.show', compact('workplace'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workplace = Workplace::findOrFail($id);
        return view('workplaces.show', compact('workplace'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workplace = Workplace::findOrFail($id);

        return view('workplaces.edit',
            compact('workplace')
        );
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
        $validated = $request->validate([
            'title' => 'required|max:255'
        ]);

        $workplace = Workplace::findOrFail($id);
        $workplace->fill($validated);
        $workplace->save();

        return redirect()->route('workplaces.show', ['workplace' => $workplace->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Workplace::destroy($id);

         /* nakon brisanja, napravi redirect na index stranicu */
         return redirect()->route('workplaces.index');
    }
}
