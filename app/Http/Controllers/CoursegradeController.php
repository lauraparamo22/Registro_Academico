<?php

namespace App\Http\Controllers;

use App\Models\Coursegrade;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

/**
 * Class CoursegradeController
 * @package App\Http\Controllers
 */
class CoursegradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursegrades = Coursegrade::paginate();

        return view('coursegrade.index', compact('coursegrades'))
            ->with('i', (request()->input('page', 1) - 1) * $coursegrades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coursegrade = new Coursegrade();
        $students = Student::all();
        $courses = Course::all();
        return view('coursegrade.create', compact('coursegrade', 'students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coursegrade::$rules);

        Coursegrade::create($request->all());

        return redirect()->route('NotasCursos.index')
            ->with('mensaje', 'Calificación creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coursegrade = Coursegrade::find($id);

        return view('coursegrade.show', compact('coursegrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coursegrade = Coursegrade::find($id);
        $students = Student::all();
        $courses = Course::all();

        return view('coursegrade.edit', compact('coursegrade', 'students', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coursegrade $coursegrade
     * @return \Illuminate\Http\Response
     */
    public function update($coursegrade)
    {
        request()->validate(Coursegrade::$rules);
        $Coursegrades = request()->except('_token', '_method');
        Coursegrade::where('id_CourseGrade', '=', $coursegrade)->update($Coursegrades);

        return redirect()->route('NotasCursos.index')
            ->with('mensaje', 'Calificación actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Coursegrade::find($id)->delete();

        return redirect()->route('NotasCursos.index')
            ->with('mensaje', 'Calificación eliminada correctamente');
    }
}
