<?php

namespace App\Http\Controllers;

use App\Models\ListaRep;
use Illuminate\Http\Request;

/**
 * Class ListaRepController
 * @package App\Http\Controllers
 */
class ListaRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaReps = ListaRep::paginate();

        return view('lista-rep.index', compact('listaReps'))
            ->with('i', (request()->input('page', 1) - 1) * $listaReps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaRep = new ListaRep();
        return view('lista-rep.create', compact('listaRep'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ListaRep::$rules);

        $listaRep = ListaRep::create($request->all());

        return redirect()->route('lista-reps.index')
            ->with('success', 'ListaRep created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaRep = ListaRep::find($id);

        return view('lista-rep.show', compact('listaRep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listaRep = ListaRep::find($id);

        return view('lista-rep.edit', compact('listaRep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ListaRep $listaRep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaRep $listaRep)
    {
        request()->validate(ListaRep::$rules);

        $listaRep->update($request->all());

        return redirect()->route('lista-reps.index')
            ->with('success', 'ListaRep updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listaRep = ListaRep::find($id)->delete();

        return redirect()->route('lista-reps.index')
            ->with('success', 'ListaRep deleted successfully');
    }
}
