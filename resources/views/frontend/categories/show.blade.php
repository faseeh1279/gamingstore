@extends('layouts.app')

@section('title', 'Category Games')

@section('content')


{{-- Category Hero --}}
<section class="py-5 bg-dark text-white">

<div class="container">


<div class="row align-items-center">


<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">

🎮 Game Category

</span>


<h1 class="display-4 fw-bold">

Action Games

</h1>


<p class="lead text-light opacity-75">

Explore the best action games with detailed requirements,
compatibility information and performance scores.

</p>



<div class="mt-4">


<span class="badge bg-primary me-2">

2500 Games

</span>


<span class="badge bg-success">

Windows Compatible

</span>


</div>



</div>



</div>


</div>


</section>





{{-- Filters --}}
<section class="py-4">


<div class="container">


<div class="card border-0 shadow-soft">


<div class="card-body">


<div class="row g-3">



<div class="col-lg-4">


<label class="fw-bold">

Search

</label>


<input type="text"
class="form-control"
placeholder="Search action games...">


</div>




<div class="col-lg-3">


<label class="fw-bold">

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


</select>


</div>





<div class="col-lg-3">


<label class="fw-bold">

Release Year

</label>


<select class="form-select">


<option>
All Years
</option>


<option>
2026
</option>


<option>
2025
</option>


<option>
2024
</option>


</select>


</div>




<div class="col-lg-2 d-flex align-items-end">


<button class="btn btn-primary w-100">

Filter

</button>


</div>



</div>


</div>


</div>


</div>


</section>






{{-- Games --}}
<section class="pb-5">


<div class="container">



<div class="d-flex justify-content-between mb-4">


<h2 class="fw-bold">

Action Games

</h2>



<span class="text-muted">

Showing 12 Games

</span>



</div>





<div class="row g-4">



@for($i=1;$i<=12;$i++)



<div class="col-xl-3 col-lg-4 col-md-6">



<div class="card border-0 shadow-soft game-card h-100">



<img src="https://placehold.co/600x800?text=Game"
class="card-img-top"
height="300"
style="object-fit:cover">





<div class="card-body">



<span class="badge bg-danger">

Action

</span>




<h5 class="fw-bold mt-3">

Grand Theft Auto VI

</h5>



<p class="text-muted">

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





<div class="d-flex justify-content-between align-items-center">


<span class="text-success fw-bold">

✔ Compatible

</span>



<a href="#"
class="btn btn-outline-primary btn-sm">

View

</a>



</div>



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





{{-- Related Categories --}}
<section class="py-5 bg-light">


<div class="container">


<h2 class="fw-bold mb-4">

Explore Other Categories

</h2>



<div class="row g-4">



<div class="col-md-3">


<a href="#"
class="text-decoration-none">


<div class="card border-0 shadow-soft text-center p-4">


<i class="bi bi-shield-fill display-5 text-danger"></i>


<h5 class="fw-bold mt-3 text-dark">

RPG

</h5>


</div>


</a>


</div>





<div class="col-md-3">


<a href="#"
class="text-decoration-none">


<div class="card border-0 shadow-soft text-center p-4">


<i class="bi bi-car-front-fill display-5 text-warning"></i>


<h5 class="fw-bold mt-3 text-dark">

Racing

</h5>


</div>


</a>


</div>





<div class="col-md-3">


<a href="#"
class="text-decoration-none">


<div class="card border-0 shadow-soft text-center p-4">


<i class="bi bi-trophy-fill display-5 text-success"></i>


<h5 class="fw-bold mt-3 text-dark">

Sports

</h5>


</div>


</a>


</div>





<div class="col-md-3">


<a href="#"
class="text-decoration-none">


<div class="card border-0 shadow-soft text-center p-4">


<i class="bi bi-diagram-3-fill display-5 text-primary"></i>


<h5 class="fw-bold mt-3 text-dark">

Strategy

</h5>


</div>


</a>


</div>



</div>


</div>


</section>



@endsection