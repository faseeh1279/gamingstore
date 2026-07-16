@extends('layouts.app')

@section('title', 'Game Details')

@section('content')


{{-- Game Hero --}}
<section class="py-5 bg-dark text-white">

<div class="container">


<div class="row align-items-center g-5">


<div class="col-lg-4">


<img src="https://placehold.co/600x800?text=GTA+VI"
class="img-fluid rounded-4 shadow-lg"
alt="Game Cover">


</div>



<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">
Action Adventure
</span>


<h1 class="display-4 fw-bold">

Grand Theft Auto VI

</h1>


<p class="lead text-light opacity-75">

Experience the next generation of open-world gaming
from Rockstar Games.

</p>



<div class="row mt-4">


<div class="col-md-4">

<h6 class="text-warning">
Developer
</h6>

<p>
Rockstar Games
</p>

</div>



<div class="col-md-4">

<h6 class="text-warning">
Publisher
</h6>

<p>
Rockstar Games
</p>

</div>



<div class="col-md-4">

<h6 class="text-warning">
Release Date
</h6>

<p>
2026
</p>

</div>



</div>



<div class="mt-4">


<span class="badge bg-primary me-2">
Windows
</span>


<span class="badge bg-success me-2">
Single Player
</span>


<span class="badge bg-danger">
Open World
</span>


</div>



<div class="mt-5">


<a href="#compatibility"
class="btn btn-warning btn-lg">


<i class="bi bi-pc-display me-2"></i>

Can My PC Run It?


</a>


</div>



</div>


</div>


</div>

</section>




{{-- Requirements --}}
<section class="py-5">


<div class="container">


<div class="row g-4">



{{-- Minimum --}}

<div class="col-lg-6">


<div class="card border-0 shadow-soft h-100">


<div class="card-header bg-primary text-white">

<h4 class="mb-0">

<i class="bi bi-pc-display me-2"></i>

Minimum Requirements

</h4>

</div>



<div class="card-body">


<div class="requirement-item">

<strong>
Operating System
</strong>

<span>
Windows 11
</span>

</div>



<div class="requirement-item">

<strong>
Processor
</strong>

<span>
Intel Core i7-10700
</span>

</div>



<div class="requirement-item">

<strong>
Graphics Card
</strong>

<span>
RTX 3060 12GB
</span>

</div>



<div class="requirement-item">

<strong>
Memory
</strong>

<span>
16GB RAM
</span>

</div>



<div class="requirement-item">

<strong>
Storage
</strong>

<span>
150GB SSD
</span>

</div>


</div>


</div>


</div>




{{-- Recommended --}}

<div class="col-lg-6">


<div class="card border-0 shadow-soft h-100">


<div class="card-header bg-success text-white">

<h4 class="mb-0">

<i class="bi bi-speedometer2 me-2"></i>

Recommended Requirements

</h4>

</div>



<div class="card-body">


<div class="requirement-item">

<strong>
Operating System
</strong>

<span>
Windows 11
</span>

</div>



<div class="requirement-item">

<strong>
Processor
</strong>

<span>
Ryzen 7 7800X3D
</span>

</div>



<div class="requirement-item">

<strong>
Graphics Card
</strong>

<span>
RTX 4070 SUPER
</span>

</div>



<div class="requirement-item">

<strong>
Memory
</strong>

<span>
32GB RAM
</span>

</div>



<div class="requirement-item">

<strong>
Storage
</strong>

<span>
150GB SSD
</span>

</div>



</div>


</div>


</div>



</div>


</div>


</section>





{{-- Compatibility Checker --}}

<section class="py-5 bg-light"
id="compatibility">


<div class="container">


<div class="text-center mb-5">


<span class="badge bg-warning text-dark">
Compatibility
</span>


<h2 class="fw-bold mt-3">

Can Your PC Run This Game?

</h2>


<p class="text-muted">

Compare your hardware against this game's requirements.

</p>


</div>




<div class="row justify-content-center">


<div class="col-lg-8">


<div class="card border-0 shadow-soft">


<div class="card-body p-5 text-center">



<h4 class="fw-bold mb-4">

Enter your PC specifications

</h4>



<a href="#"
class="btn btn-primary btn-lg px-5">

Start Compatibility Check

</a>


</div>


</div>


</div>


</div>


</div>


</section>





{{-- Reviews --}}

<section class="py-5">


<div class="container">


<h2 class="fw-bold mb-4">

User Reviews

</h2>



<div class="row g-4">



@for($i=1;$i<=3;$i++)


<div class="col-lg-4">


<div class="card border-0 shadow-soft h-100">


<div class="card-body">


<div class="text-warning mb-3">

★★★★★

</div>



<p class="text-muted">

Amazing game with incredible graphics
and gameplay experience.

</p>



<strong>
Gamer {{ $i }}
</strong>


</div>


</div>


</div>


@endfor



</div>


</div>


</section>




{{-- Related Games --}}

<section class="py-5 bg-light">


<div class="container">


<h2 class="fw-bold mb-4">

Related Games

</h2>



<div class="row g-4">


@for($i=1;$i<=4;$i++)


<div class="col-lg-3 col-md-6">


<div class="card border-0 shadow-soft">


<img src="https://placehold.co/600x800?text=Game"
class="card-img-top">


<div class="card-body">

<h5 class="fw-bold">
Game Name
</h5>


<a href="#"
class="btn btn-outline-primary btn-sm">

View

</a>


</div>


</div>


</div>


@endfor


</div>


</div>


</section>



@endsection