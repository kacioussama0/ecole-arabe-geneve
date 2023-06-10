@extends('layout.header')
@section('title','الرئيسية')
@section('main')

    <!--    Start Landing Page  -->

    <section class="landing-page py-5 my-3">


        <div class="container">



            <div class="row align-items-center">


                <div class="col-lg-6  p-5 rounded-3 vstack gap-3 justify-content-center align-items-center align-items-lg-start text-center text-xl-start">
                    <h1 class="fw-bolder ">مدرسة
                        <span class="text-warning position-relative display-1 fw-bolder ">
                            <i class="fa-duotone fa-book text-warning position-absolute translate-middle end-50 jump"></i>
                            إقرأ
                        </span>
                        جنيف</h1>
                    <p> مدرسة جنيف العربية مدرسة متميزة في حماية الهوية الإسلامية لأبناء الجالية، وجعلهم نافعـين لذاتهم ومجتمعهم، بما يجعلها نموذجا للمدارس العربية في اوروبا.</p>
                    <a  class="btn btn-warning rounded-pill btn-lg px-5" href="{{url('who-we-are')}}">
                        <i class="fa-duotone fa-school me-2"></i>
                        تعرف علينا
                    </a>
                </div>


                <div class="col-lg-6 landing-imgs">
                    <div class="row g-5 text-center">

                        <div class="col-sm-6 col-md-5">
                            <img src="{{asset('assets/imgs/landing-1.jpg')}}" alt="" class=" rounded-circle rounded-0">
                        </div>

                        <div class="col-sm-6 col-md-5">
                            <img src="{{asset('assets/imgs/landing-2.jpg')}}" alt="" class="rounded-5 rounded-0">
                        </div>

                        <div class="col-sm-6 col-md-5">
                            <img src="{{asset('assets/imgs/landing-3.jpg')}}" alt="" class="rounded-start-pill rounded-0">
                        </div>

                        <div class="col-sm-6 col-md-5">
                            <img src="{{asset('assets/imgs/landing-4.jpg')}}" alt="" class="rounded-5 rounded-0">
                        </div>


                    </div>
                </div>


            </div>



        </div>


    </section>

    <!--    End Landing Page  -->


    <!--    Start Statistics -->

    <section class="statistics text-bg-primary py-5 mb-5">


        <div class="container">

            <div class="row g-5">

                <div class="col-md-3 vstack gap-3 justify-content-center align-items-center">
                    <i class="fa-duotone fa-graduation-cap fa-4x"></i>
                    <h4 class="fw-bold">+<span data-goal="634" class="number">0</span> طالب</h4>
                </div>

                <div class="col-md-3 vstack gap-3 justify-content-center align-items-center">
                    <i class="fa-duotone fa-school fa-4x"></i>
                    <h4 class="fw-bold">+<span data-goal="30" class="number">0</span> فصل</h4>
                </div>


                <div class="col-md-3 vstack gap-3 justify-content-center align-items-center">
                    <i class="fa-duotone fa-screen-users fa-4x"></i>
                    <h4 class="fw-bold text-center">+<span data-goal="10" class="number">0</span> قاعة تدريس</h4>
                </div>

                <div class="col-md-3 vstack gap-3 justify-content-center align-items-center">
                    <i class="fa-duotone fa-chalkboard-teacher fa-4x"></i>
                    <h4 class="fw-bold">+<span data-goal="20" class="number">0</span> مدرس</h4>
                </div>

            </div>

        </div>


    </section>

    <!--    End Statistics -->


    <!--    Start Our Modules -->

    <section class="our-modules">

        <div class="container">

            <h4 class="lh-lg fw-normal text-center mb-5"><span class="heading-shape fw-bolder">المواد التي ندرسها</span> <br>في مختلف الفصول الدراسية</h4>

            <!-- Start Cards  -->

            <div class="row my-5 g-5 justify-content-center align-items-center">


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-language  fa-5x text-primary"></i>
                            <h5>اللغة العربية</h5>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-stairs fa-5x text-primary"></i>
                            <h5>منهاج إقرأ و ارتق</h5>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body  vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-book-quran fa-5x text-primary"></i>
                            <h5>القرآن الكريم</h5>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body  vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-mosque fa-5x text-primary"></i>
                            <h5>التربية الاسلامية</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-music  fa-5x text-primary"></i>
                            <h5>الاناشيد</h5>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-book-open-reader fa-5x text-primary"></i>
                            <h5>القراءة </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body  vstack gap-3  justify-content-center align-items-center">
                            <i class="fa-duotone fa-comments  fa-5x text-primary"></i>
                            <h5>المحادثة والتعبير .</h5>
                        </div>
                    </div>
                </div>

            </div>

            <!-- End Cards  -->

        </div>

    </section>

    <!--    End Our Modules -->



    <!--    Start Our Features -->

    <section class="our-features bg-light-subtle z-n1 position-relative py-5">


        <div class="container">


            <h4 class="lh-lg fw-normal text-center mb-5"><span class="heading-shape fw-bolder">خصائص مدرستنا</span></h4>

            <div class="row align-items-center">

                <div class="col-12 col-lg-8 order-1 order-lg-0">

                    <div class="row">

                        <div class="col-md-6 ">
                            <ul class="list-unstyled vstack gap-2">
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>الاسهام في بناء شخصية المنتسب الى مدرستنا بناءً تربوياً سليماً ومتكاملا.</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>تعميق معاني العقيدة الإسلامية الصحيحة</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>التعريف بشخصية النبي صلى الله عليه وسلم وحبه</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>التعريف ببعض محطات السيرة النبوية المختارة، وكيف يستثمرها في حياته اليومية</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>اكساب ثقافة إسلامية دينية صحيحة -الأنبياء، الرسالات السماوية...</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled vstack gap-2">
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>التعريف باركان الإسلام اجمالا</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>تنمية القدرة على استعمال القواميس والمراجع باللغة العربية</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>تنمية القدرة على الاصغاء والتحدث والقراءة والكتابة بلغة عربية بشكل صحيح، والتفاعل مع ما يقرأ.</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>حفظ بعض السور القرآنية المختارة (حوالي 05 احزاب)</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>حفظ بعض الأحاديث المناسبة (الأربعين النووية)</li>
                                <li><i class="fa-duotone fa-badge-check text-primary me-2"></i>تقدير قيمة اللغة واهميتها في حياة المتعلم وحضارته كفرد مسلم نطق الحروف بشكل صحيح، والتعريف ب الرسم العثماني.</li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4">
                    <img src="{{asset('assets/imgs/features.svg')}}" alt="" class="img-fluid">
                </div>

            </div>


        </div>


    </section>


    <!--    End Our Features -->


    {{--    Start properties --}}

    <section class="properties py-5">

        <div class="container">

            <div class="row">

                <div class="col-xl-6">

                    <h4 class="lh-lg fw-normal mb-5"><span class="heading-shape fw-bolder">أعمار التلاميذ</span></h4>

                    <p>تتراوح أعمار التلاميذ من 4 سنوات وحتى17 سنة </p>
                    <img src="{{asset('assets/imgs/proprties.svg')}}" alt="" class="img-fluid">

                </div>


                <div class="col-xl-6">


                    <h4 class="lh-lg fw-normal mb-5"><span class="heading-shape fw-bolder"> جنسيات التلاميذ</span></h4>
                    <p>وتتضمن التلاميذ بدول إسلامية وغير إسلامية</p>
                    <span class="fi fi-kw"></span>
                    <span class="fi fi-iq"></span>
                    <span class="fi fi-sy"></span>
                    <span class="fi fi-lb"></span>
                    <span class="fi fi-jo"></span>
                    <span class="fi fi-ps"></span>
                    <span class="fi fi-ye"></span>
                    <span class="fi fi-sd"></span>
                    <span class="fi fi-eg"></span>
                    <span class="fi fi-ly"></span>
                    <span class="fi fi-tn"></span>
                    <span class="fi fi-dz"></span>
                    <span class="fi fi-ma"></span>
                    <span class="fi fi-mr"></span>
                    <span class="fi fi-pk"></span>
                    <span class="fi fi-af"></span>
                    <span class="fi fi-tr"></span>
                    <span class="fi fi-al"></span>
                    <span class="fi fi-xk"></span>
                    <span class="fi fi-ng"></span>
                    <span class="fi fi-sn"></span>
                    <span class="fi fi-gn"></span>
                    <span class="fi fi-so"></span>
                    <span class="fi fi-er"></span>
                    <span class="fi fi-bd"></span>
                    <span class="fi fi-ba"></span>
                    <span class="fi fi-in"></span>
                    <span class="fi fi-cn"></span>
                    <span class="fi fi-br"></span>
                    <span class="fi fi-fr"></span>
                    <span class="fi fi-ch"></span>
                    <span class="fi fi-sa"></span>
                    <span class="fi fi-es"></span>
                    <span class="fi fi-it"></span>
                    <span class="fi fi-km"></span>
                    <span class="fi fi-mk"></span>

                </div>

            </div>


        </div>

    </section>

    {{-- End properties--}}



    <!--    Start Posts  -->


    <section class="posts py-5">
        <div class="container">


            <h4 class="lh-lg fw-normal text-center mb-5"><span class="heading-shape fw-bolder">أخر منشوراتنا</span></h4>

            <div class="row g-5">

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-3.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-3.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 position-relative shadow-sm pb-4 rounded-4">
                        <img src="{{asset('assets/imgs/landing-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body vstack gap-2 text-center">
                            <h5 class="card-title text-center">مقال عن مماراسات المدرسة</h5>
                            <p class="card-text text-muted">تعد الرحلات المدرسية طريقة من طرق التعليم التي تعتمد على التشويق والتجربة والبحث والاستكشاف وتمتلك في طياتها نوعاً من أنواع الترفيه ...</p>
                            <span> <i class="fa-duotone fa-calendar text-primary me-2"></i>تاريخ النشر :  07/05/2023  </span>
                            <a href="#" class="btn btn-warning fw-bold stretched-link w-50 position-absolute start-50 bottom-0 mt-5 translate-middle-x">إقرأ المزيد</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>


    <!--    End Posts  -->


    <!--    Start Testimonials  -->

    <section class="testimonials py-5">


        <div class="container">


            <h4 class="lh-lg fw-normal text-center mb-5"><span class="heading-shape fw-bolder">ماذا قالو عنا</span></h4>

            <div id="carouselExampleIndicators" class="carousel slide rounded-4 mx-auto w-50" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner p-5">
                    <div class="carousel-item active text-center">

                        <img src="{{asset('assets/imgs/landing-1.jpg')}}" class="rounded-circle object-fit-cover mb-3" alt="..." style="width: 100px ; height: 100px">
                        <h3 class="mb-3">الأستاذ مهاجري زيان</h3>
                        <p class="text-muted">بارك الله فيكم وفي منهجكم الدراسي </p>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="{{asset('assets/imgs/landing-3.jpg')}}" class="rounded-circle object-fit-cover mb-3" alt="..." style="width: 100px ; height: 100px">
                        <h3 class="mb-3">الأستاذ إسماعيل دباح</h3>
                        <p class="text-muted">بارك الله فيكم وفي منهجكم الدراسي </p>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="{{asset('assets/imgs/landing-2.jpg')}}" class="rounded-circle object-fit-cover mb-3" alt="..." style="width: 100px ; height: 100px">
                        <h3 class="mb-3">الأستاذ مهاجري زيان</h3>
                        <p class="text-muted">بارك الله فيكم وفي منهجكم الدراسي </p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <i class="fa-duotone fa-arrow-right text-primary fa-2x"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <i class="fa-duotone fa-arrow-left text-primary fa-2x"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>


    </section>


    <!--    End Testimonials  -->


    <script>

        let nums = document.querySelectorAll(".statistics .number");
        let statsSection = document.querySelector(".statistics");
        let started = false; // Function Started ? No

        window.onscroll = function () {

            // Stats Increase Number
            if (window.scrollY >= statsSection.offsetTop - 400) {
                if (!started) {
                    nums.forEach((num) => startCount(num));
                }
                started = true;
            }
        };

        function startCount(el) {
            let goal = el.dataset.goal;
            let count = setInterval(() => {
                el.textContent++;
                if (el.textContent == goal) {
                    clearInterval(count);
                }
            }, 2000 / goal);
        }

    </script>

@endsection
