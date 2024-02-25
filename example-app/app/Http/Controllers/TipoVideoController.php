<?php

namespace App\Http\Controllers;

use App\Models\TipoVideo;
use Illuminate\Http\Request;

/**
 * Class TipoVideoController
 * @package App\Http\Controllers
 */
class TipoVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoVideos = TipoVideo::paginate();

        return view('tipo-video.index', compact('tipoVideos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoVideos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoVideo = new TipoVideo();
        return view('tipo-video.create', compact('tipoVideo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoVideo::$rules);

        $tipoVideo = TipoVideo::create($request->all());

        return redirect()->route('tipo-videos.index')
            ->with('success', 'TipoVideo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoVideo = TipoVideo::find($id);

        return view('tipo-video.show', compact('tipoVideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoVideo = TipoVideo::find($id);

        return view('tipo-video.edit', compact('tipoVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoVideo $tipoVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoVideo $tipoVideo)
    {
        request()->validate(TipoVideo::$rules);

        $tipoVideo->update($request->all());

        return redirect()->route('tipo-videos.index')
            ->with('success', 'TipoVideo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoVideo = TipoVideo::find($id)->delete();

        return redirect()->route('tipo-videos.index')
            ->with('success', 'TipoVideo deleted successfully');
    }
}
