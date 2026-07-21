<?php

namespace App\Http\Controllers\Admin\Hardware;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hardware\StoreCpuRequest;
use App\Http\Requests\Hardware\UpdateCpuRequest;
use Illuminate\Http\Request;
use App\Models\Cpu; 

class CpuController extends Controller
{
    public function index(Request $request)
    {
        $query = Cpu::query();
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
        $cpus = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();
        $stats = [
            'total' => Cpu::count(),
            'intel' => Cpu::where('manufacturer', 'Intel')->count(),

            'amd' => Cpu::where('manufacturer', 'AMD')->count(),

            'active' => Cpu::where('is_active', true)->count(),
        ];

        return view('admin.hardware.cpu.index', compact('cpus', 'stats'));
    }

    public function create(){ 
        return view('admin.hardware.cpu.create'); 
    }

    public function show(Cpu $cpu){ 
        return view('admin.hardware.cpu.view', compact('cpu')); 
    }

    public function edit(Cpu $cpu){ 
        return view('admin.hardware.cpu.edit', compact('cpu')); 
    }

    public function update(UpdateCpuRequest $request, Cpu $cpu)
    { 
        $cpu->update($request->validated());

        return redirect()->route('admin.hardware.cpu.index')
            ->with('success', 'CPU updated successfully.');
    }

    public function destroy(Cpu $cpu){ 
        $cpu->delete();
        return redirect()->route('admin.hardware.cpu.index')
            ->with('success', 'CPU deleted successfully.');
    }

    public function store(StoreCpuRequest $request){ 
        Cpu::create($request->validated());

        return redirect()
            ->route('admin.hardware.cpu.index')
            ->with('success', 'CPU created successfully.');
    }
}
