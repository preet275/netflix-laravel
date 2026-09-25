@extends('admin.layouts.admin')

@section('title', 'Edit Category')

@section('content')

    {{-- Edit Category --}}
    <div class="dashboard-section">

        <div class="section-header">
            <h4>Edit Category</h4>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                Back
            </a>
        </div>

        {{-- Validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Edit form --}}
        <form method="POST"
            action="{{ route('admin.categories.update', $category->id) }}">

            @csrf

            {{-- Category name --}}
            <div class="mb-3">

                <label for="name" class="form-label">
                    Category Name
                </label>

                <input type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ old('name', $category->name) }}"
                    placeholder="Enter category name">

            </div>

            {{-- Category status --}}
            <div class="mb-3">

                <label for="status" class="form-label">
                    Status
                </label>

                <select name="status" id="status" class="form-select">

                    <option value="1"
                        {{ old('status', $category->status) == 1 ? 'selected' : '' }}>
                        Active
                    </option>

                    <option value="0"
                        {{ old('status', $category->status) == 0 ? 'selected' : '' }}>
                        Inactive
                    </option>

                </select>

            </div>

            {{-- Submit button --}}
            <button type="submit" class="btn btn-danger">
                Update Category
            </button>

        </form>

    </div>

@endsection