<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
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
        $students = Student::orderBy('student_first_name')->with('course')->paginate(10);

        return inertia('students/Index', [
            'students' => $students,
            'studentCount' => $studentCount,
            'userCount' => $userCount,
            'courseCount' => $courseCount
        ]);
    }

    public function view($id)
    {
        $student = Student::with('course')->findOrFail($id);
        $courses = Course::all();

        return Inertia::render('students/View', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return inertia('students/Create', [
            'courses' => $courses
        ]);
        return inertia('students/Create');
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
            'student_id' => 'required|unique:students',
            'student_first_name' => 'required',
            'student_last_name' => 'required',
            'student_mobile_number' => 'required',
            'student_email' => 'required',
            'course_id' => 'required'
        ]);

        Student::create([
            'student_id' => $request->student_id,
            'student_first_name' => $request->student_first_name,
            'student_last_name' => $request->student_last_name,
            'student_mobile_number' => $request->student_mobile_number,
            'student_email' => $request->student_email,
            'course_id' => $request->course_id
        ]);

        return redirect('/students')->with('success', 'A new student has been added.');
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
        $student = Student::with('course')->findOrFail($id);
        $courses = Course::all();

        return Inertia::render('students/Edit', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'student_id' => $request->input('student_id'),
            'student_first_name' => $request->input('student_first_name'),
            'student_last_name' => $request->input('student_last_name'),
            'student_email' => $request->input('student_email'),
            'student_mobile_number' => $request->input('student_mobile_number'),
            'course_id' => $request->input('course_id')

        ]);


        return redirect('/students')->with('success', 'The student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $student = Student::with('course')->findOrFail($id);
        $courses = Course::all();

        return Inertia::render('students/Delete', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student deleted successfully');
    }
}
