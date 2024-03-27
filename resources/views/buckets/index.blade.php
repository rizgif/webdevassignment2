{{-- resources/views/buckets/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Buckets List</h1>
    <a href="{{ route('buckets.create') }}">Create New Bucket</a>
    <ul>
        @foreach ($buckets as $bucket)
            <li>
                {{ $bucket->name }} - {{ $bucket->description }}
                <a href="{{ route('buckets.show', $bucket) }}">View</a>
                <a href="{{ route('buckets.edit', $bucket) }}">Edit</a>
                <form action="{{ route('buckets.destroy', $bucket) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
