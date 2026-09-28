@extends('admin.layouts.admin')

@section('title', 'Add Movie')

@section('content')

    {{-- Add movie form --}}
    <div class="dashboard-section">

        <div class="section-header">
            <h4>Add Movie</h4>
        </div>

        <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            {{-- Movie title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>

                <input type="text" name="title" id="title" class="form-control">

            </div>

            {{-- Movie description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>

                <textarea name="description" id="description" class="form-control" rows="4"></textarea>

            </div>

            {{-- Movie poster --}}
            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>

                <input type="file" name="poster" id="poster" class="form-control">
                {{-- Poster preview --}}
                <div class="poster-preview-box">

                    <img id="posterPreview" src="" alt="Poster Preview">

                    <button type="button" id="removePoster" class="remove-poster">
                        ×
                    </button>

                </div>
            </div>

            {{-- Movie category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>

                <select name="category_id" id="category_id" class="form-select">

                    <option value="">Select Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>

            </div>

            {{-- Release year --}}
            <div class="mb-3">
                <label for="release_year" class="form-label">Release Year</label>

                <input type="number" name="release_year" id="release_year" class="form-control">

            </div>

            {{-- Movie duration --}}
            <div class="mb-3">
                <label for="duration" class="form-label">Duration (minutes)</label>

                <input type="number" name="duration" id="duration" class="form-control">

            </div>

            {{-- Movie trailer --}}
            <div class="mb-3">
                <label for="trailer" class="form-label">Trailer URL</label>

                <input type="url" name="trailer" id="trailer" class="form-control">

            </div>

            {{-- Movie status --}}
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>

                <select name="status" id="status" class="form-select">

                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                </select>

            </div>

            {{-- Submit button --}}
            <button type="submit" class="btn btn-danger">
                Add Movie
            </button>

            <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

@endsection
