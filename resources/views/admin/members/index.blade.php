@extends('admin.layouts.admin')

@section('title', 'Members')

@section('content')

    {{-- Members table --}}
    <div class="dashboard-section">

        <div class="section-header">

            <h4>All Members</h4>

        </div>

        <div class="table-responsive">

            <table class="table dashboard-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($members as $member)
                        <tr>

                            <td>{{ $member->id }}</td>

                            <td>{{ $member->name }}</td>

                            <td>{{ $member->email }}</td>

                            <td>

                                @if ($member->status === 'approved')
                                    <span class="status-badge active">
                                        Approved
                                    </span>
                                @elseif ($member->status === 'rejected')
                                    <span class="status-badge inactive">
                                        Rejected
                                    </span>
                                @else
                                    <span class="status-badge inactive">
                                        Pending
                                    </span>
                                @endif

                            </td>

                            <td>

                                @if ($member->status === 'pending')
                                    {{-- Approve button --}}
                                    <form action="{{ route('members.approve', $member) }}" method="POST" class="d-inline">

                                        @csrf

                                        <button type="submit" class="btn btn-success btn-sm">
                                            Approve
                                        </button>

                                    </form>

                                    {{-- Reject button --}}
                                    <form action="{{ route('members.reject', $member) }}" method="POST" class="d-inline">

                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Reject
                                        </button>

                                    </form>
                                @else
                                    {{-- Set member back to pending --}}
                                    <form action="{{ route('members.pending', $member) }}" method="POST" class="d-inline">

                                        @csrf

                                        <button type="submit" class="btn btn-secondary btn-sm">
                                            Set Pending
                                        </button>

                                    </form>
                                @endif
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            {{-- Custom pagination --}}
            @if ($members->hasPages())

                <div class="category-pagination">

                    @if (!$members->onFirstPage())
                        <a href="{{ $members->previousPageUrl() }}" class="pagination-btn">
                            Previous
                        </a>
                    @endif

                    @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                        @if ($page == $members->currentPage())
                            <span class="pagination-number active">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="pagination-number">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    @if ($members->hasMorePages())
                        <a href="{{ $members->nextPageUrl() }}" class="pagination-btn">
                            Next
                        </a>
                    @endif

                </div>

            @endif

        </div>

    </div>

@endsection
