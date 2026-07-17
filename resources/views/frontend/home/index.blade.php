@extends('layouts.app')

@section('title', 'Can You Run It')

@section('content')

{{-- Hero Section --}}
<section class="hero py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                    🎮 {{ __('home.hero_badge') }}
                </span>

                <h1 class="display-3 fw-bold mb-4">
                    {{ __('home.hero_title_start') }}
                    <span class="text-warning">
                        {{ __('home.hero_title_end') }}
                    </span>
                </h1>

                <p class="lead mb-4">
                    {{ __('hero_description') }}
                </p>

                <form class="mb-4">

                    <div class="input-group input-group-lg">

                        <input type="text"
                               class="form-control"
                               placeholder="Search for a game...">

                        <button class="btn btn-warning">

                            <i class="bi bi-search me-2"></i>

                            {{ __('home.search') }}

                        </button>

                    </div>

                </form>

                <div class="d-flex flex-wrap gap-3">

                    <a href="#"
                       class="btn btn-light btn-lg">

                        <i class="bi bi-pc-display me-2"></i>

                        {{ __('home.check_my_pc') }}

                    </a>

                    <a href="#popular-games"
                       class="btn btn-outline-light btn-lg">

                        {{ __('home.browse_games') }}

                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center">

                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=900&q=80"
                     class="img-fluid rounded-4 shadow-lg"
                     alt="Gaming">

            </div>

        </div>

    </div>

</section>

{{-- Statistics --}}
<section class="section-padding">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card shadow-soft border-0 text-center h-100">

                    <div class="card-body">

                        <i class="bi bi-controller display-5 text-primary"></i>

                        <h2 class="fw-bold mt-3">
                            20,000+
                        </h2>

                        <p class="text-muted mb-0">
                            {{ __('home.statistics.games') }}
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow-soft border-0 text-center h-100">

                    <div class="card-body">

                        <i class="bi bi-cpu display-5 text-success"></i>

                        <h2 class="fw-bold mt-3">
                            5,200+
                        </h2>

                        <p class="text-muted mb-0">
                            {{ __('home.statistics.cpus') }}
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow-soft border-0 text-center h-100">

                    <div class="card-body">

                        <i class="bi bi-gpu-card display-5 text-danger"></i>

                        <h2 class="fw-bold mt-3">
                            4,300+
                        </h2>

                        <p class="text-muted mb-0">
                            {{ __('home.statistics.gpus') }}
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow-soft border-0 text-center h-100">

                    <div class="card-body">

                        <i class="bi bi-graph-up-arrow display-5 text-warning"></i>

                        <h2 class="fw-bold mt-3">
                            1M+
                        </h2>

                        <p class="text-muted mb-0">
                            {{ __('home.statistics.checks') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Popular Games --}}
<section class="section-padding bg-white" id="popular-games">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">

            <div>

                <span class="badge bg-primary mb-2">
                    {{ __('home.featured') }}
                </span>

                <h2 class="fw-bold">
                    {{ __('home.popular_games') }}
                </h2>

                <p class="text-muted mb-0">
                    {{ __('home.popular_games_description') }}
                </p>

            </div>

            <a href="#" class="btn btn-outline-primary">
                {{ __('home.view_all_games') }}
                <i class="bi bi-arrow-right ms-2"></i>
            </a>

        </div>

        <div class="row g-4">

            @for($i = 1; $i <= 6; $i++)

            <div class="col-xl-4 col-lg-4 col-md-6">

                <div class="card game-card shadow-soft h-100">

                    <img src="https://placehold.co/600x800?text=Game+Cover"
                         class="card-img-top"
                         alt="Game">

                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-2">

                            <span class="badge bg-success">
                                Action
                            </span>

                            <span class="text-warning">

                                <i class="bi bi-star-fill"></i>

                                4.8

                            </span>

                        </div>

                        <h4 class="fw-bold">

                            GTA VI

                        </h4>

                        <p class="text-muted">

                            Rockstar Games

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-dark">
                                Windows
                            </span>

                            <span class="badge bg-secondary">
                                Single Player
                            </span>

                            <span class="badge bg-danger">
                                Open World
                            </span>

                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="fw-bold text-primary fs-4">

                                $69.99

                            </span>

                            <a href="#"
                               class="btn btn-primary">

                                View Details

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endfor

        </div>

    </div>

