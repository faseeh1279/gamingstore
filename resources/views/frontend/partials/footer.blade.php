<footer class="mt-5">

    <div class="container py-5">

        <div class="row g-5">

            {{-- About --}}
            <div class="col-lg-4">

                <h4 class="fw-bold mb-3">
                    <i class="bi bi-controller text-primary me-2"></i>
                    CanYouRunIt
                </h4>

                <p class="text-light-emphasis">
                    Discover whether your PC can run the latest games.
                    Compare your hardware with thousands of games and
                    find the perfect titles for your system.
                </p>

                <div class="mt-4">

                    <a href="#" class="text-white me-3 fs-4">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" class="text-white me-3 fs-4">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#" class="text-white me-3 fs-4">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" class="text-white fs-4">
                        <i class="bi bi-youtube"></i>
                    </a>

                </div>

            </div>

            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6">

                <h5 class="mb-3">
                    Quick Links
                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Games
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Categories
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            News
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Support --}}
            <div class="col-lg-2 col-md-6">

                <h5 class="mb-3">
                    Support
                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Contact
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            FAQ
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Privacy Policy
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="footer-link">
                            Terms
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Newsletter --}}
            <div class="col-lg-4">

                <h5 class="mb-3">
                    Newsletter
                </h5>

                <p class="text-light-emphasis">
                    Subscribe to receive the latest games and hardware updates.
                </p>

                <form>

                    <div class="input-group">

                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email">

                        <button class="btn btn-primary">

                            Subscribe

                        </button>

                    </div>

                </form>

            </div>

        </div>

        <hr class="border-secondary my-5">

        <div class="d-flex justify-content-between flex-wrap">

            <p class="mb-0 text-light-emphasis">

                © {{ date('Y') }} CanYouRunIt.
                All Rights Reserved.

            </p>

            <p class="mb-0 text-light-emphasis">

                Built with ❤️ using Laravel

            </p>

        </div>

    </div>

</footer>