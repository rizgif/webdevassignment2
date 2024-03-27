<?php

namespace App\Http\Controllers;

use App\Models\Bucket;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    // Display a listing of the buckets.
    public function index()
    {
        $buckets = Bucket::all();
        return view('buckets.index', compact('buckets'));
    }

    // Show the form for creating a new bucket.
    public function create()
    {
        return view('buckets.create');
    }

    // Store a newly created bucket in the database.
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'description' => 'required',
        ]);
        
        Bucket::create($request->all());
        return redirect()->route('buckets.index')->with('success', 'Bucket created successfully.');
    }

    // Display the specified bucket.
    public function show(Bucket $bucket)
    {
        return view('buckets.show', compact('bucket'));
    }

    // Show the form for editing the specified bucket.
    public function edit(Bucket $bucket)
    {
        return view('buckets.edit', compact('bucket'));
    }

    // Update the specified bucket in the database.
    public function update(Request $request, Bucket $bucket)
    {
        $request->validate([
            'category' => 'required',
            'description' => 'required',
        ]);
        
        $bucket->update($request->all());
        return redirect()->route('buckets.index')->with('success', 'Bucket updated successfully.');
    }

    // Remove the specified bucket from the database.
    public function destroy(Bucket $bucket)
    {
        $bucket->delete();
        return redirect()->route('buckets.index')->with('success', 'Bucket deleted successfully.');
    }
}
