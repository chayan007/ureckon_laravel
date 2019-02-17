@extends('admin.layouts.admin')
@section('page', 'Dashboard')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Users</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>College</th>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>DP</th>
                        <th>Course</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->college }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->phone }}</td>
                            <td><img src="{{ Storage::url($user->img_url) }}" alt="user"></td>
                            <td>{{ $user->course }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $users->links() }}
    </div>
@endsection