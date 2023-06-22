<?php

namespace App\Http\Controllers;

use App\Models\Enrollmentcareer;
use App\Models\Student;
use App\Models\Career;
use Illuminate\Http\Request;

/**
 * Class EnrollmentcareerController
 * @package App\Http\Controllers
 */
class EnrollmentcareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollmentcareers = Enrollmentcareer::paginate();

        return view('enrollmentcareer.index', compact('enrollmentcareers'))
            ->with('i', (request()->input('page', 1) - 1) * $enrollmentcareers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrollmentcareer = new Enrollmentcareer();
        $students = Student::all();
        $careers = Career::all();
        
        return view('enrollmentcareer.create', compact('enrollmentcareer', 'students', 'careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Enrollmentcareer::$rules);

        Enrollmentcareer::create($request->all());

        return redirect()->route('MatriculaCarreras.index')
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
        $enrollmentcareer = Enrollmentcareer::find($id);

        return view('enrollmentcareer.show', compact('enrollmentcareer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrollmentcareer = Enrollmentcareer::find($id);
        $students = Student::all();
        $careers = Career::all();

        return view('enrollmentcareer.edit', compact('enrollmentcareer', 'students', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Enrollmentcareer $enrollmentcareer
     * @return \Illuminate\Http\Response
     */
    public function update($enrollmentcareer)
    {
        request()->validate(Enrollmentcareer::$rules);
        $Enrollmentcareers = request()->except('_token', '_method');
        Enrollmentcareer::where('id_EnrollmentCareer', '=', $enrollmentcareer)->update($Enrollmentcareers);

        return redirect()->route('MatriculaCarreras.index')
            ->with('mensaje', 'Matricula actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Enrollmentcareer::find($id)->delete();

        return redirect()->route('MatriculaCarreras.index')
            ->with('mensaje', 'Matricula eliminada correctamente');
    }
}
