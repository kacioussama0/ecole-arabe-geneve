<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدرسة إقرأ جنيف | @yield('title') </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icons.min.css')}}">
</head>
<body>

<div class="up-bar">
    <div class="alert alert-warning bg-warning rounded-0 alert-dismissible fade show mb-0" role="alert">
       <div class="container text-center">
           <h6 class="mb-0">
               هل تريد مساعدة نحن هنا للإجابة على إستفساراتكم
               <a href="" class="alert-link">تواصلوا معنا</a>
           </h6>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

       </div>
    </div>
</div>


<!--    Start Header    -->



<header>

    <!--        Start Navbar    -->
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#" >
                <i class="fa-solid fa-books fa-2x text-warning"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-duotone fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">المعرض</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">أنشطة المدرسة</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">أسئلة وأجوبة</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">تواصلو معنا</a>
                    </li>

                </ul>

                <!--        Start Social Media    -->

                <div class="social-media d-lg-flex d-none">

                    <a href="#" class="bg-light me-2"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="bg-light me-2"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="bg-light me-2"><i class="fa-brands fa-youtube"></i></a>

                </div>

                <!--        End Social Media    -->

            </div>
        </div>
    </nav>

    <!--        End Navbar    -->


</header>


<!--    End Header    -->


<main>
    @yield('main')
</main>


@include('layout.footer')


<script src="{{asset('assets/css/fontawesome/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
