{{-- resources/views/buckets/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Edit Bucket</h1>
    <form method="POST" action="{{ route('buckets.update', $bucket) }}">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $bucket->name }}" required>

        <label for="description">Description:</label>
        <input type="text" name="description" id="description" value="{{ $bucket->description }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
