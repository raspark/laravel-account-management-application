@extends('frontend.layouts.master')

{{-- title --}}
@section('title')
    {{ config('app.name') }} | Home
@endsection
{{-- title --}}

{{-- main content --}}
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissible text-center mt-2 m-0">
                    <button class="close" type="button" data-dismiss="alert">&times;</button>
                    <strong>Welcome, {{ Auth::user()->name }}!</strong>
                </div>
                <h4 class="text-center text-primary mt-2">Please visit profile tab to edit</h4>
            </div>
        </div>
    </div>
@endsection
{{-- main content --}}

{{-- custom-scripts --}}
@section('custom-scripts')
    <script>
        
    </script>
@endsection
{{-- custom-scripts --}}
