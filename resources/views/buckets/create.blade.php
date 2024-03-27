{{-- resources/views/buckets/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Create Bucket</h1>
    <form method="POST" action="{{ route('buckets.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>

        <button type="submit">Create</button>
    </form>
@endsection
