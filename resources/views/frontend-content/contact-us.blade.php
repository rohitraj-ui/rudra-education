@extends('layouts.main')
@section('title', 'Contact Us ')
@section('description', 'Contact Us ')
@section('content')


<!-- ============================ Page Title Start================================== -->
<section class="page-title gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcrumbs-wrap">
                    <h1 class="breadcrumb-title">Get In Touch</h1>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">- Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->


<!-- ============================ Contact Detail ================================== -->
<section>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                <div class="form-group">
                    <h4>We'd love to here from you</h4>
                    <span>Send a message and we'll responed as soos as possible </span>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button class="btn theme-bg text-white btn-md" type="button">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="lmp_caption ps-lg-5">
                    <ol class="list-unstyled p-0">
                        <li class="d-flex align-items-start my-3 my-md-4">
                            <div
                                class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg-light">
                                <div class="position-absolute theme-cl h5 mb-0"><i class="fas fa-home"></i></div>
                            </div>
                            <div class="ms-3 ms-md-4">
                                <h4>Reach Us</h4>
                                <p> G4-Ground Floor, A-18, Sector-59, Noida-201301, UP </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start my-3 my-md-4">
                            <div
                                class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg-light">
                                <div class="position-absolute theme-cl h5 mb-0"><i class="fas fa-at"></i></div>
                            </div>
                            <div class="ms-3 ms-md-4">
                                <h4>Drop A Mail</h4>
                                <p>  </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start my-3 my-md-4">
                            <div
                                class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center theme-bg-light">
                                <div class="position-absolute theme-cl h5 mb-0"><i class="fas fa-phone-alt"></i></div>
                            </div>
                            <div class="ms-3 ms-md-4">
                                <h4>Make a Call</h4>
                                <p> +91 80768 40282, +91 9211417489 </p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Contact Detail ================================== -->


<!-- ============================ map Start ================================== -->
<section class="p-0">
    <iframe
        src="https://www.google.com/maps?q=G4-Ground+Floor,+A-18,+Sector-59,+Noida-201301,+UP&output=embed"
        class="full-width" height="450" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</section>
<div class="clearfix"></div>
<!-- ============================ map End ================================== -->

@endsection