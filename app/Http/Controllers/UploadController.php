<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt', // Make sure it's a CSV file
        ]);

        $uploadedFile = $request->file('file');
        $filename = time() . '_' . $uploadedFile->getClientOriginalName() . '.imported';

        Storage::disk('local')->putFileAs(
            'uploads', // This is a directory in the `storage/app` folder
            $uploadedFile,
            $filename
        );

        // Handle the rest of the upload process like moving the file to a final destination if needed, importing to DB, etc.

        return redirect()->back()->with('success', 'File has been uploaded.');
    }
}
