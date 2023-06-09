<?php

namespace App\Http\Controllers;

use App\Curriculum;
use App\Http\Requests\CurriculumRequest\CreateCurriculumRequest;
use App\SchoolClass;
use Symfony\Component\HttpFoundation\JsonResponse;

class CurriculumController extends Controller
{
    /**
     * Summary of show
     * @param \App\SchoolClass $schoolclass
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(SchoolClass $schoolclass): JsonResponse
    {
        $schoolclass->load('curriculum');
        return response()->json($schoolclass);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\CurriculumRequest\CreateCurriculumRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateCurriculumRequest $request): JsonResponse
    {
        $curriculum = Curriculum::create($request->all());

        return response()->json([
            'data' => $curriculum
        ], 201);
    }

    /**
     * Summary of destroy
     * @param \App\SchoolClass $schoolclass
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(SchoolClass $schoolclass): JsonResponse
    {
        $schoolclass->curriculum()->delete();
        return response()->json(null, 204);
    }
}
