@extends('layouts.app')

@section('title', 'About Us')

@section('content')


{{-- Hero Section --}}
<section class="py-5 bg-dark text-white">


<div class="container">


<div class="row align-items-center">


<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">

🎮 About CanYouRunIt

</span>


<h1 class="display-4 fw-bold">

Helping Gamers Know If Their
<span class="text-warning">
PC Can Run It
</span>

</h1>


<p class="lead text-light opacity-75">

We provide accurate game compatibility information by
comparing your hardware with thousands of game requirements.

</p>


</div>


</div>


</div>


</section>





{{-- Mission --}}
<section class="py-5">


<div class="container">


<div class="row align-items-center g-5">


<div class="col-lg-6">


<img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575"
class="img-fluid rounded-4 shadow-lg"
alt="Gaming">


</div>



<div class="col-lg-6">


<span class="badge bg-primary mb-3">

Our Mission

</span>



<h2 class="fw-bold">

Making PC Gaming Decisions Easier

</h2>



<p class="text-muted">

Millions of gamers purchase games without knowing
whether their computer can handle them.

</p>



<p class="text-muted">

Our goal is to provide a simple and accurate way to
check hardware compatibility before spending money
on games.

</p>



</div>



</div>


</div>


</section>





{{-- How We Work --}}
<section class="py-5 bg-light">


<div class="container">


<div class="text-center mb-5">


<h2 class="fw-bold">

How Our Platform Works

</h2>


<p class="text-muted">

Our compatibility engine compares your PC hardware
against official game requirements.

</p>


</div>





<div class="row g-4">



<div class="col-lg-4">


<div class="card border-0 shadow-soft h-100 text-center p-4">


<div class="mb-3">


<i class="bi bi-database-fill display-4 text-primary"></i>


</div>



<h4 class="fw-bold">

Hardware Database

</h4>



<p class="text-muted">

Thousands of CPUs, GPUs, RAM configurations and
hardware benchmarks are stored in our database.

</p>


</div>


</div>






<div class="col-lg-4">


<div class="card border-0 shadow-soft h-100 text-center p-4">


<div class="mb-3">


<i class="bi bi-cpu-fill display-4 text-success"></i>


</div>



<h4 class="fw-bold">

Compatibility Engine

</h4>



<p class="text-muted">

Our system analyzes your hardware performance and
compares it with minimum and recommended requirements.

</p>


</div>


</div>






<div class="col-lg-4">


<div class="card border-0 shadow-soft h-100 text-center p-4">


<div class="mb-3">


<i class="bi bi-speedometer2 display-4 text-warning"></i>


</div>



<h4 class="fw-bold">

Performance Score

</h4>



<p class="text-muted">

Get easy-to-understand compatibility results and
know how your PC will perform.

</p>


</div>


</div>



</div>


</div>


</section>






{{-- Statistics --}}
<section class="py-5">


<div class="container">


<div class="row g-4 text-center">



<div class="col-md-3">


<h2 class="fw-bold text-primary">

20,000+

</h2>


<p class="text-muted">

Games

</p>


</div>




<div class="col-md-3">


<h2 class="fw-bold text-success">

9,500+

</h2>


<p class="text-muted">

Hardware Models

</p>


</div>




<div class="col-md-3">


<h2 class="fw-bold text-danger">

1M+

</h2>


<p class="text-muted">

Compatibility Checks

</p>


</div>




<div class="col-md-3">


<h2 class="fw-bold text-warning">

100K+

</h2>


<p class="text-muted">

Gamers

</p>


</div>



</div>


</div>


</section>






{{-- Why Choose Us --}}
<section class="py-5 bg-light">


<div class="container">


<div class="text-center mb-5">


<h2 class="fw-bold">

Why Gamers Trust Us

</h2>


</div>





<div class="row g-4">



<div class="col-lg-4">


<div class="feature-card">


<i class="bi bi-check-circle-fill text-success display-5"></i>


<h4 class="fw-bold mt-3">

Accurate Results

</h4>


<p class="text-muted">

Hardware comparisons are based on real performance
data.

</p>


</div>


</div>





<div class="col-lg-4">


<div class="feature-card">


<i class="bi bi-lightning-fill text-warning display-5"></i>


<h4 class="fw-bold mt-3">

Fast Checking

</h4>


<p class="text-muted">

Find out compatibility results within seconds.

</p>


</div>


</div>





<div class="col-lg-4">


<div class="feature-card">


<i class="bi bi-arrow-repeat text-primary display-5"></i>


<h4 class="fw-bold mt-3">

Always Updated

</h4>


<p class="text-muted">

New games and hardware are continuously added.

</p>


</div>


</div>



</div>


</div>


</section>






{{-- Final CTA --}}
<section class="py-5 bg-primary text-white">


<div class="container text-center">


<h2 class="display-5 fw-bold">

Ready To Check Your PC?

</h2>


<p class="lead">

Discover which games your computer can run today.

</p>



<a href="/games"
class="btn btn-warning btn-lg px-5">

Explore Games

</a>


</div>


</section>



@endsection