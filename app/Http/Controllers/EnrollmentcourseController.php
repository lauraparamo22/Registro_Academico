<?php

namespace App\Http\Controllers;

use App\Models\Enrollmentcourse;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

/**
 * Class EnrollmentcourseController
 * @package App\Http\Controllers
 */
class EnrollmentcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollmentcourses = Enrollmentcourse::paginate();

        return view('enrollmentcourse.index', compact('enrollmentcourses'))
            ->with('i', (request()->input('page', 1) - 1) * $enrollmentcourses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrollmentcourse = new Enrollmentcourse();
        $students = Student::all();
        $courses = Course::all();

        return view('enrollmentcourse.create', compact('enrollmentcourse', 'students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Enrollmentcourse::$rules);

        Enrollmentcourse::create($request->all());

        return redirect()->route('MatriculaCursos.index')
            ->with('mensaje', 'Matricula creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollmentcourse = Enrollmentcourse::find($id);

        return view('enrollmentcourse.show', compact('enrollmentcourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrollmentcourse = Enrollmentcourse::find($id);
        $students = Student::all();
        $courses = Course::all();

        return view('enrollmentcourse.edit', compact('enrollmentcourse', 'students', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Enrollmentcourse $enrollmentcourse
     * @return \Illuminate\Http\Response
     */
    public function update($enrollmentcourse)
    {
        request()->validate(Enrollmentcourse::$rules);
        $Enrollmentcourses = request()->except('_token', '_method');
        Enrollmentcourse::where('id_EnrollmentCourse', '=', $enrollmentcourse)->update($Enrollmentcourses);

        return redirect()->route('MatriculaCursos.index')
            ->with('mensaje', 'Matricula actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Enrollmentcourse::find($id)->delete();

        return redirect()->route('MatriculaCursos.index')
            ->with('mensaje', 'Matricula eliminada correctamente');
    }
}
