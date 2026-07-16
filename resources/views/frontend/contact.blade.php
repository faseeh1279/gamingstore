@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')


{{-- Hero --}}
<section class="py-5 bg-dark text-white">


<div class="container">


<div class="row">


<div class="col-lg-8">


<span class="badge bg-warning text-dark mb-3">

📩 Contact Support

</span>


<h1 class="display-4 fw-bold">

Get In Touch With
<span class="text-warning">
Our Team
</span>

</h1>


<p class="lead text-light opacity-75">

Have questions, suggestions or found incorrect information?
We would love to hear from you.

</p>


</div>


</div>


</div>


</section>





{{-- Contact Section --}}
<section class="py-5">


<div class="container">


<div class="row g-5">



{{-- Contact Form --}}
<div class="col-lg-7">


<div class="card border-0 shadow-soft">


<div class="card-body p-5">


<h3 class="fw-bold mb-4">

Send Us A Message

</h3>



<form method="POST"
action="#">


@csrf



<div class="row g-3">



<div class="col-md-6">


<label class="form-label fw-semibold">

Name

</label>


<input type="text"
class="form-control"
placeholder="Your name">


</div>





<div class="col-md-6">


<label class="form-label fw-semibold">

Email

</label>


<input type="email"
class="form-control"
placeholder="example@email.com">


</div>





<div class="col-12">


<label class="form-label fw-semibold">

Subject

</label>


<input type="text"
class="form-control"
placeholder="How can we help?">


</div>





<div class="col-12">


<label class="form-label fw-semibold">

Message

</label>


<textarea
class="form-control"
rows="6"
placeholder="Write your message..."></textarea>


</div>



<div class="col-12">


<button class="btn btn-primary btn-lg px-5">


<i class="bi bi-send-fill me-2"></i>

Send Message


</button>


</div>



</div>


</form>


</div>


</div>


</div>







{{-- Contact Information --}}
<div class="col-lg-5">


<div class="card border-0 shadow-soft mb-4">


<div class="card-body p-4">


<h4 class="fw-bold mb-4">

Contact Information

</h4>




<div class="d-flex mb-4">


<div class="me-3">


<i class="bi bi-envelope-fill text-primary fs-3"></i>


</div>


<div>


<h6 class="fw-bold mb-1">

Email

</h6>


<p class="text-muted mb-0">

support@canyourunit.com

</p>


</div>


</div>





<div class="d-flex mb-4">


<div class="me-3">


<i class="bi bi-discord text-primary fs-3"></i>


</div>


<div>


<h6 class="fw-bold mb-1">

Community

</h6>


<p class="text-muted mb-0">

Join our Discord community

</p>


</div>


</div>





<div class="d-flex">


<div class="me-3">


<i class="bi bi-clock-fill text-warning fs-3"></i>


</div>


<div>


<h6 class="fw-bold mb-1">

Response Time

</h6>


<p class="text-muted mb-0">

Usually within 24 hours

</p>


</div>


</div>



</div>


</div>






{{-- Social --}}
<div class="card border-0 shadow-soft">


<div class="card-body p-4">


<h4 class="fw-bold mb-3">

Follow Us

</h4>



<div class="d-flex gap-3">


<a href="#"
class="btn btn-outline-primary">


<i class="bi bi-facebook"></i>


</a>



<a href="#"
class="btn btn-outline-dark">


<i class="bi bi-twitter-x"></i>


</a>



<a href="#"
class="btn btn-outline-danger">


<i class="bi bi-youtube"></i>


</a>



<a href="#"
class="btn btn-outline-info">


<i class="bi bi-discord"></i>


</a>



</div>


</div>


</div>



</div>



</div>


</section>







{{-- FAQ Shortcut --}}
<section class="py-5 bg-light">


<div class="container text-center">


<h2 class="fw-bold">

Frequently Asked Questions

</h2>


<p class="text-muted">

Need quick answers? Check our FAQ section.

</p>


<a href="/#faqAccordion"
class="btn btn-outline-primary">


View FAQs

</a>


</div>


</section>





{{-- CTA --}}
<section class="py-5 bg-primary text-white">


<div class="container text-center">


<h2 class="display-5 fw-bold">

Help Us Improve

</h2>


<p class="lead">

Your feedback helps us build a better gaming compatibility platform.

</p>


<a href="/games"
class="btn btn-warning btn-lg px-5">

Explore Games

</a>


</div>


</section>



@endsection