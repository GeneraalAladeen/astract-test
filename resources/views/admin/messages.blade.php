@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date & Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td> {{ $message->user->name }}</td>
                                <td> {{ $message->message }}</td>
                                <td> {{ $message->created_at }}</td>
                            </tr>
                        @endforeach                      
                    </tbody>
                </table>
                {{ $messages->links() }}
            </div>
        </div>
    </div>
</div>
@endsection