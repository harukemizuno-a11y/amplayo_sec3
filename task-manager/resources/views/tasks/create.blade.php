@extends('layouts.app')

@section('content')

    <h2>Add New Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Task Name</label>
            <input type="text" name="task_name" value="{{ old('task_name') }}" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status">
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
        </div>

        <div class="form-group">
            <label>Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date') }}">
        </div>

        <button type="submit" class="btn btn-add">Save Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>

    @if ($errors->any())
        <div style="color:red; margin-top:15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection