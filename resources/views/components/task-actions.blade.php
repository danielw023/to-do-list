<div class="btn-group" role="group">
    <form action="{{ route("tasks.update", ['task' => $task->id ]) }}"
          method="POST"
          class="d-inline ms-1"
    >
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-sm btn-success" aria-label="Complete">
            <i class="bi bi-check-lg"></i>
        </button>
    </form>
    <form action="{{ route("tasks.destroy", ['task' => $task->id ]) }}"
          method="POST"
          class="d-inline ms-1"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" aria-label="Delete">
            <i class="bi bi-x-lg"></i>
        </button>
    </form>
</div>
