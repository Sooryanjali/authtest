<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Machine;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class InputController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'institution_id' => 'required',
            'machine_name' => 'required',
            'category' => 'required',
            'model' => 'required',
            'location' => 'required',
            'date_of_manufacture' => 'required|date',
            'rate' => 'required|numeric',
            'count' => 'required|integer',
            'available' => 'boolean',
            'description' => 'required|string',
            'specification' => 'required|array',
            'specification.*' => 'required|string',
            'image' => 'required|array',
            'image.*' => 'required|file|mimes:jpg,png,jpeg|max:2048'
        ]);

        $imagePaths = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('uploads', 'public');
                $imagePaths[] = $path;
            }
        }

        // Create a new machine record
        Machine::create([
            'Machine_ID' => (string) Str::uuid(),
            'Institution_id' => $validated['institution_id'],
            'Machine_name' => $validated['machine_name'],
            'Category' => $validated['category'],
            'Model' => $validated['model'],
            'Location' => $validated['location'],
            'Date_of_manufacture' => $validated['date_of_manufacture'],
            'rate' => $validated['rate'],
            'count' => $validated['count'],
            'Available' => $validated['available'] ?? false,
            'image' => json_encode($imagePaths),
            'description' => $validated['description'],
            'specification' => json_encode($validated['specification']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return view('success');
    }
}
