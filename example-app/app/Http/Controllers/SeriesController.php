<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

/**
 * Class SeriesController
 * @package App\Http\Controllers
 */
class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::paginate();

        return view('series.index', compact('series'))
            ->with('i', (request()->input('page', 1) - 1) * $series->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = new Series();
        return view('series.create', compact('series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Series::$rules);

        $series = Series::create($request->all());

        return redirect()->route('series.index')
            ->with('success', 'Series created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $series = Series::find($id);

        return view('series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $series = Series::find($id);

        return view('series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Series $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Series $series)
    {
        request()->validate(Series::$rules);

        $series->update($request->all());

        return redirect()->route('series.index')
            ->with('success', 'Series updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $series = Series::find($id)->delete();

        return redirect()->route('series.index')
            ->with('success', 'Series deleted successfully');
    }
}
