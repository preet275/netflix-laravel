@extends('admin.layouts.admin')

@section('title', 'Categories')

@section('content')

    {{-- Categories table --}}
    <div class="dashboard-section">

        <div class="section-header">

            <h4>All Categories</h4>

            <a href="{{ route('admin.categories.create') }}" class="btn btn-danger">
                Add Category
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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>

                            <td>{{ $category->name }}</td>

                            <td>
                                @if ($category->status)
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
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}"
                                    style="display: inline;">

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
            {{-- Custom Pagination --}}
            @if ($categories->hasPages())
                <div class="category-pagination">

                    {{-- Previous (hide if first page) --}}
                    @if (!$categories->onFirstPage())
                        <a href="{{ $categories->previousPageUrl() }}" class="pagination-btn">
                            Previous
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                        @if ($page == $categories->currentPage())
                            <span class="pagination-number active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="pagination-number">{{ $page }}</a>
                        @endif
                    @endforeach

                    {{-- Next (hide if last page) --}}
                    @if ($categories->hasMorePages())
                        <a href="{{ $categories->nextPageUrl() }}" class="pagination-btn">
                            Next
                        </a>
                    @endif

                </div>
            @endif

        </div>

    </div>

@endsection
