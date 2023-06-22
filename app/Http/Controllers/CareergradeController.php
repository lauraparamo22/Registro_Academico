<?php

namespace App\Http\Controllers;

use App\Models\Careergrade;
use App\Models\Student;
use App\Models\Career;
use App\Models\Module;
use Illuminate\Http\Request;

/**
 * Class CareergradeController
 * @package App\Http\Controllers
 */
class CareergradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careergrades = Careergrade::paginate();

        return view('careergrade.index', compact('careergrades'))
            ->with('i', (request()->input('page', 1) - 1) * $careergrades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careergrade = new Careergrade();
        $students = Student::all();
        $careers = Career::all();
        $modules = Module::all();

        return view('careergrade.create', compact('careergrade', 'students', 'careers', 'modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Careergrade::$rules);

        Careergrade::create($request->all());

        return redirect()->route('NotasCarreras.index')
            ->with('mensaje', 'Calificación creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careergrade = Careergrade::find($id);

        return view('careergrade.show', compact('careergrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careergrade = Careergrade::find($id);
        $students = Student::all();
        $careers = Career::all();
        $modules = Module::all();

        return view('careergrade.edit', compact('careergrade', 'students', 'careers', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Careergrade $careergrade
     * @return \Illuminate\Http\Response
     */
    public function update($careergrade)
    {
        request()->validate(Careergrade::$rules);
        $Careergrades = request()->except('_token', '_method');
        Careergrade::where('id_CareerGrade', '=', $careergrade)->update($Careergrades);

        return redirect()->route('NotasCarreras.index')
            ->with('mensaje', 'Calificación actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Careergrade::find($id)->delete();

        return redirect()->route('NotasCarreras.index')
            ->with('mensaje', 'Calificación eliminada correctamente');
    }
}
