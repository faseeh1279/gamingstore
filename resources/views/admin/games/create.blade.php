@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">
            <h5 class="mb-0">Add New Game</h5>
        </div>

        <div class="card-body">

            <form action="#" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Game Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter game name">
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control"
                               placeholder="game-slug">
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Category</label>

                        <select name="category_id"
                                class="form-select">

                            <option selected>
                                Select Category
                            </option>

                            <option value="1">
                                Action
                            </option>

                            <option value="2">
                                Adventure
                            </option>

                        </select>

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Developer</label>

                        <select name="developer_id"
                                class="form-select">

                            <option selected>
                                Select Developer
                            </option>

                        </select>

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Publisher</label>

                        <select name="publisher_id"
                                class="form-select">

                            <option selected>
                                Select Publisher
                            </option>

                        </select>

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Platform</label>

                        <select name="platform_id"
                                class="form-select">

                            <option selected>
                                Select Platform
                            </option>

                        </select>

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Release Date</label>

                        <input type="date"
                               name="release_date"
                               class="form-control">

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Price</label>

                        <input type="number"
                               name="price"
                               class="form-control"
                               placeholder="0.00">

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Cover Image</label>

                        <input type="file"
                               name="image"
                               class="form-control">

                    </div>


                    <div class="col-md-6">
                        <label class="form-label">
                            Tags
                        </label>

                        <select class="form-select"
                                name="tags[]"
                                multiple>

                            <option>
                                Multiplayer
                            </option>

                            <option>
                                RPG
                            </option>

                            <option>
                                Strategy
                            </option>

                        </select>

                    </div>


                    <div class="col-12">

                        <label class="form-label">
                            Description
                        </label>

                        <textarea name="description"
                                  rows="5"
                                  class="form-control"
                                  placeholder="Enter game description"></textarea>

                    </div>


                    {{-- Requirements Dropdown --}}

                    <div class="col-12 mt-4">

                        <div class="accordion" id="requirementsAccordion">


                            {{-- Minimum Requirements --}}

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#minimumRequirements">

                                        Minimum Requirements

                                    </button>

                                </h2>


                                <div id="minimumRequirements"
                                     class="accordion-collapse collapse"
                                     data-bs-parent="#requirementsAccordion">


                                    <div class="accordion-body">


                                        <div class="row g-3">


                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    CPU
                                                </label>

                                                <select name="minimum_cpu_id"
                                                        class="form-select">

                                                    <option>
                                                        Select CPU
                                                    </option>

                                                </select>

                                            </div>


                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    GPU
                                                </label>

                                                <select name="minimum_gpu_id"
                                                        class="form-select">

                                                    <option>
                                                        Select GPU
                                                    </option>

                                                </select>

                                            </div>


                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    RAM
                                                </label>

                                                <input type="text"
                                                       name="minimum_ram"
                                                       class="form-control"
                                                       placeholder="8GB">

                                            </div>


                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    Storage
                                                </label>

                                                <input type="text"
                                                       name="minimum_storage"
                                                       class="form-control"
                                                       placeholder="100GB">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            {{-- Recommended Requirements --}}

                            <div class="accordion-item">


                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#recommendedRequirements">

                                        Recommended Requirements

                                    </button>

                                </h2>



                                <div id="recommendedRequirements"
                                     class="accordion-collapse collapse"
                                     data-bs-parent="#requirementsAccordion">


                                    <div class="accordion-body">


                                        <div class="row g-3">


                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    CPU
                                                </label>

                                                <select name="recommended_cpu_id"
                                                        class="form-select">

                                                    <option>
                                                        Select CPU
                                                    </option>

                                                </select>

                                            </div>



                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    GPU
                                                </label>

                                                <select name="recommended_gpu_id"
                                                        class="form-select">

                                                    <option>
                                                        Select GPU
                                                    </option>

                                                </select>

                                            </div>



                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    RAM
                                                </label>

                                                <input type="text"
                                                       name="recommended_ram"
                                                       class="form-control"
                                                       placeholder="16GB">

                                            </div>



                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    Storage
                                                </label>

                                                <input type="text"
                                                       name="recommended_storage"
                                                       class="form-control"
                                                       placeholder="150GB SSD">

                                            </div>



                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    Operating System
                                                </label>

                                                <select name="recommended_os"
                                                        class="form-select">

                                                    <option>
                                                        Windows 10 64-bit
                                                    </option>

                                                    <option>
                                                        Windows 11 64-bit
                                                    </option>

                                                </select>

                                            </div>



                                            <div class="col-md-6">

                                                <label class="form-label">
                                                    DirectX Version
                                                </label>

                                                <input type="text"
                                                       name="recommended_directx"
                                                       class="form-control"
                                                       placeholder="DirectX 12">

                                            </div>


                                        </div>


                                    </div>


                                </div>


                            </div>


                        </div>

                    </div>


                </div>



                <div class="mt-4">

                    <button type="submit"
                            class="btn btn-primary">

                        Save Game

                    </button>


                    <a href="#"
                       class="btn btn-secondary">

                        Cancel

                    </a>

                </div>


            </form>


        </div>

    </div>

</div>

@endsection