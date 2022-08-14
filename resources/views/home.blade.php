@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Send New Message</h2>
            <form method="POST"  action="{{ route('message.store') }}">
                @csrf
             
                <div class="row mb-3">
                    
                    <div class="col-md-12">
                        <label for="email" class="col-md-4 col-form-label">{{ __('Message') }}</label>
                        <textarea name="message" cols="100" rows="5" class="form-control" value="{{ old('message') }}"></textarea>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-12 text-md-end">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Message</th>
                    <th scope="col">Date & Time</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
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
@endsection
