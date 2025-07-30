<x-layout>
    <div class="row mt-4">
        <div class="col-sm-12 col-lg-4">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           id="description"
                           name="description"
                           placeholder="Insert task name"
                           title="task name"
                           value="{{ old('description') }}"
                           required>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary text-white fw-light w-100">Add</button>
            </form>
        </div>
        <div class="col-sm-12 col-lg-8">
            <table class="table fw-light border p-5">
                <thead>
                <tr>
                    <th scope="col" class="fw-light">#</th>
                    <th scope="col" class="fw-light">Task</th>
                    <td aria-hidden="true"></td>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="@if($task->completed) text-decoration-line-through @endif">
                            {{ $task->description }}
                        </td>
                        @if(!$task->completed)
                        <td class="text-end">
                            <div class="btn-group" role="group">
                                <form action="{{ route("tasks.update", ['task' => $task->id ]) }}" method="POST" class="d-inline ms-1">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-success" aria-label="Complete">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>
                                <form action="{{ route("tasks.destroy", ['task' => $task->id ]) }}" method="POST" class="d-inline ms-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" aria-label="Delete">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
