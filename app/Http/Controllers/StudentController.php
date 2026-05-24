<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //GET /api/students
    public function index()
    {
        return response()
            ->json(Student::all());
    }
    //GET /api/students/(id)
    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()
                ->json(['message' => 'Student not found'], 404);
        }
        return response()
            ->json($student);
    }

    //POST/api/student (single)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'course' => 'required|string',
        ]);

        $student = Student::create($validated);

        return response()
            ->json($student);
    }


    //PUT /api/students/(id) - full replace (all fields required)
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()
                ->json(['message' => 'Student not found'], 404);
        }
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email,' . $id,
            'course' => 'required|string',
        ]);

        $student->update($validated);

        return response()
            ->json($student);
    }

    //Patch /api/student/(id) - partial update
    public function patch(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()
                ->json(['message' => 'Student not found'], 404);
        }
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:students,email,' . $id,
            'course' => 'sometimes|string',
        ]);

        $student->update($validated);

        return response()
            ->json($student);
    }
    //DELETE /api/students/(id)
    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()
                ->json(['message' => 'Student not found'], 404);
        }
        $student->delete();

        return response()
            ->json($student);
    }
    //DELETE /api/students
    public function destroyAll()
    {
        Student::truncate();

        return response()->json([
            'message' => 'all students deleted successfully!'
        ]);

    }
}