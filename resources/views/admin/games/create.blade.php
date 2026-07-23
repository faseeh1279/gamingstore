@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">
            <h4 class="mb-0">
                Add New Game
            </h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.games.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">
                    {{-- LEFT COLUMN --}}
                    <div class="col-lg-8">

                        <div class="row g-3">

                            {{-- Game Title --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Game Title
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    value="{{ old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Enter game title">

                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Category --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Category
                                </label>

                                <select
                                    name="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror"
                                    data-live-search="true"
                                    >

                                    <option value="">
                                        Select Category
                                    </option>

                                    @foreach($categories as $category)

                                        <option
                                            value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>

                                            {{ $category->name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Developer --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Developer
                                </label>

                                <select
                                    name="developer_id"
                                    class="form-select @error('developer_id') is-invalid @enderror">

                                    <option value="">
                                        Select Developer
                                    </option>

                                    @foreach($developers as $developer)

                                        <option
                                            value="{{ $developer->id }}"
                                            {{ old('developer_id') == $developer->id ? 'selected' : '' }}>

                                            {{ $developer->name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('developer_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Publisher --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Publisher
                                </label>

                                <select
                                    name="publisher_id"
                                    class="form-select @error('publisher_id') is-invalid @enderror">

                                    <option value="">
                                        Select Publisher
                                    </option>

                                    @foreach($publishers as $publisher)

                                        <option
                                            value="{{ $publisher->id }}"
                                            {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>

                                            {{ $publisher->name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('publisher_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Platform --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Platform
                                </label>

                                <select
                                    name="platform_id"
                                    class="form-select @error('platform_id') is-invalid @enderror">

                                    <option value="">
                                        Select Platform
                                    </option>

                                    @foreach($platforms as $platform)

                                        <option
                                            value="{{ $platform->id }}"
                                            {{ old('platform_id') == $platform->id ? 'selected' : '' }}>

                                            {{ $platform->name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('platform_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Release Date --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Release Date
                                </label>

                                <input
                                    type="date"
                                    name="release_date"
                                    value="{{ old('release_date') }}"
                                    class="form-control @error('release_date') is-invalid @enderror">

                                @error('release_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Official Website --}}
                            <div class="col-12">

                                <label class="form-label">
                                    Official Website
                                </label>

                                <input
                                    type="url"
                                    name="official_website"
                                    value="{{ old('official_website') }}"
                                    class="form-control @error('official_website') is-invalid @enderror"
                                    placeholder="https://example.com">

                                @error('official_website')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Tags --}}
                            <div class="col-12">

                                <label class="form-label">
                                    Tags
                                </label>

                                <select
                                    name="tags[]"
                                    multiple
                                    class="form-select @error('tags') is-invalid @enderror"
                                    size="6">

                                    @foreach($tags as $tag)

                                        <option
                                            value="{{ $tag->id }}"
                                            {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>

                                            {{ $tag->name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('tags')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Description --}}
                            <div class="col-12">

                                <label class="form-label">
                                    Description
                                </label>

                                <textarea
                                    rows="6"
                                    name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Write game description...">{{ old('description') }}</textarea>

                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Active --}}
                            <div class="col-12">

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                        id="is_active"
                                        name="is_active"
                                        {{ old('is_active', true) ? 'checked' : '' }}>

                                    <label
                                        class="form-check-label"
                                        for="is_active">

                                        Active

                                    </label>

                                </div>

                            </div>
                        </div> {{-- End row g-3 --}}
                    </div> {{-- End col-lg-8 --}}

                    {{-- RIGHT COLUMN --}}
                    <div class="col-lg-4">

                        <div class="sticky-top" style="top:20px;">

                            {{-- Cover Image --}}
                            <div class="card shadow-sm border-0 mb-4">

                                <div class="card-header bg-white">
                                    <h6 class="mb-0">
                                        Cover Image
                                    </h6>
                                </div>

                                <div class="card-body">

                                    <div
                                        class="border rounded bg-light d-flex justify-content-center align-items-center mb-3"
                                        style="height:280px;">

                                        <img
                                            id="coverPreview"
                                            src=""
                                            class="img-fluid d-none"
                                            style="max-height:260px;">

                                        <span
                                            id="coverPlaceholder"
                                            class="text-muted">

                                            No Cover Selected

                                        </span>

                                    </div>

                                    <input
                                        type="file"
                                        id="coverInput"
                                        name="cover_image"
                                        accept="image/*"
                                        class="form-control @error('cover_image') is-invalid @enderror">

                                    @error('cover_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button
                                        type="button"
                                        id="removeCover"
                                        class="btn btn-outline-danger btn-sm mt-3 d-none">

                                        Remove Cover

                                    </button>

                                </div>

                            </div>

                            {{-- Banner Image --}}
                            <div class="card shadow-sm border-0">

                                <div class="card-header bg-white">
                                    <h6 class="mb-0">
                                        Banner Image
                                    </h6>
                                </div>

                                <div class="card-body">

                                    <div
                                        class="border rounded bg-light d-flex justify-content-center align-items-center mb-3"
                                        style="height:180px;">

                                        <img
                                            id="bannerPreview"
                                            src=""
                                            class="img-fluid d-none"
                                            style="max-height:160px;">

                                        <span
                                            id="bannerPlaceholder"
                                            class="text-muted">

                                            No Banner Selected

                                        </span>

                                    </div>

                                    <input
                                        type="file"
                                        id="bannerInput"
                                        name="banner_image"
                                        accept="image/*"
                                        class="form-control @error('banner_image') is-invalid @enderror">

                                    @error('banner_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button
                                        type="button"
                                        id="removeBanner"
                                        class="btn btn-outline-danger btn-sm mt-3 d-none">

                                        Remove Banner

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12 mt-4">

                    <div class="accordion" id="requirementsAccordion">

                        {{-- Minimum Requirements --}}
                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button
                                    class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#minimumRequirements">

                                    Minimum Requirements

                                </button>

                            </h2>

                            <div
                                id="minimumRequirements"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#requirementsAccordion">

                                <div class="accordion-body">

                                    <div class="row g-3">

                                        {{-- CPU --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                CPU
                                            </label>

                                            <select
                                                name="minimum_cpu_id"
                                                class="form-select">

                                                <option value="">
                                                    Select CPU
                                                </option>

                                                @foreach($cpus as $cpu)

                                                    <option
                                                        value="{{ $cpu->id }}"
                                                        {{ old('minimum_cpu_id') == $cpu->id ? 'selected' : '' }}>

                                                        {{ $cpu->model }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        {{-- GPU --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                GPU
                                            </label>

                                            <select
                                                name="minimum_gpu_id"
                                                class="form-select">

                                                <option value="">
                                                    Select GPU
                                                </option>

                                                @foreach($gpus as $gpu)

                                                    <option
                                                        value="{{ $gpu->id }}"
                                                        {{ old('minimum_gpu_id') == $gpu->id ? 'selected' : '' }}>

                                                        {{ $gpu->model }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        {{-- RAM --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                RAM
                                            </label>

                                            <input
                                                type="text"
                                                name="minimum_ram"
                                                value="{{ old('minimum_ram') }}"
                                                class="form-control"
                                                placeholder="8 GB">

                                        </div>

                                        {{-- Storage --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                Storage
                                            </label>

                                            <input
                                                type="text"
                                                name="minimum_storage"
                                                value="{{ old('minimum_storage') }}"
                                                class="form-control"
                                                placeholder="100 GB">

                                        </div>

                                        {{-- Operating System --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                Operating System
                                            </label>

                                            <input
                                                type="text"
                                                name="minimum_os"
                                                value="{{ old('minimum_os') }}"
                                                class="form-control"
                                                placeholder="Windows 10 64-bit">

                                        </div>

                                        {{-- DirectX --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                DirectX
                                            </label>

                                            <input
                                                type="text"
                                                name="minimum_directx"
                                                value="{{ old('minimum_directx') }}"
                                                class="form-control"
                                                placeholder="DirectX 12">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- Recommended Requirements --}}
                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#recommendedRequirements">

                                    Recommended Requirements

                                </button>

                            </h2>

                            <div
                                id="recommendedRequirements"
                                class="accordion-collapse collapse"
                                data-bs-parent="#requirementsAccordion">

                                <div class="accordion-body">

                                    <div class="row g-3">

                                        {{-- CPU --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                CPU
                                            </label>

                                            <select
                                                name="recommended_cpu_id"
                                                class="form-select">

                                                <option value="">
                                                    Select CPU
                                                </option>

                                                @foreach($cpus as $cpu)

                                                    <option
                                                        value="{{ $cpu->id }}"
                                                        {{ old('recommended_cpu_id') == $cpu->id ? 'selected' : '' }}>

                                                        {{ $cpu->model }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        {{-- GPU --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                GPU
                                            </label>

                                            <select
                                                name="recommended_gpu_id"
                                                class="form-select">

                                                <option value="">
                                                    Select GPU
                                                </option>

                                                @foreach($gpus as $gpu)

                                                    <option
                                                        value="{{ $gpu->id }}"
                                                        {{ old('recommended_gpu_id') == $gpu->id ? 'selected' : '' }}>

                                                        {{ $gpu->model }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        {{-- RAM --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                RAM
                                            </label>

                                            <input
                                                type="text"
                                                name="recommended_ram"
                                                value="{{ old('recommended_ram') }}"
                                                class="form-control"
                                                placeholder="16 GB">

                                        </div>

                                        {{-- Storage --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                Storage
                                            </label>

                                            <input
                                                type="text"
                                                name="recommended_storage"
                                                value="{{ old('recommended_storage') }}"
                                                class="form-control"
                                                placeholder="150 GB SSD">

                                        </div>

                                        {{-- Operating System --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                Operating System
                                            </label>

                                            <input
                                                type="text"
                                                name="recommended_os"
                                                value="{{ old('recommended_os') }}"
                                                class="form-control"
                                                placeholder="Windows 11 64-bit">

                                        </div>

                                        {{-- DirectX --}}
                                        <div class="col-md-6">

                                            <label class="form-label">
                                                DirectX
                                            </label>

                                            <input
                                                type="text"
                                                name="recommended_directx"
                                                value="{{ old('recommended_directx') }}"
                                                class="form-control"
                                                placeholder="DirectX 12">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Submit --}}
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary px-4">
                        Save Game
                    </button>
                    <a href="{{ route('admin.games.index') }}" class="btn btn-outline-secondary px-4">
                        Cancel
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>

@push('scripts')

<script>

function previewImage(inputId, previewId, placeholderId, removeBtnId)
{
    const input=document.getElementById(inputId);

    const preview=document.getElementById(previewId);

    const placeholder=document.getElementById(placeholderId);

    const remove=document.getElementById(removeBtnId);

    input.addEventListener('change',function(){

        const file=this.files[0];

        if(!file){

            reset();

            return;

        }

        const reader=new FileReader();

        reader.onload=function(e){

            preview.src=e.target.result;

            preview.classList.remove('d-none');

            placeholder.classList.add('d-none');

            remove.classList.remove('d-none');

        }

        reader.readAsDataURL(file);

    });

    remove.addEventListener('click',function(){

        input.value='';

        reset();

    });

    function reset(){

        preview.src='';

        preview.classList.add('d-none');

        placeholder.classList.remove('d-none');

        remove.classList.add('d-none');

    }

}

previewImage(
    'coverInput',
    'coverPreview',
    'coverPlaceholder',
    'removeCover'
);

previewImage(
    'bannerInput',
    'bannerPreview',
    'bannerPlaceholder',
    'removeBanner'
);

</script>

@endpush

@endsection