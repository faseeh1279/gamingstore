@extends('layouts.app')

@section('title', 'Game Categories')

@section('content')


{{-- Hero Section --}}
<section class="py-5 bg-dark text-white">

<div class="container">


<div class="row">

<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">
🎮 Explore Categories
</span>


<h1 class="display-4 fw-bold">

Browse Games By
<span class="text-warning">
Category
</span>

</h1>


<p class="lead text-light opacity-75">

Discover thousands of games organized by your favorite genres.
Find action, RPG, racing, strategy and more.

</p>


</div>


</div>


</div>

</section>





{{-- Categories --}}
<section class="py-5">


<div class="container">



<div class="text-center mb-5">


<h2 class="fw-bold">

All Game Categories

</h2>


<p class="text-muted">

Explore games from every genre.

</p>


</div>





<div class="row g-4">



@php

$categories = [

[
'Action',
'bi-lightning-charge-fill',
'primary',
'2500'
],

[
'Adventure',
'bi-compass-fill',
'success',
'1800'
],

[
'Role Playing Games',
'bi-shield-fill',
'danger',
'3200'
],

[
'Racing',
'bi-car-front-fill',
'warning',
'900'
],

[
'Sports',
'bi-trophy-fill',
'info',
'700'
],

[
'Strategy',
'bi-diagram-3-fill',
'dark',
'1200'
],

[
'Simulation',
'bi-pc-display',
'secondary',
'1500'
],

[
'Horror',
'bi-emoji-dizzy-fill',
'danger',
'600'
],

[
'Survival',
'bi-fire',
'warning',
'850'
],

[
'Fighting',
'bi-controller',
'primary',
'450'
],

[
'Puzzle',
'bi-puzzle-fill',
'success',
'300'
],

[
'Indie',
'bi-stars',
'secondary',
'1100'
]

];

@endphp





@foreach($categories as $category)



<div class="col-xl-3 col-lg-4 col-md-6">



<a href="#"
class="text-decoration-none">



<div class="card border-0 shadow-soft h-100 category-card">



<div class="card-body text-center p-5">



<div class="category-icon bg-{{ $category[2] }} text-white mx-auto mb-4">


<i class="bi {{ $category[1] }}"></i>


</div>




<h4 class="fw-bold text-dark">


{{ $category[0] }}


</h4>




<p class="text-muted mb-0">


{{ $category[3] }} Games


</p>




</div>



</div>



</a>



</div>




@endforeach



</div>



</div>


</section>





{{-- Popular Categories --}}
<section class="py-5 bg-light">


<div class="container">


<div class="row align-items-center">



<div class="col-lg-6">


<h2 class="fw-bold">

Most Popular Genres

</h2>


<p class="text-muted">

These categories contain the most searched games
by our community.

</p>


<ul class="list-group mt-4">


<li class="list-group-item d-flex justify-content-between">

Action

<span class="badge bg-primary">
2500+
</span>

</li>



<li class="list-group-item d-flex justify-content-between">

RPG

<span class="badge bg-danger">
3200+
</span>

</li>



<li class="list-group-item d-flex justify-content-between">

Adventure

<span class="badge bg-success">
1800+
</span>

</li>



<li class="list-group-item d-flex justify-content-between">

Strategy

<span class="badge bg-dark">
1200+
</span>

</li>


</ul>


</div>





<div class="col-lg-6 text-center">


<img src="https://images.unsplash.com/photo-1511512578047-dfb367046420"
class="img-fluid rounded-4 shadow-lg"
alt="Gaming">


</div>



</div>


</div>


</section>





{{-- CTA --}}
<section class="py-5 bg-primary text-white">


<div class="container text-center">


<h2 class="display-5 fw-bold">

Can't Find Your Game?

</h2>


<p class="lead">

Search our complete game database and check compatibility instantly.

</p>



<a href="/games"
class="btn btn-warning btn-lg px-5">


Browse All Games


</a>


</div>


</section>



@endsection