@extends('layouts.master')

@section('content')
    <div class="alert alert-danger text-center">
        {{ @$errorMessage ?: session('error_message') }}
    </div>
@endsection