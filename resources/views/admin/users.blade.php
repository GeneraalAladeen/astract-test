@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" method="GET" action={{ route('admin.dashboard.users')}}>
                        <label><strong>Status :</strong></label>
                        <select id='status' name="status" class="form-control" >
                            <option value="">All</option>
                            <option value="1" @if( request()->query('status') == 1) selected @endif>Active</option>
                            <option value="0" @if( request()->query('status') === 0) selected @endif>Pending</option>
                        </select>

                        <div class="row mt-2">
                            <div class="col-md-12 text-md-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td> {{ $user->status ? 'Active' : 'Pending'}}</td>
                                    <td> {{ $user->created_at }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.users.update',['user' => $user->id ]) }}">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit">Approve</button>
                                        </form>
                                    <td>
                                </tr>
                            @endforeach                      
                        </tbody>
                    </table>
                    {{ $users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection