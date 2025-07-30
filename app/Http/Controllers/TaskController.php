<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::all(['id', 'description', 'completed']);

        return view('tasks', compact('tasks'));
    }

    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Task::create($validated);

        return to_route('tasks.index')->with('alert',
            [
                'type' => 'success',
                'message' => 'Task created successfully!',
            ]
        );
    }

    public function update(Task $task): RedirectResponse
    {
        $task->update([
            'completed' => true,
        ]);

        return to_route('tasks.index')->with('alert',
            [
                'type' => 'success',
                'message' => 'Task updated successfully!',
            ]
        );
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return to_route('tasks.index')->with('alert', [
            'type' => 'success',
            'message' => 'Task deleted successfully!',
        ]
        );
    }
}
