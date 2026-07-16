@extends('layouts.app')

@section('title', 'News Details')

@section('content')


{{-- Article Header --}}
<section class="py-5 bg-dark text-white">


<div class="container">


<div class="row justify-content-center">


<div class="col-lg-9 text-center">


<span class="badge bg-warning text-dark mb-3">

Gaming Update

</span>



<h1 class="display-4 fw-bold">

GTA VI Receives Massive Gameplay Update

</h1>



<p class="lead text-light opacity-75">

Rockstar Games reveals new gameplay mechanics,
improved graphics and exciting multiplayer features.

</p>



<div class="mt-4">


<span class="me-3">

<i class="bi bi-person-circle"></i>

Admin

</span>



<span>

<i class="bi bi-calendar"></i>

July 17, 2026

</span>


</div>



</div>


</div>


</div>


</section>





{{-- Article Image --}}
<section class="py-5">


<div class="container">


<div class="row justify-content-center">


<div class="col-lg-10">


<img src="https://placehold.co/1200x600?text=Gaming+News"
class="img-fluid rounded-4 shadow-lg"
alt="News">



</div>


</div>


</div>


</section>






{{-- Article Content --}}
<section class="pb-5">


<div class="container">


<div class="row g-5">


<div class="col-lg-8">


<article>


<p class="lead">

Rockstar Games has officially announced new details
about the upcoming GTA VI update, bringing major improvements
to gameplay and performance.

</p>



<h2 class="fw-bold mt-5">

New Gameplay Features

</h2>



<p class="text-muted">

The latest update introduces enhanced AI systems,
better physics, improved graphics rendering and new
multiplayer experiences for players.

</p>



<h2 class="fw-bold mt-5">

Performance Improvements

</h2>



<p class="text-muted">

Developers have optimized the game engine to deliver
better frame rates and improved stability across modern
gaming hardware.

</p>



<h2 class="fw-bold mt-5">

Hardware Recommendations

</h2>



<p class="text-muted">

Players should have a modern CPU, dedicated graphics card
and sufficient RAM to enjoy the best experience.

</p>



</article>



<hr class="my-5">





{{-- Share --}}

<div class="d-flex align-items-center gap-3">


<strong>

Share:

</strong>


<a href="#"
class="btn btn-outline-primary">

<i class="bi bi-facebook"></i>

</a>


<a href="#"
class="btn btn-outline-dark">

<i class="bi bi-twitter-x"></i>

</a>


<a href="#"
class="btn btn-outline-success">

<i class="bi bi-whatsapp"></i>

</a>


</div>



</div>







{{-- Sidebar --}}
<div class="col-lg-4">


<div class="card border-0 shadow-soft mb-4">


<div class="card-body">


<h4 class="fw-bold">

Related Games

</h4>



<hr>



<div class="d-flex mb-3">


<img src="https://placehold.co/80"
class="rounded me-3">


<div>


<h6 class="fw-bold">

GTA VI

</h6>


<small class="text-muted">

Action

</small>


</div>


</div>





<div class="d-flex mb-3">


<img src="https://placehold.co/80"
class="rounded me-3">


<div>


<h6 class="fw-bold">

Cyberpunk 2077

</h6>


<small class="text-muted">

RPG

</small>


</div>


</div>



</div>


</div>






<div class="card border-0 shadow-soft">


<div class="card-body">


<h4 class="fw-bold">

Latest News

</h4>


<hr>



<ul class="list-group list-group-flush">


<li class="list-group-item">

New RTX GPU Released

</li>


<li class="list-group-item">

Gaming Industry Updates

</li>


<li class="list-group-item">

Upcoming PC Games

</li>


</ul>



</div>


</div>




</div>



</div>


</div>


</section>







{{-- Comments --}}
<section class="py-5 bg-light">


<div class="container">


<div class="row justify-content-center">


<div class="col-lg-8">


<h2 class="fw-bold mb-4">

Comments

</h2>



<div class="card border-0 shadow-soft">


<div class="card-body">


<form>


<div class="mb-3">


<textarea
class="form-control"
rows="4"
placeholder="Write your comment..."></textarea>


</div>



<button class="btn btn-primary">

Post Comment

</button>


</form>


</div>


</div>



</div>


</div>


</div>


</section>





{{-- Related Articles --}}
<section class="py-5">


<div class="container">


<h2 class="fw-bold mb-4">

Related Articles

</h2>



<div class="row g-4">



@for($i=1;$i<=3;$i++)



<div class="col-lg-4">


<div class="card border-0 shadow-soft">


<img src="https://placehold.co/600x350"
class="card-img-top">


<div class="card-body">


<h5 class="fw-bold">

Latest Gaming News

</h5>


<a href="#"
class="btn btn-sm btn-outline-primary">

Read More

</a>


</div>


</div>


</div>



@endfor



</div>


</div>


</section>



@endsection