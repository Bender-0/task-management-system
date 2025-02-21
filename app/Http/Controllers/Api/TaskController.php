<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::when($request->category_id, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->when($request->status, function ($query, $status) {
            return $query->where('status', $status);
        })->get();

        return response()->json($tasks);
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());
        return response()->json($task, 201);
    }

    // Mark a task as completed
    public function complete(Task $task)
    {
        $task->update(['status' => 'completed']);
        return response()->json($task);
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
