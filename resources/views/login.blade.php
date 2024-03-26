@extends('layouts.master') 

@section('content')
<div class="container text-center">
    @if (!session('email'))
        <button class="btn btn-primary">Login</button>
        <button class="btn btn-success">Register</button>
    @else
        <div class="text-center">
            <h4>Logged in as {{ session('email') }}</h4>
            {{-- Adapt the rest of your PHP logic here using Blade syntax --}}
        </div>
    @endif
</div>
@endsection
