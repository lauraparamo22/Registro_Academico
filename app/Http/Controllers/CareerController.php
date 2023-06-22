<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Sector;
use Illuminate\Http\Request;

/**
 * Class CareerController
 * @package App\Http\Controllers
 */
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::paginate();

        return view('career.index', compact('careers'))
            ->with('i', (request()->input('page', 1) - 1) * $careers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career = new Career();
        $sectors = Sector::all();
        return view('career.create', compact('career', 'sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Career::$rules);

        Career::create($request->all());

        return redirect()->route('Carreras.index')
            ->with('mensaje', 'Carrera creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::find($id);

        return view('career.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::find($id);
        $sectors = Sector::all();

        return view('career.edit', compact('career', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Career $career
     * @return \Illuminate\Http\Response
     */
    public function update($career)
    {
        request()->validate(Career::$rules, Career::$messages);
        $Careers = request()->except('_token', '_method');
        Career::where('id_Career', '=', $career)->update($Careers);

        return redirect()->route('Carreras.index')
            ->with('mensaje', 'Carrera actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Career::find($id)->delete();

        return redirect()->route('Carreras.index')
            ->with('mensaje', 'Carrera eliminada correctamente');
    }
}
