<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectController extends Controller
{
    public function index(Request $request): JsonResource
    {
        $projects = Project::withCount('tasks')->when($request->due_date, function ($query, $date) {
            return $query->whereDate('due_date', $date);
        })->paginate(10);

        return ProjectResource::collection($projects);
    }

    public function store(ProjectRequest $request): JsonResponse
    {
        try {
            $project = Project::create($request->validated());
            
            return response()->json(new ProjectResource($project), 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create project'], 500);
        }
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
