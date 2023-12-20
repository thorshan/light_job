<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-dark vh-100">
                <ul class="navbar-nav">
                    <li class="nav-item mt-2">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link btn btn-secondary outline-none border-0 my-2"><i class="fa-solid fa-home"
                                style="margin-right: 20px"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('listing.create') }}"
                            class="nav-link btn btn-secondary outline-none border-0 my-2"><i class="fa-solid fa-plus"
                                style="margin-right: 20px"></i>Add new job</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="container vh-100">
                    <div class="row my-3">
                        <div class="col-md-4">
                            <div class="card bg-light w-30 shadow-sm">
                                <h2 class="card-title"></h2>
                                <div class="card-body">
                                    <p class="card-title">All Jobs
                                    <h2>{{$all}}</h2>
                                    </p>
                                    <small class="card-text text-muted">Last posted : 2023-12-21</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light w-30 shadow-sm">
                                <h2 class="card-title"></h2>
                                <div class="card-body">
                                    <p class="card-title">Active Jobs
                                    <h2>{{$active}}</h2>
                                    </p>
                                    <small class="card-text text-muted">Last updated : 2023-12-21</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light w-30 shadow-sm">
                                <h2 class="card-title"></h2>
                                <div class="card-body">
                                    <p class="card-title">Expired Jobs
                                    <h2>{{$expire}}</h2>
                                    </p>
                                    <small class="card-text text-muted">Last updated : 2023-12-21</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <th>No.</th>
                                <th>Logo</th>
                                <th>Title</th>
                                <th>Tags</th>
                                <th>Salary</th>
                                <th>Created by</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($listings as $listing)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $listing->img) }}" width="30px">
                                        </td>
                                        <td>{{ $listing->title }}</td>
                                        <td>{{ $listing->tags }}</td>
                                        <td>{{ $listing->salary }}</td>
                                        <td>{{ $listing->user->name }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('listing.show', $listing->id) }}"
                                                    class="btn btn-success">View</a>
                                                <a href="{{ route('listing.edit', $listing->id) }}"
                                                    class="btn btn-primary mx-2">Edit</a>
                                                <form action="{{ route('listing.delete', $listing->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
