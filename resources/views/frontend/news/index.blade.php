@extends('layouts.app')

@section('title', 'Gaming News')

@section('content')


{{-- Hero --}}
<section class="py-5 bg-dark text-white">

<div class="container">

<div class="row align-items-center">


<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">

📰 Latest Gaming News

</span>


<h1 class="display-4 fw-bold">

Gaming News &
<span class="text-warning">
Updates
</span>

</h1>


<p class="lead text-light opacity-75">

Stay updated with the latest game releases, hardware launches,
patches, esports events and industry news.

</p>


</div>


</div>

</div>

</section>





{{-- Search --}}
<section class="py-5">


<div class="container">


<div class="card border-0 shadow-soft">


<div class="card-body p-4">


<div class="row g-3">


<div class="col-lg-8">


<div class="input-group">


<input type="text"
class="form-control form-control-lg"
placeholder="Search gaming news...">


<button class="btn btn-warning">

<i class="bi bi-search"></i>

Search

</button>


</div>


</div>



<div class="col-lg-4">


<select class="form-select form-select-lg">


<option>

All Categories

</option>


<option>

Game Updates

</option>


<option>

Hardware

</option>


<option>

Esports

</option>


<option>

Industry

</option>


</select>


</div>



</div>


</div>


</div>


</div>


</section>





{{-- Featured News --}}
<section class="pb-5">


<div class="container">


<div class="row g-4">



<div class="col-lg-8">


<div class="card border-0 shadow-soft overflow-hidden">


<img src="https://placehold.co/1200x600?text=Featured+News"
class="card-img-top"
height="400"
style="object-fit:cover">


<div class="card-body p-4">


<span class="badge bg-danger mb-3">

Featured

</span>


<h2 class="fw-bold">

GTA VI Receives Massive Gameplay Update

</h2>


<p class="text-muted">

Rockstar Games reveals new gameplay mechanics,
graphics improvements and multiplayer features.

</p>


<a href="#"
class="btn btn-primary">

Read Full Article

<i class="bi bi-arrow-right ms-2"></i>

</a>


</div>


</div>


</div>





<div class="col-lg-4">


<div class="card border-0 shadow-soft h-100">


<div class="card-body">


<h4 class="fw-bold mb-4">

Popular Topics

</h4>



<ul class="list-group list-group-flush">


<li class="list-group-item">

🎮 Game Releases

</li>


<li class="list-group-item">

💻 Hardware News

</li>


<li class="list-group-item">

🏆 Esports

</li>


<li class="list-group-item">

🔥 Gaming Industry

</li>


</ul>


</div>


</div>


</div>



</div>


</div>


</section>





{{-- Latest Articles --}}
<section class="py-5 bg-light">


<div class="container">



<div class="d-flex justify-content-between align-items-center mb-5">


<div>


<h2 class="fw-bold">

Latest Articles

</h2>


<p class="text-muted mb-0">

Fresh gaming updates and announcements.

</p>


</div>



<span class="badge bg-primary">

500+ Articles

</span>


</div>





<div class="row g-4">



@for($i=1;$i<=9;$i++)



<div class="col-xl-4 col-lg-6">



<div class="card border-0 shadow-soft news-card h-100">



<img src="https://placehold.co/700x400?text=Gaming+News"
class="card-img-top"
height="220"
style="object-fit:cover">





<div class="card-body">



<span class="badge bg-primary">

Gaming

</span>



<h4 class="fw-bold mt-3">

New Gaming Update Announced

</h4>



<p class="text-muted">

Latest information about upcoming games,
hardware and gaming technology.

</p>



</div>



<div class="card-footer bg-white border-0">


<div class="d-flex justify-content-between align-items-center">


<small class="text-muted">

July 17, 2026

</small>



<a href="#"
class="btn btn-outline-primary btn-sm">

Read More

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





{{-- Newsletter --}}
<section class="py-5 bg-primary text-white">


<div class="container text-center">


<h2 class="fw-bold">

Subscribe For Gaming Updates

</h2>


<p class="lead">

Get latest gaming news directly in your inbox.

</p>


<div class="row justify-content-center mt-4">


<div class="col-lg-6">


<div class="input-group">


<input type="email"
class="form-control form-control-lg"
placeholder="Email address">


<button class="btn btn-warning">

Subscribe

</button>


</div>


</div>


</div>


</div>


</section>



@endsection