</section>

{{-- How It Works --}}
<section class="section-padding bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-primary mb-3">
                {{ __('home.simple_process') }}
            </span>

            <h2 class="fw-bold display-6">
                {{ __('home.how_it_works') }}
            </h2>

            <p class="text-muted col-lg-7 mx-auto">
                {{ __('home.how_description') }}
            </p>

        </div>

        <div class="row g-4">

            {{-- Step 1 --}}
            <div class="col-lg-4">

                <div class="card h-100 border-0 shadow-soft text-center p-4">

                    <div class="icon-box bg-primary text-white mx-auto mb-4">

                        <i class="bi bi-search"></i>

                    </div>

                    <h4 class="fw-bold">

                        {{ __('home.steps.search_title') }}

                    </h4>

                    <p class="text-muted">

                        {{ __('home.steps.search_description') }}

                    </p>

                </div>

            </div>

            {{-- Step 2 --}}
            <div class="col-lg-4">

                <div class="card h-100 border-0 shadow-soft text-center p-4">

                    <div class="icon-box bg-success text-white mx-auto mb-4">

                        <i class="bi bi-cpu"></i>

                    </div>

                    <h4 class="fw-bold">

                        {{ __('home.steps.specs_title') }}

                    </h4>

                    <p class="text-muted">

                        {{ __('home.steps.specs_description') }}

                    </p>

                </div>

            </div>

            {{-- Step 3 --}}
            <div class="col-lg-4">

                <div class="card h-100 border-0 shadow-soft text-center p-4">

                    <div class="icon-box bg-warning text-dark mx-auto mb-4">

                        <i class="bi bi-graph-up-arrow"></i>

                    </div>

                    <h4 class="fw-bold">

                       {{  __('home.steps.result_title') }}

                    </h4>

                    <p class="text-muted">

                       {{ __('home.steps.result_description') }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Browse Categories --}}
<section class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-success mb-3">
                {{ __('home.explore') }}
            </span>

            <h2 class="fw-bold display-6">
                {{ __('home.browse_categories') }}
            </h2>

            <p class="text-muted col-lg-7 mx-auto">
                {{ __('home.categories_description') }}
            </p>

        </div>

        <div class="row g-4">

            @php
                $categories = [
                    ['Action','bi-lightning-charge-fill','primary'],
                    ['Adventure','bi-compass-fill','success'],
                    ['RPG','bi-shield-fill','danger'],
                    ['Racing','bi-car-front-fill','warning'],
                    ['Sports','bi-trophy-fill','info'],
                    ['Strategy','bi-diagram-3-fill','dark'],
                    ['Simulation','bi-pc-display','secondary'],
                    ['Horror','bi-emoji-dizzy-fill','danger']
                ];
            @endphp

            @foreach($categories as $category)

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <a href="#" class="text-decoration-none">

                        <div class="category-card">

                            <div class="category-icon bg-{{ $category[2] }}">

                                <i class="bi {{ $category[1] }}"></i>

                            </div>

                            <h5 class="fw-bold mt-4">

                                {{ $category[0] }}

                            </h5>

                            <p class="text-muted mb-0">

                                {{ rand(200,2500) }} Games

                            </p>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- Why Choose Us --}}
