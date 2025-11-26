<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageMetric;
use Illuminate\Http\Request;

class HomepageMetricController extends Controller
{
    public function index()
    {
        $metrics = HomepageMetric::orderBy('order_column')->paginate(10);

        return view('admin.metrics.index', compact('metrics'));
    }

    public function create()
    {
        return view('admin.metrics.create', ['metric' => new HomepageMetric()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'order_column' => 'nullable|integer',
        ]);

        HomepageMetric::create($data);

        return redirect()->route('admin.metrics.index')->with('status', 'Metric berhasil ditambahkan.');
    }

    public function edit(HomepageMetric $metric)
    {
        return view('admin.metrics.edit', compact('metric'));
    }

    public function update(Request $request, HomepageMetric $metric)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'order_column' => 'nullable|integer',
        ]);

        $metric->update($data);

        return redirect()->route('admin.metrics.index')->with('status', 'Metric berhasil diperbarui.');
    }

    public function destroy(HomepageMetric $metric)
    {
        $metric->delete();

        return redirect()->route('admin.metrics.index')->with('status', 'Metric berhasil dihapus.');
    }
}


