@extends('layouts.index')

@section('title', 'About')

@section('content')
    
    <!-- Breadcrumb Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">

                    <!-- breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <!-- Bread Title Start -->
                        <div class="bread-title">
                            <h1 class="title">Our Works</h1>
                        </div>
                        <!-- Bread Title End -->

                        <!-- Post Meta Start -->
                        <ul class="post-meta">
                            <li><a href="index.html">Home</a></li>
                            <li>Works</li>
                        </ul>
                        <!-- Post Meta End -->
                    </div>
                    <!-- breadcrumb Wrapper End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Section Start Here -->
    <div class="section project-masonry-section">
        <div class="container">
            <div class="row mt-n2">

                <!-- project Menu Start -->
                <div class="messonry-button text-center mb-10">
                    <button data-filter="*" class="is-checked port-filter">All</button>
                    <button data-filter=".cat-1" class="port-filter">Residentials</button>
                    <button data-filter=".cat-2" class="port-filter">Commercials</button>
                    <button data-filter=".cat-3" class="port-filter">Architecture</button>
                    <button data-filter=".cat-4" class="port-filter">Interior</button>
                </div>
                <!-- project Menu End -->

            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1  mesonry-list">

                <div class="resizer col"></div>

                <!-- Single project Start -->
                <div class="col cat-2 cat-3 cat-4 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/2.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Residentials</div>
                            <h4 class="title"><a href="project-details.html">Dustin Villa, Spain</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-2 cat-3 cat-4 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/3.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Commercial</div>
                            <h4 class="title"><a href="project-details.html">ABC Financial Bank</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-1 cat-2 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/4.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Residentials</div>
                            <h4 class="title"><a href="project-details.html">Cubic Villa</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-4 cat-3 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/5.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Interior</div>
                            <h4 class="title"><a href="project-details.html">Minimal Interior - A5, Italy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-2 cat-1 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/6.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Architecture</div>
                            <h4 class="title"><a href="project-details.html">Culture House</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-1 cat-4 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/7.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Interior</div>
                            <h4 class="title"><a href="project-details.html">B6-No.5 OLA Tower</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-1 cat-3 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/8.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Architecture</div>
                            <h4 class="title"><a href="project-details.html">OSHO Retreat Homestay</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-2 cat-4 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/9.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Residentials</div>
                            <h4 class="title"><a href="project-details.html">Davia Villa, Ukraine</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

                <!-- Single project Start -->
                <div class="col cat-1 cat-3 mb-10">
                    <div class="single-project-wrap">
                        <div class="project-thumb position-relative m-0">
                            <a class="image" href="project-details.html">
                                <img src="assets/images/gallery/10.jpg" alt="project Image">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="sub-title">Commercial</div>
                            <h4 class="title"><a href="project-details.html">Liberty University, Poland</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Single project End -->

            </div>

            <div class="row section-padding-bottom">
                <div class="col-12">

                    <!-- Load More Start -->
                    <div class="load-more text-center">
                        <a href="#">...Load more...</a>
                    </div>
                    <!-- Load More End -->

                </div>
            </div>

        </div>
    </div>
    <!-- project Section End Here -->

@endsection