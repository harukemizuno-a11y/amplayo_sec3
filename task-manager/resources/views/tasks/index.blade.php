@extends('layouts.app')

@section('content')

    <a href="{{ route('tasks.create') }}" class="btn btn-add">+ Add New Task</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <span class="{{ $task->status == 'Completed' ? 'status-completed' : 'status-pending' }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center;">No tasks yet. Add one!</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection