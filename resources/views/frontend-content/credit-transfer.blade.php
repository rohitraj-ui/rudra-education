@extends('layouts.main')
@section('title', 'Credit Transfer ')
@section('description', 'Credit Transfer ')
@section('content')


    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">Academic Credit Transfer</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">- Credit Transfer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ academic credit transfer types Start ================================== -->
    <section class="py-5">
        <div class="container">

            <div class="row justify-content-between mb-5">
                <div class="col-12">
                    <div class="lmp_caption">
                        <p> The Academic Credit Transfer process allows students to move their earned course credits from
                            one institution to another, ensuring educational continuity without repeating previously
                            completed coursework. </p>
                        <h2 class="mb-3 fs-4"> Academic Credit Transfer Types </h2>
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
                                        <h4> Lateral Transfer of Credit: </h4>
                                        <p> Switching between colleges and universities at the same academic level. Example:
                                            Moving from University A's second-year B.Tech program to University B's
                                            second-year B.Tech program. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">2</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> Vertical Transfer of Credit: </h4>
                                        <p>Transitioning to a degree program after completing a diploma or certificate.
                                            Example: Moving from a Computer Science diploma to the second year of a B.Tech.
                                        </p>
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
                                        <div class="position-absolute text-white h5 mb-0">3</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> Multidisciplinary Transfer of Credit: </h4>
                                        <p> Transferring credits across different disciplines. Example: Moving from a BBA to
                                            a BA in Economics with credit adjustments. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">4</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> Transfer of International Credit: </h4>
                                        <p> Using credits earned in one country for education in a foreign institution.
                                            Example: Transferring from India to Canada under a credit transfer agreement.
                                        </p>
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
    <!-- ============================ academic credit transfer types End ================================== -->


    <!-- ============================ rgi Start ================================== -->
    <section class="py-3">
        <div class="container">

            <div class="row justify-content-between mb-5">
                <div class="col-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3"> Regulatory Guidelines in India </h2>
                        {{-- <p> </p> --}}
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                    <div class="lmp_caption">
                        <div class="lmp_caption">
                            <ol class="list-unstyled p-0">
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">1</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> UGC Credit Framework under NEP 2020: </h4>
                                        <p> NEP 2020 promotes flexible credit mobility through the Academic Bank of Credits
                                            (ABC), allowing students to store and transfer earned credits. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">2</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> AICTE Guidelines: </h4>
                                        <p>Engineering and technical students can transfer credits between AICTE-approved
                                            institutions. Lateral entry into B.Tech after a diploma is a common practice.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg">
                                        <div class="position-absolute text-white h5 mb-0">3</div>
                                    </div>
                                    <div class="ms-3 ms-md-4">
                                        <h4> IGNOU & Distance Learning: </h4>
                                        <p> Open universities like IGNOU allow credit transfers for distance learners under
                                            UGC-DEB guidelines. </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="lmp_caption">
                        <img src="{{ asset('assets/img/vectors/credit-transfer1.png') }}" alt="credit-transfer image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ rgi End ================================== -->


    <!-- ============================ benefits Start ================================== -->
    <section class="py-3">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-xl-6 col-lg-5 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/Benefits.png') }}" alt="benefits of credit transfer"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3">Benefits of Credit Transfer</h2>

                        <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Saves time and money by avoiding repetition of completed coursework.
                                </h6>
                            </div>
                        </div>
                        <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Provides academic flexibility and opportunities for better
                                    institutions. </h6>
                            </div>
                        </div>
                        <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Supports global education mobility for students transferring
                                    internationally. </h6>
                            </div>
                        </div>
                        <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Encourages lifelong learning under the Academic Bank of Credits
                                    (ABC).</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ benefits End ================================== -->


    <!-- ============================ documents Start ================================== -->
    <section class="py-3">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3">Documents Required for Credit Transfer</h2>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Academic transcripts (showing completed credits). </h6>
                            </div>
                        </div>
                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Syllabus & Course Content (for comparison by the new institution).
                                </h6>
                            </div>
                        </div>
                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> No Objection Certificate (NOC) from the current institution. </h6>
                            </div>
                        </div>
                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Application Form from the new university. </h6>
                            </div>
                        </div>
                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3"> Letter of Acceptance from the receiving institution. </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/credit-transfer2.png') }}"
                            alt="document of credit transfer" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ documents End ================================== -->


    <!-- ============================ credit transfer university carousel Start ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="sec-heading center">
                        <p> Credit transfer provides students with flexibility, mobility, and global education opportunities. With the Academic Bank of Credits (ABC) and NEP 2020, the process is becoming smoother and more efficient.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-sm-12">

                    <div class="reviews-slide space">

                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer3.png') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer4.png') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer5.jpg') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer3.png') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer4.png') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <img src="{{ asset('assets/img/vectors/credit-transfer5.jpg') }}"
                                    alt="benefits of credit transfer" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ credit transfer university carousel End ================================== -->


@endsection
