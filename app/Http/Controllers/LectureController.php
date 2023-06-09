<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureRequest\CreateLectureRequest;
use App\Http\Requests\LectureRequest\UpdateLectureRequest;
use App\Lecture;
use Illuminate\Http\JsonResponse;

class LectureController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $students = Lecture::all();
        return response()->json($students);
    }

    /**
     * Summary of show
     * @param \App\Lecture $lecture
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Lecture $lecture): JsonResponse
    {
        $lecture->load('curriculums.school_class', 'curriculums.school_class.students');
        return response()->json($lecture);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\LectureRequest\CreateLectureRequest $request
     * @return JsonResponse
     */
    public function store(CreateLectureRequest $request): JsonResponse
    {
        $lecture = Lecture::create($request->all());

        return response()->json([
            'data' => $lecture
        ], 201);
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\LectureRequest\UpdateLectureRequest $request
     * @param \App\Lecture $lecture
     * @return JsonResponse
     */
    public function update(UpdateLectureRequest $request, Lecture $lecture): JsonResponse
    {
        $lecture->update($request->validated());

        return response()->json([
            'data' => $lecture
        ], 200);
    }

    /**
     * Summary of destroy
     * @param \App\Lecture $lecture
     * @return JsonResponse
     */
    public function destroy(Lecture $lecture): JsonResponse
    {
        $lecture->curriculums()->update(['lecture_id' => null]);
        $lecture->delete();
        return response()->json(null, 204);
    }
}
