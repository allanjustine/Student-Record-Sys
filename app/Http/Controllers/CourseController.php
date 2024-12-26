<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCount = Student::count();
        $courseCount = Course::count();
        $userCount = User::count();
        $courses = Course::orderBy('course_name')->with('students')->paginate(5);

        return inertia('courses/Index', [
            'courses' => $courses,
            'userCount' => $userCount,
            'studentCount' => $studentCount,
            'courseCount' => $courseCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('courses/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required'
        ]);

        Course::create([
            'course_name' => $request->course_name,
            'course_description' => $request->course_description
        ]);

        return redirect('/courses')->with('success', 'A new cmpany has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return Inertia::render('courses/Edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update([
            'course_name' => $request->input('course_name'),
            'course_description' => $request->input('course_description')

        ]);


        return redirect('/courses')->with('success', 'The course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
