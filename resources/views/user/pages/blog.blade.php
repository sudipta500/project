@extends('user.layout')
@section('contain')
    <div class="content-wrap ">
        <!-- Page title-->
        <div class="position-relative py-210 d-lg-block d-none">
            <div class="background">
                <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy"
                        src="assets/img/blog/blog-hero-1920x1080.jpg" alt=""></div>
                <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
            </div>
            <div class="container">
                <h1 class="text-white mb-0 text-center">Our Blog</h1>
            </div>
        </div>
        <div class="pt-80 pb-130">
            <div class="container">
                <!-- Isotope-->
                <div class="isotope">
                    <ul class="nav justify-content-center isotope-filters mb-60">
                        <li class="nav-item active"><a class="nav-link" href="#" data-filter="all">All</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter="marketing">Marketing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter="company">Company</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter="business">Business</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-filter="architecture">Architecture</a>
                        </li>
                    </ul>
                    <div class="row isotope gy-30">
                            <div class=" isotope-item col-12 col-lg-9 m-auto mt-25" data-filters="architecture">
                                <!-- Blog-->
                                <div
                                    class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden bg-white">
                                    <div class="card-body py-40 px-50 pb-50"><a class="card-title res"
                                            href="single-post.html">In isn't light you'll divide</a>
                                        <p class="card-text">Shall seasons seasons darkness over own there subdue all it.
                                        </p><!-- Button--><a class="btn btn-accent-1 btn-link btn-clean"
                                            href="single-post.html" target="_self">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" isotope-item col-12 col-lg-9 m-auto mt-25" data-filters="architecture">
                                <!-- Blog-->
                                <div
                                    class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden bg-white">
                                    <div class="card-body py-40 px-50 pb-50"><a class="card-title res"
                                            href="single-post.html">In isn't light you'll divide</a>
                                        <p class="card-text">Shall seasons seasons darkness over own there subdue all it.
                                        </p><!-- Button--><a class="btn btn-accent-1 btn-link btn-clean"
                                            href="single-post.html" target="_self">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" isotope-item col-12 col-lg-9 m-auto mt-25" data-filters="architecture">
                                <!-- Blog-->
                                <div
                                    class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden bg-white">
                                    <div class="card-body py-40 px-50 pb-50"><a class="card-title res"
                                            href="single-post.html">In isn't light you'll divide</a>
                                        <p class="card-text">Shall seasons seasons darkness over own there subdue all it.
                                        </p><!-- Button--><a class="btn btn-accent-1 btn-link btn-clean"
                                            href="single-post.html" target="_self">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-80">
                            <!-- Button--><a class="btn btn-light" href="#" target="_self">Load more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Footer-->
@endsection
