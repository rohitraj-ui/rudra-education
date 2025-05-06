@extends('layouts.main')
@section('title', 'Study Abroad ')
@section('description', 'Study Abroad ')
@section('content')


    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title"> Study Abroad</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">- Study Abroad</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ introduction Start ================================== -->
    <section class="py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-2">
                <div class="col-12">
                    <div class="lmp_caption">
                        <p> Studying overseas can change a student's life by providing them with the chance to enhance their
                            careers, discover different cultures, and receive top-notch instruction. Studying abroad can
                            lead to international chances, regardless of your course of study—undergraduate, graduate, or
                            professional. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ introduction End ================================== -->


    <!-- ============================ country and it's available university Start ================================== -->
    <section class="py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12">
                    <div class="lmp_caption">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link active country-btns" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">UAE</button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link country-btns" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Australia</button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link country-btns" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">New Zealand</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Emirates Aviation University
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Hult (USA) Dubai Campus
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Emirates Aviation University
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Hult (USA) Dubai Campus
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Emirates Aviation University
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="crs_grid">
                                            <div class="crs_grid_thumb">
                                                <a href="#" class="crs_detail_link">
                                                    <img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_grid_caption">
                                                <div class="crs_title">
                                                    <h4><a href="#" class="crs_title_link">
                                                            Hult (USA) Dubai Campus
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ country and it's available university End ================================== -->


    <!-- ============================ advantages of international study Start ================================== -->
    <section class="py-1">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5">

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3">Advantages of International Study </h2>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Excellent Education: </strong> Gain
                                    entry to internationally recognized universities. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Career Advancement: </strong>
                                    Increased employment opportunities with global exposure. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Cultural Diversity: </strong> Get to
                                    know different languages, cultures, and viewpoints. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Global Networking: </strong>
                                    Establish relationships with experts around the world. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Innovation & Research: </strong>
                                    Availability of top-notch research facilities and cutting-edge technologies. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Greater ROI: </strong> A lot of
                                    foreign degrees provide great employment prospects and a good return on investment.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad1.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ advantages of international study End ================================== -->


    <!-- ============================ qualifications and admissions procedure Start ================================== -->
    <section class="py-2">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5">

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad2.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3">Qualifications and Admissions Procedure </h2>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Academic Requirements: </strong>
                                    Prior qualifications must be at least 60%. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Language Proficiency: </strong> PTE,
                                    TOEFL, and IELTS scores are necessary. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Entrance Exams: </strong> The GRE and
                                    GMAT are required for master's programs in some countries. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Statement of Purpose (SOP): </strong>
                                    Academic and occupational goals must be outlined. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Recommendation Letters (LORs):
                                    </strong> These should be provided by employers or instructors. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Financial Evidence: </strong> Tuition
                                    and living expense bank statements are required. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Visa Application: </strong> Approval
                                    of the student visa is necessary. </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ qualifications and admissions procedure End ================================== -->


    <!-- ============================ employment learning Start ================================== -->
    <section class="py-2">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5">

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3">Possibilities for Employment While Learning </h2>
                        <p>The majority of nations permit full-time employment during breaks and part-time employment while students are enrolled.</p>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>USA: </strong> 20 hours per week (only F1 Visa holders are eligible for on-campus positions). </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>UK: </strong> 20 hours per week (term), full-time on holidays. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Canada: </strong> 20 hours a week, either on or off campus. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Australia: </strong> Every day of the week. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Germany: </strong> 240 half days or 120 full days annually. </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad3.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ employment learning End ================================== -->


    <!-- ============================ financial & scholarship Start ================================== -->
    <section class="py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad4.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3"> Financial Aid and Scholarships </h2>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Merit-Based Scholarships: </strong> Awarded based on academic excellence. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Need-Based Scholarships: </strong> Designed for students requiring financial assistance. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Government-Sponsored Scholarships: </strong> Examples include Chevening (UK) and DAAD (Germany). </h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>University Grants: </strong> Internal scholarships provided by universities. </h6>
                            </div>

                            <div class="mb-2">
                                <h6 class="mb-0 fw-normal text-justify"> <strong>Examples of International Scholarships: </strong> </h6>
                                <ul class="ms-3">
                                    <li>- Fulbright Scholarship (USA)</li>
                                    <li>- Commonwealth Scholarship (UK)</li>
                                    <li>- DAAD Scholarships (Germany) </li>
                                    <li>- Vanier Canada Graduate Scholarship (Canada)</li>
                                    <li>- Australia Awards Scholarships (Australia)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ financial & scholarship End ================================== -->


    <!-- ============================ obstacles Start ================================== -->
    <section class="py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3"> Obstacles and How to Get Past Them </h2>

                        <div class="mb-3 ms-lg-0">
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>High Cost of Education: </strong> Apply for education loans and scholarships. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Cultural Differences: </strong> Participate in language classes and student communities. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Homesickness: </strong> Maintain relationships with relatives and take advantage of new opportunities. </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ms-3 fw-normal text-justify"> <strong>Job Market Competition: </strong> Acquire skill certifications and internships. </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad5.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ obstacles End ================================== -->


    <!-- ============================ why pick us for advice on studing abroad Start ================================== -->
    <section class="py-1">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/study-abroad6.png') }}" alt="study abroad"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ why pick us for advice on studing abroad End ================================== -->

@endsection