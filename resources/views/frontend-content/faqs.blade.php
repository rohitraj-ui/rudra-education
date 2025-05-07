@extends('layouts.main')
@section('title', 'Frequently Asked Questions ')
@section('description', 'Frequently Asked Questions ')
@section('content')


    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title"> Frequently Asked Questions </h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="/"> Home </a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">- Faqs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ faqs Start ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="main_faqs">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border border-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        1. Lorem, ipsum dolor sit amet consectetur adipisicing ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam delectus consequuntur perferendis consequatur voluptatibus esse? Quidem perspiciatis voluptas molestias nam aliquid dolorem autem deserunt accusamus modi illo accusantium sequi expedita rerum minus assumenda consectetur, quaerat pariatur sint magnam ipsa temporibus.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed border border-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        2. Lorem, ipsum dolor sit amet consectetur adipisicing ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt aliquid natus at nisi maxime explicabo obcaecati enim atque ullam voluptatem soluta nulla quod officia, similique ex impedit asperiores magni porro cumque hic illum quidem. Ea neque mollitia pariatur debitis obcaecati.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed border border-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. Lorem, ipsum dolor sit amet consectetur adipisicing ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorum, eveniet repudiandae pariatur ea delectus molestiae praesentium itaque officiis eum harum qui aspernatur consequuntur illum expedita, voluptates hic nulla quos eos laboriosam quam, corrupti alias earum. Doloremque aspernatur dicta delectus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ faqs End ================================== -->


@endsection
