@extends('admin.layouts.admin')

@section('title', 'Add Category')

@section('content')

    <div class="dashboard-section">

        <div class="section-header">
            <h4>Add Category</h4>
        </div>

        <form method="POST" action="{{ route('admin.categories.store') }}">

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
                       placeholder="Enter category name">

            </div>

            {{-- Category status --}}
            <div class="mb-3">

                <label for="status" class="form-label">
                    Status
                </label>

                <select name="status" id="status" class="form-select">

                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                </select>

            </div>

            <button type="submit" class="btn btn-danger">
                Save Category
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

@endsection