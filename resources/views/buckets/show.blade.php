{{-- resources/views/buckets/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Bucket: {{ $bucket->name }}</h1>
    <p>Description: {{ $bucket->description }}</p>
    <a href="{{ route('buckets.index') }}">Back to List</a>
@endsection
