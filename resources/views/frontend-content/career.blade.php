@extends('layouts.main')
@section('title', 'Career ')
@section('description', 'Career ')
@section('content')


    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title"> Current Openings </h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">- Career</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ Join Our Team Start ================================== -->
    <section class="py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_caption">
                        <h2 class="mb-3"> Join Our Team </h2>

                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel praesentium maiores adipisci quia
                            aut odio architecto optio voluptas recusandae commodi iusto unde accusamus, ea pariatur maxime,
                            quod ducimus ullam quasi perferendis sapiente aspernatur amet omnis esse? Doloribus, nemo
                            commodi? Quae. </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="{{ asset('assets/img/vectors/career1.jpg') }}" alt="study abroad" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Join Our Team End ================================== -->


    <!-- ============================ openings Start ================================== -->
    <section class="pt-3 pt-md-5 pb-3 pb-md-5 country-btns">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-12 col-md-11">
                    <div class="lmp_caption">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Frontend Developer
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, qui? Dignissimos sequi
                                        saepe facere quis magni praesentium voluptatem aspernatur ullam!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Backend Developer
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam doloribus
                                        accusantium minus sequi ut, dignissimos quo? Voluptatem animi non iste, ut illum
                                        amet accusamus quisquam quo rerum, tenetur, quas repellat eveniet minus expedita a
                                        mollitia assumenda omnis velit dolorem cupiditate!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        HR Intern
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit totam mollitia culpa
                                        aspernatur odit tenetur consectetur nostrum fugit nemo distinctio?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ openings End ================================== -->


@endsection
