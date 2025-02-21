<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $projects = Project::when($request->due_date, function ($query, $date) {
            return $query->whereDate('due_date', $date);
        })->get();

        return response()->json($projects);
    }

    // Create a new project
    public function store(ProjectRequest $request): JsonResponse
    {
        Project::create($request->validated());

        return response()->json('project created', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
