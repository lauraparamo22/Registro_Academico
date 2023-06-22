<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Sector;
use Illuminate\Http\Request;

/**
 * Class CourseController
 * @package App\Http\Controllers
 */
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate();

        return view('course.index', compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * $courses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Course();
        $sectors = Sector::all();
        return view('course.create', compact('course','sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Course::$rules);

        Course::create($request->all());

        return redirect()->route('Cursos.index')
            ->with('mensaje', 'Curso creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);

        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $sectors = Sector::all();

        return view('course.edit', compact('course','sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Course $course
     * @return \Illuminate\Http\Response
     */
    public function update($course)
    {
        request()->validate(Course::$rules, Course::$messages);
        $Courses = request()->except('_token', '_method');
        Course::where('id_Course', '=', $course)->update($Courses);


        return redirect()->route('Cursos.index')
            ->with('mensaje', 'Curso actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Course::find($id)->delete();

        return redirect()->route('Cursos.index')
            ->with('mensaje', 'Curso eliminado correctamente');
    }
}
