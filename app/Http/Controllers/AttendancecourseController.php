<?php

namespace App\Http\Controllers;

use App\Models\Attendancecourse;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

/**
 * Class AttendancecourseController
 * @package App\Http\Controllers
 */
class AttendancecourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancecourses = Attendancecourse::paginate();

        return view('attendancecourse.index', compact('attendancecourses'))
            ->with('i', (request()->input('page', 1) - 1) * $attendancecourses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attendancecourse = new Attendancecourse();
        $students = Student::all();
        $courses = Course::all();
        return view('attendancecourse.create', compact('attendancecourse', 'students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Attendancecourse::$rules);

        Attendancecourse::create($request->all());

        return redirect()->route('AsistenciaCurso.index')
            ->with('mensaje', 'Asistencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendancecourse = Attendancecourse::find($id);

        return view('attendancecourse.show', compact('attendancecourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendancecourse = Attendancecourse::find($id);
        $students = Student::all();
        $courses = Course::all();

        return view('attendancecourse.edit', compact('attendancecourse', 'students', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Attendancecourse $attendancecourse
     * @return \Illuminate\Http\Response
     */
    public function update($attendancecourse)
    {
        request()->validate(Attendancecourse::$rules);
        $Attendancecourses = request()->except('_token', '_method');
        Attendancecourse::where('id_AttendanceCourse', '=', $attendancecourse)->update($Attendancecourses);

        return redirect()->route('AsistenciaCurso.index')
            ->with('mensaje', 'Asistencia actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Attendancecourse::find($id)->delete();

        return redirect()->route('AsistenciaCurso.index')
            ->with('mensaje', 'Asistencia eliminadada correctamente');
    }
}
