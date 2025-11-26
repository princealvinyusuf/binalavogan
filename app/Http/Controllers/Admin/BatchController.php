<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::latest()->paginate(10);

        return view('admin.batches.index', compact('batches'));
    }

    public function create()
    {
        return view('admin.batches.create', ['batch' => new Batch()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'period' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'registration_url' => 'nullable|url',
            'is_featured' => 'sometimes|boolean',
        ]);

        if (($data['is_featured'] ?? false) === true) {
            Batch::where('is_featured', true)->update(['is_featured' => false]);
        }

        Batch::create($data);

        return redirect()->route('admin.batches.index')->with('status', 'Batch berhasil ditambahkan.');
    }

    public function edit(Batch $batch)
    {
        return view('admin.batches.edit', compact('batch'));
    }

    public function update(Request $request, Batch $batch)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'period' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'registration_url' => 'nullable|url',
            'is_featured' => 'sometimes|boolean',
        ]);

        if (($data['is_featured'] ?? false) === true) {
            Batch::where('is_featured', true)->where('id', '!=', $batch->id)->update(['is_featured' => false]);
        }

        $batch->update($data);

        return redirect()->route('admin.batches.index')->with('status', 'Batch berhasil diperbarui.');
    }

    public function destroy(Batch $batch)
    {
        $batch->delete();

        return redirect()->route('admin.batches.index')->with('status', 'Batch berhasil dihapus.');
    }
}


