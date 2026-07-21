<?php

namespace App\Http\Controllers\Admin\Hardware;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hardware\StoreGpuRequest;
use App\Http\Requests\Hardware\UpdateGpuRequest;
use App\Models\Gpu;
use Illuminate\Http\Request;

class GpuController extends Controller
{
    public function index(Request $request)
    {
        $query = Gpu::query();

        // Search
        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('model', 'like', '%' . $request->search . '%')
                ->orWhere('manufacturer', 'like', '%' . $request->search . '%');

            });

        }

        // Manufacturer Filter
        if ($request->filled('manufacturer')) {

            $query->where('manufacturer', $request->manufacturer);

        }

        // Status Filter
        if ($request->filled('status')) {

            $query->where('is_active', $request->status);

        }

        $gpus = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $stats = [

            'total' => Gpu::count(),

            'nvidia' => Gpu::where('manufacturer', 'NVIDIA')->count(),

            'amd' => Gpu::where('manufacturer', 'AMD')->count(),

            'intel' => Gpu::where('manufacturer', 'Intel')->count(),

            'active' => Gpu::where('is_active', true)->count(),

        ];

        return view('admin.hardware.gpu.index', compact('gpus', 'stats'));
    }

    public function create(){ 
        return view('admin.hardware.gpu.create'); 
    }

    public function show(Gpu $gpu){ 
        return view('admin.hardware.gpu.view', compact('gpu')); 
    }

    public function edit(Gpu $gpu){ 
        return view('admin.hardware.gpu.edit', compact('gpu'));
    }

    public function store(StoreGpuRequest $request){ 
        
        Gpu::create($request->validated());

        return redirect()->route('admin.hardware.gpu.index')
        ->with('success', 'Gpu Created Successfully'); 
    }

    public function destroy(Gpu $gpu){ 
        $gpu->delete(); 
       return redirect()->route('admin.hardware.gpu.index')
        ->with('success', 'Gpu Created Successfully'); 
    }

    public function update(UpdateGpuRequest $request, Gpu $gpu){
        $gpu->update($request->validated());

        return redirect()
            ->route('admin.hardware.gpu.index')
            ->with('success', 'GPU updated successfully.');
    }
}
