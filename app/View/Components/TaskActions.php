<?php


namespace App\View\Components;

use App\Models\Task;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskActions extends Component
{
    public function __construct(public Task $task) {}

    public function render(): View|Closure|string
    {
        return view('components.task-actions');
    }
}
