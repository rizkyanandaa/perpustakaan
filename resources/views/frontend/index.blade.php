<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Perpustakaan SMK N 2 Guguak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('/adminlte/dist/img/logosmk.png')}}" type="image/ico" />    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('oneschool-master/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('oneschool-master/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('oneschool-master/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('oneschool-master/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('oneschool-master/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('oneschool-master/css/style.css')}}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="">SI Perpustakaan</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Beranda</a></li>
                <li><a href="#gallery-section" class="nav-link">Galeri</a></li>
                <!-- <li><a href="#programs-section" class="nav-link">Programs</a></li> -->
                <!-- <li><a href="#teachers-section" class="nav-link">Teachers</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Hubungi Kami</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url({{asset('oneschool-master/images/perpus1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Sistem Informasi Perpustakaan</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Sistem Informasi Perpustakaan SMK Negeri 2 Guguak.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="{{url('/login')}}" class="btn btn-primary py-3 px-5 btn-pill">Admin Sekarang</a></p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="{{ route('login') }}" method="POST" class="form-box">
                  	@csrf
                    <h3 class="h4 text-black mb-4">Login</h3>
                    <div class="form-group">
                      <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      {!! NoCaptcha::renderJs() !!}
                      {!! NoCaptcha::display() !!}
                      <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Login">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section courses-title" id="gallery-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Galeri</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus2.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus3.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus4.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus5.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus6.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="{{asset('oneschool-master/images/perpus7.jpg')}}" alt="Image" class="img-fluid"></a>
              </figure>
              <!-- <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div> -->
            </div>

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('oneschool-master/images/undraw_youtube_tutorial.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('oneschool-master/images/undraw_teaching.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('oneschool-master/images/undraw_teacher.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div> -->

    <!-- <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="{{asset('oneschool-master/images/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Benjamin Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="{{asset('oneschool-master/images/person_2.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Katleen Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="{{asset('oneschool-master/images/person_3.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sadie White</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url({{asset('oneschool-master/images/hero_1.jpg')}});">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="{{asset('oneschool-master/images/person_4.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <blockquote>
              <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="{{asset('oneschool-master/images/blob_2.svg')}}" alt="Image">
        </div>
        <div class="blob_1">
          <img src="{{asset('oneschool-master/images/blob_1.svg')}}" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="{{asset('oneschool-master/images/person_transparent.png')}}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
 -->
    



    <!-- <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3">Hubungi Kami</h2>
            <p class="mb-5">Kirim pesan untuk kami, agar kami jadi lebih baik.</p>
          
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nama Depan">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nama Belakang">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subjek">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="5" placeholder="Tulis pesanmu disini"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Kirim Pesan">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div> -->
    
     
    <footer class="footer-section bg-white" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Tentang SMK N 2 Guguak</h3>
            <p>SMK Negeri 2 Kecamatan Guguak adalah sekolah menengah kejuruan yang terletak di Ampang Gadang, Kecamatan Guguak, Kabupaten Lima Puluh Kota, Sumatra Barat.<br>
            SMK Negeri 2 Kecamatan Guguak merupakan sekolah bidang Teknik Informatika.</p>
            <br>
            <br>
            <br>
            <br>
            <p class="lead">
              E: <a class="link-inherit" href="#">smkn2guguak@gmail.com</a><br>
              P: 087287487643
            </p>
            <a href="facebook.com" target="_blank" class="icon icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
            <a href="gmail.com" target="_blank" class="icon icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
            <a href="twitter.com" target="_blank" class="icon icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
            <a href="youtube.com" target="_blank" class="icon icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
            <a href="instagram.com" target="_blank" class="icon icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
          </div>

          <div class="image col-xl-8 col-md-6">
            <iframe class="bg-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d856.1799241740626!2d100.53422467252713!3d-0.11722817573923207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e9f21acedf350c8!2sSMK%20NEGERI%202%20KEC.GUGUAK!5e1!3m2!1sid!2sid!4v1580036569947!5m2!1sid!2sid" width="750" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>

          <!-- <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div> -->

        </div>

        <div class="row pt-5 mt-5x text-center">
          <div class="col-md-12">
            <div class="border-top">
              <p>
		        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		        Copyright &copy;<script>document.write(new Date().getFullYear());</script> SMK Negeri 2 Guguak
		        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		      </p>
            </div>
          </div>
      	</div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="{{asset('oneschool-master/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery-ui.js')}}"></script>
  <script src="{{asset('oneschool-master/js/popper.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('oneschool-master/js/aos.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('oneschool-master/js/jquery.sticky.js')}}"></script>

  
  <script src="{{asset('oneschool-master/js/main.js')}}"></script>
    
  </body>
</html>