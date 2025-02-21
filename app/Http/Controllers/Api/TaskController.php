<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskController extends Controller
{
    public function index(Request $request): JsonResource
    {
        $tasks = Task::when($request->category_id, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->when($request->status, function ($query, $status) {
            return $query->where('status', $status);
        })->paginate(10);

        return TaskResource::collection($tasks);
    }

    public function store(TaskRequest $request): JsonResponse
    {
        try {
            $task = Task::create($request->validated());
            return response()->json(new TaskResource($task), 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create task'], 500);
        }
    }

    public function complete(Task $task): JsonResponse
    {
        $task->update(['status' => 'completed']);
        return response()->json(new TaskResource($task));
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
