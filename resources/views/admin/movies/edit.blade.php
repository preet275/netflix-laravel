@extends('admin.layouts.admin')

@section('title', 'Edit Movie')

@section('content')

    {{-- Edit movie form --}}
    <div class="dashboard-section">

        <div class="section-header">
            <h4>Edit Movie</h4>
        </div>

        <form action="{{ route('admin.movies.update', $movie->id) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            {{-- Movie title --}}
            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>

                <input type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    value="{{ $movie->title }}">
            </div>

            {{-- Movie description --}}
            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>

                <textarea name="description"
                    id="description"
                    class="form-control"
                    rows="4">{{ $movie->description }}</textarea>
            </div>

            {{-- Current poster --}}
            <div class="mb-3">

                <label class="form-label">
                    Current Poster
                </label>

                @if ($movie->poster)

                    <div>
                        <img src="{{ asset('storage/' . $movie->poster) }}"
                            alt="{{ $movie->title }}"
                            class="current-poster">
                    </div>

                @else

                    <span class="text-muted">
                        No Poster
                    </span>

                @endif

            </div>

            {{-- Change poster --}}
            <div class="mb-3">

                <label for="poster" class="form-label">
                    Change Poster
                </label>

                <input type="file"
                    name="poster"
                    id="poster"
                    class="form-control"
                    accept="image/*">

            </div>

            {{-- New poster preview --}}
            <div class="poster-preview-box">

                <img id="posterPreview"
                    src=""
                    alt="Poster Preview">

                <button type="button"
                    id="removePoster"
                    class="remove-poster">
                    ×
                </button>

            </div>

            {{-- Movie category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">
                    Category
                </label>

                <select name="category_id"
                    id="category_id"
                    class="form-select">

                    @foreach ($categories as $category)

                        <option value="{{ $category->id }}"
                            {{ $movie->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Release year --}}
            <div class="mb-3">
                <label for="release_year" class="form-label">
                    Release Year
                </label>

                <input type="number"
                    name="release_year"
                    id="release_year"
                    class="form-control"
                    value="{{ $movie->release_year }}">
            </div>

            {{-- Movie duration --}}
            <div class="mb-3">
                <label for="duration" class="form-label">
                    Duration (minutes)
                </label>

                <input type="number"
                    name="duration"
                    id="duration"
                    class="form-control"
                    value="{{ $movie->duration }}">
            </div>

            {{-- Movie trailer --}}
            <div class="mb-3">
                <label for="trailer" class="form-label">
                    Trailer URL
                </label>

                <input type="url"
                    name="trailer"
                    id="trailer"
                    class="form-control"
                    value="{{ $movie->trailer }}">
            </div>

            {{-- Movie status --}}
            <div class="mb-3">
                <label for="status" class="form-label">
                    Status
                </label>

                <select name="status"
                    id="status"
                    class="form-select">

                    <option value="1"
                        {{ $movie->status ? 'selected' : '' }}>
                        Active
                    </option>

                    <option value="0"
                        {{ !$movie->status ? 'selected' : '' }}>
                        Inactive
                    </option>

                </select>
            </div>

            {{-- Submit button --}}
            <button type="submit"
                class="btn btn-danger">
                Update Movie
            </button>

            <a href="{{ route('admin.movies.index') }}"
                class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

@endsection