<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest\CreateStudentRequest;
use App\Http\Requests\StudentRequest\UpdateStudentRequest;
use App\Student;
use Illuminate\Http\JsonResponse;

class StudentController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $students = Student::all();
        return response()->json($students);
    }

    /**
     * Summary of show
     * @param \App\Student $student
     * @return JsonResponse
     */
    public function show(Student $student): JsonResponse
    {
        $student->load('class', 'class.curriculum.lecture');
        return response()->json($student);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\StudentRequest\CreateStudentRequest $request
     * @return JsonResponse
     */
    public function store(CreateStudentRequest $request): JsonResponse
    {
        $student = Student::create($request->all());

        return response()->json([
            'data' => $student
        ], 201);
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\StudentRequest\UpdateStudentRequest $request
     * @param \App\Student $student
     * @return JsonResponse
     */
    public function update(UpdateStudentRequest $request, Student $student): JsonResponse
    {
        $student->update($request->validated());

        return response()->json([
            'data' => $student
        ], 200);
    }

    /**
     * Summary of destroy
     * @param \App\Student $student
     * @return JsonResponse
     */
    public function destroy(Student $student): JsonResponse
    {
        $student->delete();
        return response()->json(null, 204);
    }
}