<section class="section-padding bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-warning text-dark mb-3">
                {{ __('home.why_choose_us') }}
            </span>

            <h2 class="fw-bold display-6">
                {{ __('home.why_title') }}
            </h2>

            <p class="text-muted col-lg-8 mx-auto">
                {{ __('home.why_description') }}
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-primary">

                        <i class="bi bi-controller"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.library_title') }}
                    </h4>

                    <p class="text-muted">
                        {{ __('home.features.library_description') }}
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-success">

                        <i class="bi bi-lightning-charge-fill"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.instant_title') }}
                    </h4>

                    <p class="text-muted">
                        {{ __('home.features.instant_description') }}
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-danger">

                        <i class="bi bi-cpu-fill"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.hardware_title') }}
                    </h4>

                    <p class="text-muted">
                       {{ __('home.features.hardware_description')}}
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-warning">

                        <i class="bi bi-arrow-repeat"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.updated_title') }}
                    </h4>

                    <p class="text-muted">
                       {{ __('home.features.updated_description') }}
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-info">

                        <i class="bi bi-graph-up-arrow"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.performance_title') }}
                    </h4>

                    <p class="text-muted">
                        {{ __('home.features.performance_description') }}
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <div class="feature-icon bg-dark">

                        <i class="bi bi-heart-fill"></i>

                    </div>

                    <h4 class="fw-bold mt-4">
                        {{ __('home.features.favorites_title') }}
                    </h4>

                    <p class="text-muted">
                        {{ __('home.features.favorites_description') }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Featured Hardware --}}
<section class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger mb-3">
                Hardware Database
            </span>

            <h2 class="fw-bold display-6">
                Featured Hardware
            </h2>

            <p class="text-muted col-lg-8 mx-auto">
                Explore popular CPUs and GPUs used by gamers around the world.
                Compare hardware performance before checking game compatibility.
            </p>

        </div>

        <div class="row">

            {{-- CPUs --}}
            <div class="col-lg-6 mb-4">

                <div class="card border-0 shadow-soft h-100">

                    <div class="card-header bg-primary text-white">

                        <h4 class="mb-0">

                            <i class="bi bi-cpu me-2"></i>

                            Popular CPUs

                        </h4>

                    </div>

                    <div class="card-body">

                        @php

                        $cpus = [

                            ['AMD Ryzen 7 9800X3D','19800'],

                            ['Intel Core i9-14900K','19450'],

                            ['AMD Ryzen 7 7800X3D','18800'],

                            ['Intel Core i7-14700K','17600'],

                            ['AMD Ryzen 5 7600X','15100']

                        ];

                        @endphp

                        @foreach($cpus as $cpu)

                        <div class="hardware-item">

                            <div>

                                <h6 class="fw-bold mb-1">

                                    {{ $cpu[0] }}

                                </h6>

                                <small class="text-muted">

                                    Performance Score

                                </small>

                            </div>

                            <span class="badge bg-success">

                                {{ $cpu[1] }}

                            </span>

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

            {{-- GPUs --}}
            <div class="col-lg-6 mb-4">

                <div class="card border-0 shadow-soft h-100">

                    <div class="card-header bg-dark text-white">

                        <h4 class="mb-0">

                            <i class="bi bi-gpu-card me-2"></i>

                            Popular GPUs

                        </h4>

                    </div>

                    <div class="card-body">

                        @php

                        $gpus = [

                            ['RTX 5090','39800'],

                            ['RTX 4090','37200'],

                            ['RTX 5080','34000'],

                            ['RX 7900 XTX','31200'],

                            ['RTX 4070 SUPER','24100']

                        ];

                        @endphp

                        @foreach($gpus as $gpu)

                        <div class="hardware-item">

                            <div>

                                <h6 class="fw-bold mb-1">

                                    {{ $gpu[0] }}

                                </h6>

                                <small class="text-muted">

                                    Performance Score

                                </small>

                            </div>

                            <span class="badge bg-primary">

                                {{ $gpu[1] }}

                            </span>

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Compatibility Checker --}}
<section class="section-padding bg-dark text-white">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-warning text-dark mb-3">
                Compatibility Checker
            </span>

            <h2 class="display-5 fw-bold">
                Can Your PC Run This Game?
            </h2>

            <p class="text-light opacity-75 col-lg-8 mx-auto">
                Select your hardware and instantly check whether your PC meets
                the minimum or recommended requirements for your favorite games.
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card border-0 shadow-lg">

                    <div class="card-body p-4 p-lg-5">

                        <div class="row g-4">

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">
                                    Select Game
                                </label>

                                <select class="form-select form-select-lg">

                                    <option>
                                        Grand Theft Auto VI
                                    </option>

                                    <option>
                                        Cyberpunk 2077
                                    </option>

                                    <option>
                                        Elden Ring
                                    </option>

                                    <option>
                                        Red Dead Redemption 2
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">
                                    Processor
                                </label>

                                <select class="form-select form-select-lg">

                                    <option>
                                        Ryzen 7 7800X3D
                                    </option>

                                    <option>
                                        Intel Core i7-14700K
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">
                                    Graphics Card
                                </label>

                                <select class="form-select form-select-lg">

                                    <option>
                                        RTX 4070 SUPER
                                    </option>

                                    <option>
                                        RX 7900 XTX
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-3">

                                <label class="form-label fw-semibold">
                                    RAM
                                </label>

                                <input
                                    type="number"
                                    class="form-control form-control-lg"
                                    placeholder="16">

                            </div>

                            <div class="col-md-3">

                                <label class="form-label fw-semibold">
                                    Storage
                                </label>

                                <input
                                    type="number"
                                    class="form-control form-control-lg"
                                    placeholder="500">

                            </div>

                        </div>

                        <div class="text-center mt-5">

                            <button class="btn btn-warning btn-lg px-5">

                                <i class="bi bi-lightning-charge-fill me-2"></i>

                                Can I Run It?

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Latest Gaming News --}}
<section class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-primary mb-3">
                Latest News
            </span>

            <h2 class="display-6 fw-bold">
                Gaming News & Updates
            </h2>

            <p class="text-muted col-lg-8 mx-auto">
                Stay updated with the latest game releases, hardware launches,
                patches, esports tournaments and industry news.
            </p>

        </div>

        <div class="row g-4">

            @for($i = 1; $i <= 3; $i++)

            <div class="col-lg-4">

                <div class="card news-card shadow-soft border-0 h-100">

                    <img src="https://placehold.co/600x350"
                         class="card-img-top"
                         alt="News">

                    <div class="card-body">

                        <span class="badge bg-danger mb-3">

                            Gaming

                        </span>

                        <h4 class="fw-bold">

                            GTA VI Receives Massive Gameplay Update

                        </h4>

                        <p class="text-muted">

                            Rockstar Games reveals new gameplay mechanics,
                            improved graphics and exciting multiplayer
                            features coming soon.

                        </p>

                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">

                        <small class="text-muted">

                            July 17, 2026

                        </small>

                        <a href="#"
                           class="btn btn-sm btn-outline-primary">

                            Read More

                        </a>

                    </div>

                </div>

            </div>

            @endfor

        </div>

        <div class="text-center mt-5">

            <a href="#"
               class="btn btn-primary btn-lg">

                View All News

            </a>

        </div>

    </div>

</section>

{{-- User Testimonials --}}
<section class="section-padding bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-success mb-3">
                Community
            </span>

            <h2 class="display-6 fw-bold">
                Trusted by Thousands of Gamers
            </h2>

            <p class="text-muted col-lg-8 mx-auto">
                See what gamers are saying about CanYouRunIt and how our
                compatibility checker helps them before purchasing games.
            </p>

        </div>

        <div class="row g-4">

            @for($i = 1; $i <= 3; $i++)

            <div class="col-lg-4">

                <div class="card testimonial-card border-0 shadow-soft h-100">

                    <div class="card-body">

                        <div class="mb-3 text-warning">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>

                        <p class="text-muted">

                            "This website saved me from buying games my PC
                            couldn't handle. The compatibility results were
                            accurate and easy to understand."

                        </p>

                        <hr>

                        <div class="d-flex align-items-center">

                            <img src="https://i.pravatar.cc/100?img={{ $i }}"
                                 class="rounded-circle me-3"
                                 width="60"
                                 height="60"
                                 alt="User">

                            <div>

                                <h6 class="mb-0 fw-bold">
                                    Gamer {{ $i }}
                                </h6>

                                <small class="text-muted">
                                    PC Gamer
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            @endfor

        </div>

    </div>

</section>

{{-- FAQ Section --}}
<section class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-info text-dark mb-3">
                Frequently Asked Questions
            </span>

            <h2 class="display-6 fw-bold">
                Got Questions?
            </h2>

            <p class="text-muted col-lg-8 mx-auto">
                Here are some of the most common questions gamers ask before
                checking whether their PC can run a game.
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="accordion shadow-soft rounded-4 overflow-hidden"
                     id="faqAccordion">

                    {{-- Question 1 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq1">

                                How does CanYouRunIt work?

                            </button>

                        </h2>

                        <div id="faq1"
                             class="accordion-collapse collapse show"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Simply select your CPU, GPU, RAM and storage.
                                Our compatibility engine compares your system
                                against the game's minimum and recommended
                                requirements.

                            </div>

                        </div>

                    </div>

                    {{-- Question 2 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq2">

                                Are the results accurate?

                            </button>

                        </h2>

                        <div id="faq2"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Yes. Hardware is compared using performance
                                scores and benchmark rankings to provide
                                reliable compatibility results.

                            </div>

                        </div>

                    </div>

                    {{-- Question 3 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq3">

                                Do I need to install any software?

                            </button>

                        </h2>

                        <div id="faq3"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                No. Everything works directly in your browser.
                                Simply enter your PC specifications manually.

                            </div>

                        </div>

                    </div>

                    {{-- Question 4 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq4">

                                Is CanYouRunIt free?

                            </button>

                        </h2>

                        <div id="faq4"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Yes. You can search games, compare hardware,
                                and check compatibility completely free.

                            </div>

                        </div>

                    </div>

                    {{-- Question 5 --}}
                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq5">

                                Can I save my PC specifications?

                            </button>

                        </h2>

                        <div id="faq5"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Yes. Once you create an account, you can save
                                your system configuration and perform
                                compatibility checks without entering your
                                hardware every time.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Newsletter --}}
<section class="section-padding bg-primary text-white">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <span class="badge bg-warning text-dark mb-3">
                    Stay Updated
                </span>

                <h2 class="display-5 fw-bold mb-3">

                    Never Miss a Game Release

                </h2>

                <p class="lead mb-5">

                    Subscribe to receive the latest gaming news, hardware
                    updates, new game requirements, and exclusive content
                    directly in your inbox.

                </p>

                <form>

                    <div class="row g-3 justify-content-center">

                        <div class="col-md-8">

                            <input
                                type="email"
                                class="form-control form-control-lg"
                                placeholder="Enter your email address">

                        </div>

                        <div class="col-md-4">

                            <button
                                class="btn btn-warning btn-lg w-100">

                                <i class="bi bi-envelope-paper-fill me-2"></i>

                                Subscribe

                            </button>

                        </div>

                    </div>

                </form>

                <small class="d-block mt-4 opacity-75">

                    No spam. Unsubscribe anytime.

                </small>

            </div>

        </div>

    </div>

</section>

{{-- Final Call To Action --}}
<section class="section-padding cta-section" id="final-callback">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <span class="badge bg-warning text-dark px-3 py-2 mb-3">

                    Ready to Play?

                </span>

                <h2 class="display-4 fw-bold mb-4">

                    Find Out If Your PC Can Run
                    <span class="text-warning">
                        Any Game
                    </span>

                </h2>

                <p class="lead text-light mb-5">

                    Compare your computer specifications against thousands of
                    games in seconds. Discover which games your PC can run,
                    identify hardware bottlenecks, and plan your next upgrade
                    with confidence.

                </p>

                <div class="d-flex justify-content-center flex-wrap gap-3">

                    <a href="#"
                       class="btn btn-warning btn-lg px-5">

                        <i class="bi bi-pc-display-horizontal me-2"></i>

                        Check My PC

                    </a>

                    <a href="#"
                       class="btn btn-outline-light btn-lg px-5">

                        <i class="bi bi-controller me-2"></i>

                        Browse Games

                    </a>

                </div>

                <div class="row mt-5 text-center">

                    <div class="col-md-4">

                        <h3 class="fw-bold text-warning">

                            20,000+

                        </h3>

                        <p class="mb-0 text-light">

                            Games Available

                        </p>

                    </div>

                    <div class="col-md-4">

                        <h3 class="fw-bold text-warning">

                            9,500+

                        </h3>

                        <p class="mb-0 text-light">

                            Hardware Models

                        </p>

                    </div>

                    <div class="col-md-4">

                        <h3 class="fw-bold text-warning">

                            1 Million+

                        </h3>

                        <p class="mb-0 text-light">

                            Compatibility Checks

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection