<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolClassRequest\CreateSchoolClassRequest;
use App\Http\Requests\SchoolClassRequest\UpdateSchoolClassRequest;
use App\SchoolClass;
use Illuminate\Http\JsonResponse;

class SchoolClassController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $students = SchoolClass::all();
        return response()->json($students);
    }

    /**
     * Summary of show
     * @param \App\SchoolClass $schoolclass
     * @return JsonResponse
     */
    public function show(SchoolClass $schoolclass): JsonResponse
    {
        $schoolclass->load('students');
        return response()->json($schoolclass);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\SchoolClassRequest\CreateSchoolClassRequest $request
     * @return JsonResponse
     */
    public function store(CreateSchoolClassRequest $request): JsonResponse
    {
        $schoolClass = SchoolClass::create($request->all());

        return response()->json([
            'data' => $schoolClass
        ], 201);
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\SchoolClassRequest\UpdateSchoolClassRequest $request
     * @param \App\SchoolClass $schoolclass
     * @return JsonResponse
     */
    public function update(UpdateSchoolClassRequest $request, SchoolClass $schoolclass): JsonResponse
    {
        $schoolclass->update($request->validated());

        return response()->json([
            'data' => $schoolclass
        ], 200);
    }

    /**
     * Summary of destroy
     * @param \App\SchoolClass $schoolclass
     * @return JsonResponse
     */
    public function destroy(SchoolClass $schoolclass): JsonResponse
    {
        $schoolclass->students()->update(['school_class_id' => null]);
        $schoolclass->delete();
        return response()->json(null, 204);
    }
}
