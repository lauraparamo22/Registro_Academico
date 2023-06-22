<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Career;
use Illuminate\Http\Request;

/**
 * Class ModuleController
 * @package App\Http\Controllers
 */
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::paginate();

        return view('module.index', compact('modules'))
            ->with('i', (request()->input('page', 1) - 1) * $modules->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = new Module();
        $careers = Career::all();

        return view('module.create', compact('module', 'careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Module::$rules);

        Module::create($request->all());

        return redirect()->route('Modulos.index')
            ->with('mensaje', 'Modulo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::find($id);

        return view('module.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::find($id);
        $careers = Career::all();

        return view('module.edit', compact('module', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Module $module
     * @return \Illuminate\Http\Response
     */
    public function update($module)
    {
        request()->validate(Module::$rules);
        $Modules = request()->except('_token', '_method');
        Module::where('id_Module', '=', $module)->update($Modules);

        return redirect()->route('Modulos.index')
            ->with('mensaje', 'Modulo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Module::find($id)->delete();

        return redirect()->route('Modulos.index')
            ->with('mensaje', 'Modulo eliminado correctamente');
    }
}
