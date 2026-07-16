@extends('layouts.admin')

@section('content')
<div class="row g-3">

    <div class="col-md-6">
        <label class="form-label">CPU</label>
        <select name="minimum_cpu_id" class="form-select">
            <option value="">Select CPU</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">GPU</label>
        <select name="minimum_gpu_id" class="form-select">
            <option value="">Select GPU</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">RAM (GB)</label>
        <input type="number"
               name="minimum_ram"
               class="form-control"
               min="1"
               placeholder="8">
    </div>

    <div class="col-md-6">
        <label class="form-label">Storage (GB)</label>
        <input type="number"
               name="minimum_storage"
               class="form-control"
               min="1"
               placeholder="100">
    </div>

    <div class="col-md-6">
        <label class="form-label">Operating System</label>
        <select name="minimum_os" class="form-select">
            <option value="">Select OS</option>
            <option>Windows 10 64-bit</option>
            <option>Windows 11 64-bit</option>
            <option>Ubuntu 22.04</option>
            <option>SteamOS</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">DirectX Version</label>
        <select name="minimum_directx" class="form-select">
            <option value="">Select Version</option>
            <option>DirectX 11</option>
            <option>DirectX 12</option>
            <option>Vulkan</option>
        </select>
    </div>

</div>


<div class="row g-3">

    <div class="col-md-6">
        <label class="form-label">CPU</label>
        <select name="recommended_cpu_id" class="form-select">
            <option value="">Select CPU</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">GPU</label>
        <select name="recommended_gpu_id" class="form-select">
            <option value="">Select GPU</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">RAM (GB)</label>
        <input type="number"
               name="recommended_ram"
               class="form-control"
               min="1"
               placeholder="16">
    </div>

    <div class="col-md-6">
        <label class="form-label">Storage (GB)</label>
        <input type="number"
               name="recommended_storage"
               class="form-control"
               min="1"
               placeholder="150">
    </div>

    <div class="col-md-6">
        <label class="form-label">Operating System</label>
        <select name="recommended_os" class="form-select">
            <option value="">Select OS</option>
            <option>Windows 10 64-bit</option>
            <option>Windows 11 64-bit</option>
            <option>Ubuntu 22.04</option>
            <option>SteamOS</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">DirectX Version</label>
        <select name="recommended_directx" class="form-select">
            <option value="">Select Version</option>
            <option>DirectX 11</option>
            <option>DirectX 12</option>
            <option>Vulkan</option>
        </select>
    </div>

</div>

@endsection 