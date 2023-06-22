<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use App\Models\Student;
use App\Models\Center;
use Illuminate\Http\Request;

/**
 * Class HostingController
 * @package App\Http\Controllers
 */
class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostings = Hosting::paginate();

        return view('hosting.index', compact('hostings'))
            ->with('i', (request()->input('page', 1) - 1) * $hostings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hosting = new Hosting();
        $students = Student::all();
        $centers = Center::all();
        return view('hosting.create', compact('hosting', 'students', 'centers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hosting::$rules);

        Hosting::create($request->all());

        return redirect()->route('Alojamientos.index')
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
        $hosting = Hosting::find($id);

        return view('hosting.show', compact('hosting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hosting = Hosting::find($id);
        $students = Student::all();
        $centers = Center::all();

        return view('hosting.edit', compact('hosting', 'students', 'centers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hosting $hosting
     * @return \Illuminate\Http\Response
     */
    public function update($hosting)
    {
        request()->validate(Hosting::$rules);
        $Hostings = request()->except('_token', '_method');
        Hosting::where('id_Hosting', '=', $hosting)->update($Hostings);

        return redirect()->route('Alojamientos.index')
            ->with('mensaje', 'Registro actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Hosting::find($id)->delete();

        return redirect()->route('Alojamientos.index')
            ->with('mensaje', 'Registro eliminado correctamente');
    }
}
