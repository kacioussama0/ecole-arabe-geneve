@extends('layout.header')
@section('title','من نحن')
@section('main')

    <style>

        .page-heading {
            width: 100%;
            height: 50vh;
            background-image: url('{{asset('assets/imgs/landing-2.jpg')}}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .page-heading::before {
            content: '';
            width: 100%;
            height: 100%;
            background-color: var(--bs-info);
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            opacity: 0.2;
        }

    </style>

    {{--    Start Heading  --}}

    <div class="page-heading ">


        <div class="container d-flex align-items-center  h-100">

            <div class="page-title ">
                <div class="card  p-5  border-0 text-bg-primary">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <h1 class="fw-bolder text-warning">من نحن</h1>
                    </div>
                </div>
            </div>

        </div>



    </div>


    {{--    End Heading  --}}


    {{--    Start  Who We Are  --}}

    <section class="who-we-are py-5  my-3">

        <div class="container">


            <div class="row g-5">

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm p-3 h-100">

                        <div class="card-body d-flex justify-content-between">

                            <i class="fa fa-question fa-3x me-3"></i>

                            <span>
                                <h3>من نحن</h3>
                                <p>مدرسة جنيف العربية، هي مدرسة بسويسرا تابعة للمؤسسة الثقافية الإسلامية بجنيف، انشئت سنة 1978 ومنذ ذلك تعمل بالتعاون مع جميع عناصر العملية .</p>
                            </span>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm p-3 text-bg-warning h-100">

                        <div class="card-body d-flex justify-content-between ">

                            <i class="fa fa-eye fa-3x me-3"></i>

                            <span>
                                <h3>رؤيتنا</h3>
                                <p>مدرسة جنيف العربية مدرسة متميزة في حماية الهوية الإسلامية لأبناء الجالية، وجعلهم نافعـين لذاتهم ومجتمعهم، بما يجعلها نموذجا للمدارس العربية في اوروبا.</p>
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-md-12 col-lg-4">

                    <div class="card border-0 shadow-sm p-3">

                        <div class="card-body d-flex justify-content-between">

                            <i class="fa fa-message-check fa-3x me-3"></i>

                            <span>
                                <h3>رسالتنا</h3>
                                <p>مدرسة بفريق متكامل ومهني في تربية وتكوين أبناء الجالية لإخراج مواطن مسلم صالح ونافع لنفسه واسرته ومجتمعه، بترقية القيم والاخلاق وتعليم اللغة العربية، وتعزيز مكانة العلم والتعلّم، وتطوير أنفسهم طوال حياتهم، من خلال مناهج ووسائل تربوية حديثة، و مناشط متنوعة.</p>
                            </span>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>

    {{--    End Who We Are   --}}

@endsection
