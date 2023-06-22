<?php

namespace App\Http\Controllers;

use App\Models\Attendancecareer;
use App\Models\Student;
use App\Models\Career;
use Illuminate\Http\Request;

/**
 * Class AttendancecareerController
 * @package App\Http\Controllers
 */
class AttendancecareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancecareers = Attendancecareer::paginate();

        return view('attendancecareer.index', compact('attendancecareers'))
            ->with('i', (request()->input('page', 1) - 1) * $attendancecareers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attendancecareer = new Attendancecareer();
        $students = Student::all();
        $careers = Career::all();

        return view('attendancecareer.create', compact('attendancecareer', 'students', 'careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Attendancecareer::$rules);

        Attendancecareer::create($request->all());

        return redirect()->route('AsistenciaCarrera.index')
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
        $attendancecareer = Attendancecareer::find($id);

        return view('attendancecareer.show', compact('attendancecareer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendancecareer = Attendancecareer::find($id);
        $students = Student::all();
        $careers = Career::all();

        return view('attendancecareer.edit', compact('attendancecareer', 'students', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Attendancecareer $attendancecareer
     * @return \Illuminate\Http\Response
     */
    public function update($attendancecareer)
    {
        request()->validate(Attendancecareer::$rules);
        $Attendancecareers = request()->except('_token', '_method');
        Attendancecareer::where('id_AttendanceCareer', '=', $attendancecareer)->update($Attendancecareers);

        return redirect()->route('AsistenciaCarrera.index')
            ->with('mensaje', 'Asistencia actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Attendancecareer::find($id)->delete();

        return redirect()->route('AsistenciaCarrera.index')
            ->with('mensaje', 'Asistencia eliminada correctamente');
    }
}
