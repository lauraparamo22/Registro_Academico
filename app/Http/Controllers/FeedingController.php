<?php

namespace App\Http\Controllers;

use App\Models\Feeding;
use App\Models\Hosting;
use Illuminate\Http\Request;

/**
 * Class FeedingController
 * @package App\Http\Controllers
 */
class FeedingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedings = Feeding::paginate();

        return view('feeding.index', compact('feedings'))
            ->with('i', (request()->input('page', 1) - 1) * $feedings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feeding = new Feeding();
        $hostings = Hosting::all();

        return view('feeding.create', compact('feeding', 'hostings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Feeding::$rules);

        Feeding::create($request->all());

        return redirect()->route('Alimentacion.index')
            ->with('mensaje', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feeding = Feeding::find($id);

        return view('feeding.show', compact('feeding'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feeding = Feeding::find($id);
        $hostings = Hosting::all();

        return view('feeding.edit', compact('feeding', 'hostings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Feeding $feeding
     * @return \Illuminate\Http\Response
     */
    public function update($feeding)
    {
        request()->validate(Feeding::$rules);
        $Feedings = request()->except('_token', '_method');
        Feeding::where('id_Feeding', '=', $feeding)->update($Feedings);

        return redirect()->route('Alimentacion.index')
            ->with('mensaje', 'Registro actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Feeding::find($id)->delete();

        return redirect()->route('Alimentacion.index')
            ->with('mensaje', 'Registro eliminado correctamente');
    }
}
