@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')

    {{-- Dashboard heading --}}
    <div class="dashboard-header">

        <h1>Dashboard</h1>

        <p>Welcome to the Netflix Admin Panel.</p>

    </div>

    {{-- Dashboard cards --}}
    <div class="row g-4">

        {{-- Total Movies --}}
        <div class="col-xl-3 col-md-6">

            <div class="dashboard-card">

                <div>
                    <p>Total Movies</p>
                    <h3>120</h3>
                </div>

                <div class="card-icon">
                    <i class="bi bi-film"></i>
                </div>

            </div>

        </div>

        {{-- Categories --}}
        <div class="col-xl-3 col-md-6">

            <div class="dashboard-card">

                <div>
                    <p>Categories</p>
                    <h3>12</h3>
                </div>

                <div class="card-icon">
                    <i class="bi bi-collection-play"></i>
                </div>

            </div>

        </div>

        {{-- Total Users --}}
        <div class="col-xl-3 col-md-6">

            <div class="dashboard-card">

                <div>
                    <p>Total Users</p>
                    <h3>850</h3>
                </div>

                <div class="card-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

            </div>

        </div>

        {{-- Active Users --}}
        <div class="col-xl-3 col-md-6">

            <div class="dashboard-card">

                <div>
                    <p>Active Users</p>
                    <h3>620</h3>
                </div>

                <div class="card-icon">
                    <i class="bi bi-person-check-fill"></i>
                </div>

            </div>

        </div>

    </div>
    {{-- Recent movies --}}
<div class="dashboard-section">

    <div class="section-header">

        <h4>Recent Movies</h4>

        <a href="#" class="view-all">
            View All
        </a>

    </div>

    <div class="table-responsive">

        <table class="table dashboard-table">

            <thead>
                <tr>
                    <th>Movie</th>
                    <th>Category</th>
                    <th>Release Year</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Stranger Things</td>
                    <td>Drama</td>
                    <td>2025</td>
                    <td>
                        <span class="status-badge active">
                            Active
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>Wednesday</td>
                    <td>Comedy</td>
                    <td>2025</td>
                    <td>
                        <span class="status-badge active">
                            Active
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>Dark</td>
                    <td>Thriller</td>
                    <td>2024</td>
                    <td>
                        <span class="status-badge inactive">
                            Inactive
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection