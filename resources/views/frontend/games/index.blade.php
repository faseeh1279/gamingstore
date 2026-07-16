@extends('layouts.app')

@section('title', 'Games')

@section('content')

{{-- Hero Section --}}
<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <span class="badge bg-warning text-dark mb-3">
                    🎮 Game Database
                </span>

                <h1 class="display-4 fw-bold">
                    Explore Thousands of
                    <span class="text-warning">
                        PC Games
                    </span>
                </h1>

                <p class="lead text-light opacity-75">
                    Discover game requirements, compatibility scores,
                    hardware recommendations and performance information.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- Search & Filters --}}
<section class="py-5">

<div class="container">

<div class="card border-0 shadow-soft">

<div class="card-body p-4">


<form>

<div class="row g-3">


{{-- Search --}}
<div class="col-lg-5">

<label class="fw-bold mb-2">
Search Games
</label>

<div class="input-group">

<input type="text"
class="form-control"
placeholder="Search GTA VI, Cyberpunk, Elden Ring...">


<button class="btn btn-warning">

<i class="bi bi-search"></i>

</button>

</div>

</div>


{{-- Category --}}
<div class="col-lg-2">

<label class="fw-bold mb-2">
Category
</label>

<select class="form-select">

<option>
All Categories
</option>

<option>
Action
</option>

<option>
Adventure
</option>

<option>
RPG
</option>

<option>
Racing
</option>

</select>

</div>



{{-- Platform --}}
<div class="col-lg-2">

<label class="fw-bold mb-2">
Platform
</label>

<select class="form-select">

<option>
All Platforms
</option>

<option>
Windows
</option>

<option>
Linux
</option>

<option>
Mac
</option>

</select>

</div>



{{-- Requirement --}}
<div class="col-lg-3">

<label class="fw-bold mb-2">
Requirement
</label>

<select class="form-select">

<option>
Any Requirement
</option>

<option>
Low End PC
</option>

<option>
Mid Range PC
</option>

<option>
High End PC
</option>

</select>

</div>


</div>

</form>


</div>

</div>

</div>

</section>



{{-- Games Section --}}
<section class="pb-5">

<div class="container">


<div class="d-flex justify-content-between align-items-center mb-4">


<div>

<h2 class="fw-bold">
All Games
</h2>

<p class="text-muted mb-0">
Browse our complete gaming database.
</p>

</div>


<div>

<span class="badge bg-primary">
20,000+ Games
</span>

</div>


</div>




<div class="row g-4">


@for($i = 1; $i <= 12; $i++)


<div class="col-xl-3 col-lg-4 col-md-6">


<div class="card game-card shadow-soft border-0 h-100">


<img src="https://placehold.co/600x800?text=Game+Cover"
class="card-img-top"
height="300"
style="object-fit:cover"
alt="Game">



<div class="card-body">


<div class="d-flex justify-content-between mb-3">


<span class="badge bg-success">
Action
</span>


<div class="text-warning">

<i class="bi bi-star-fill"></i>

4.8

</div>


</div>



<h5 class="fw-bold">
Grand Theft Auto VI
</h5>


<p class="text-muted mb-3">

Rockstar Games

</p>



<div class="mb-3">


<span class="badge bg-dark">
Windows
</span>


<span class="badge bg-secondary">
Open World
</span>


</div>



<div class="border rounded p-3 mb-3">


<small class="text-muted d-block">
Minimum Requirement
</small>


<strong>
RTX 3060 • Ryzen 5 • 16GB RAM
</strong>


</div>



<a href="#"
class="btn btn-primary w-100">


View Details


<i class="bi bi-arrow-right ms-2"></i>


</a>



</div>


</div>


</div>


@endfor



</div>


{{-- Pagination --}}

<div class="d-flex justify-content-center mt-5">


<nav>

<ul class="pagination">


<li class="page-item active">

<a class="page-link">
1
</a>

</li>


<li class="page-item">

<a class="page-link">
2
</a>

</li>


<li class="page-item">

<a class="page-link">
3
</a>

</li>


</ul>


</nav>


</div>



</div>

</section>



@endsection