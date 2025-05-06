@extends('layouts.main')
@section('title', 'About Us ')
@section('description', 'About Us ')
@section('content')


    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">Who We Are?</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">- About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ About Detail ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="lmp_caption pe-lg-3">
                        <span class="theme-cl">About Us</span>
                        <h2 class="mb-3">By Unlocking Opportunities Empower Your Educational Journey with Rudra</h2>
                        <p class="text-justify">You can teach a student a lesson for a day; however, if you teach them to
                            learn by building curiosity, they will continue the process of learning”- Clay P.Bedford. With
                            this thought, we have created Rudra, your online platform to help students and working
                            professionals find relevant courses offered by many universities and educational institutions.
                            Also, to educate everyone and make them aware of skill, vocational, regular, distance learning,
                            and other education.</p>
                        <p class="text-justify">What started as a concept has become a recognized center for high-quality
                            education. The teachers, ambitious students, academic affiliations, infrastructure, and industry
                            connections are some of the factors that contribute to the distinctive value that we want to
                            spread.</p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/about-us2.avif') }}" alt="about us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ About Detail ================================== -->


    <!-- ============================ education program we provide Start ================================== -->
    <section class="gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="sec-heading center">
                        <h2>Educational Programs We <span class="theme-cl">Provided </span></h2>
                        <img src="{{ asset('assets/img/vectors/about-us1.svg') }}" alt="about-us image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ education program we provide End ================================== -->


    <!-- ============================ main features of rudra Start ================================== -->
    <section class="py-5">
        <div class="container">

            <div class="row justify-content-between mb-5">
                <div class="col-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3"> Main Features of Rudra Education </h2>
                        {{-- <p> We connect students and professionals with the right institutions to align with their goals. --}}
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="lmp_caption">
                        <div class="lmp_caption">
                            <ol class="list-unstyled p-0">
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">1</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> Interactive Learning Community </h4>
                                        <p> Rudra offers students a dynamic space to connect and share trusted resources.
                                            This enables engagement with peers, mentors, and educators, fostering a sense of
                                            belonging and teamwork. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">2</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4>Comprehensive Course Details</h4>
                                        <p>Our platform ensures transparency in fees, payment plans, and program details.
                                            This prevents unexpected costs and helps students make informed enrollment
                                            decisions. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">3</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4>Feedback, Reviews & Ratings</h4>
                                        <p>Students can access ratings and evaluations from past learners. These insights
                                            reflect the quality of education and support provided to both students and
                                            professionals. </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="lmp_caption">
                        <div class="lmp_caption">
                            <ol class="list-unstyled p-0">
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">4</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4>Recognition & Accreditation</h4>
                                        <p> We highlight the value of accredited programs to ensure students receive
                                            credible and industry-recognized education. This guarantees a legitimate
                                            academic experience. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">5</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4>Counseling Services</h4>
                                        <p> Rudra offers personalized counseling sessions to guide students in making
                                            informed academic choices. This helps address queries and ensures the best
                                            decision-making. </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ main features of rudra End ================================== -->


    <!-- ============================ why rudra more reliable Start ================================== -->
    <section class="min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-9">
                    <div class="sec-heading center">
                        <h2> Why Rudra More <span class="theme-cl"> Reliable </span></h2>
                        <p>
                            In this evolving educational landscape, we have brimming opportunities to choose and finding the right fit can be daunting. Here, at Rudra, we believe that “your journey for attaining knowledge should be seamless”. This is the reason we are working to make it real. Students may simply explore their selections thanks to an accessible interface that filters courses to match individual needs. Rudra is reliable because of some remarkable traits.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="wrk_grid">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-award"></i>
                        </div>
                        <div class="wrk_caption" style="padding: 0 1rem;">
                            <h4>User-Friendly Platform</h4>
                            <p>Students can easily search and filter courses according to their needs and requirements. Due to intuitive designs, users can conveniently navigate the platform to find relevant courses quickly as per your interest.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="wrk_grid active">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-calendar-week"></i>
                        </div>
                        <div class="wrk_caption" style="padding: 0 1rem;">
                            <h4> Trusted Information </h4>
                            <p>The platform guarantees the authenticity, transparency, and recognition of all the listed universities and courses. By collaborating with well-known institutions, we will make sure to provide accurate and updated information</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="wrk_grid">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-search-location"></i>
                        </div>
                        <div class="wrk_caption" style="padding: 0 1rem;">
                            <h4>Personalized Guidance</h4>
                            <p>We provide customized guidance to assist students in identifying the best program through their counseling services. We have experienced counseling professionals who share their guidance after understanding their student.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ why rudra more reliable End ================================== -->


    <!-- ============================ Students Reviews ================================== -->
	@include('parts.reviews')
    <!-- ============================ Students Reviews End ================================== -->


@endsection
