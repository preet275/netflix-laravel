@extends('admin.layouts.admin')

@section('title', 'Movies')

@section('content')

    {{-- Movies table --}}
    <div class="dashboard-section">

        <div class="section-header">

            <h4>All Movies</h4>

            <a href="{{ route('admin.movies.create') }}" class="btn btn-danger">
                Add Movie
            </a>

        </div>

        <div class="table-responsive">

            {{-- Success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table dashboard-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Poster</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Release Year</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($movies as $movie)
                        <tr>

                            <td>{{ $movie->id }}</td>
                            <td>
                                @if ($movie->poster)
                                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}"
                                        width="60" height="80" style="object-fit: cover;">
                                @else
                                    <span class="text-muted">
                                        No Poster
                                    </span>
                                @endif
                            </td>

                            <td>{{ $movie->title }}</td>

                            <td>{{ $movie->category->name }}</td>

                            <td>{{ $movie->release_year }}</td>

                            <td>{{ $movie->duration }} min</td>

                            <td>
                                @if ($movie->status)
                                    <span class="status-badge active">
                                        Active
                                    </span>
                                @else
                                    <span class="status-badge inactive">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <td>

                                <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST"
                                    class="delete-form" style="display:inline;">

                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            {{-- Custom pagination --}}
            @if ($movies->hasPages())

                <div class="category-pagination">

                    @if (!$movies->onFirstPage())
                        <a href="{{ $movies->previousPageUrl() }}" class="pagination-btn">
                            Previous
                        </a>
                    @endif

                    @foreach ($movies->getUrlRange(1, $movies->lastPage()) as $page => $url)
                        @if ($page == $movies->currentPage())
                            <span class="pagination-number active">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="pagination-number">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    @if ($movies->hasMorePages())
                        <a href="{{ $movies->nextPageUrl() }}" class="pagination-btn">
                            Next
                        </a>
                    @endif

                </div>

            @endif

        </div>

    </div>

@endsection
