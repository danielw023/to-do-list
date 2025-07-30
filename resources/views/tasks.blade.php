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
                           autocomplete="off"
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
        <div class="col-sm-12 col-lg-8 border bg-white px-2 mt-sm-2 mt-lg-0">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" class="fw-normal w-5">#</th>
                    <th scope="col" class="fw-normal">Task</th>
                    <td aria-hidden="true"></td>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($tasks as $task)
                    <tr>
                        <td class="fw-light">{{ $loop->iteration }}</td>
                        <td class="@if($task->completed) text-decoration-line-through @endif fw-light">
                            {{ $task->description }}
                        </td>
                        @if(!$task->completed)
                        <td class="text-end">
                            <x-task-actions :task="$task"/>
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
