@extends('user.layout.front')
@section('content')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl bg-success hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Informasi Terkini Pemantauan Titik Panas di Kota Balikpapan</h1>
                            <p class="text-white pb-3 animated zoomIn">Lindungi hutan Borneo dengan Borneo Wildfire Tracker - Aplikasi pemantauan titik panas terkini di Balikpapan</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="user/img/hero (3).png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="user/img/about.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-success px-4 mb-3">About Us</div>
                        <h2 class="mb-4">Kami Memantau, Kami Melindungi</h2>
                        <p class="mb-4">Selamat datang di Wildfire Tracker, sumber terkemuka untuk pemantauan kebakaran hutan di wilayah Balikpapan, Borneo. Kami adalah tim yang berdedikasi untuk melindungi hutan berharga, masyarakat, dan lingkungan kita.</p>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-success">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Pemantauan Wilayah</h6>
                                    <span>Wildfire Tracker memanfaatkan teknologi WebGIS untuk pemantauan wilayah berdasarkan data geografis akurat, mengidentifikasi titik panas dan perubahan aktivitas kebakaran.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-success">
                                    <i class="fa fa-chart-line text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Analisis Data yang Mendalam</h6>
                                    <span>Sistem kami analisis data geografis dengan cermat dan memvisualisasikan hasilnya dalam grafik informatif untuk memahami dan merespons perubahan aktivitas kebakaran.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         <!-- Service Start -->
         <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Our Services</div>
                    <h2 class="mb-5">We Provide Solutions To Save The Forest</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="/pemetaan">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Pemantauan Titik Panas Secara Real-time</h5>
                                <span>WildFire Tracker memberikan pemantauan real-time berdasarkan data geografis akurat untuk mengidentifikasi titik panas dan perubahan aktivitas kebakaran di Balikpapan.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="/kebakaran">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Riwayat Kebakaran</h5>
                                <span>Wildfire Tracker menyajikan riwayat kebakaran wilayah Balikpapan, memberikan wawasan sejarah dan tingkat risiko yang lebih baik.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="/kontak">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Kontak Penting</h5>
                                <span>Kami menyajikan Kontak Penting yang dapat dihubungi </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Mitigasi Kebakaran Hutan</div>
                        <h2 class="mb-4">Hal yang dapat kamu lakukan saat kebakaran terjadi</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Analisa Penyebab</h6>
                                </div>
                                <span>Melakukan identifikasi masalah dan analisa mengenai penyebab kebakaran hutan</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Jangan Panik! Kumpulkan data penting</h6>
                                </div>
                                <span>Mengumpulkan data-data penting mengenai keterangan dari kebakaran hutan atau lahan secara rinci dan jelas</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Lakukan Pengawasan</h6>
                                </div>
                                <span>Pengawasan dan evaluasi kejadian untuk mencari sumber titik api pertama kebakaran hutan</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Usaha Pemadaman</h6>
                                </div>
                                <span>Segera mencari sumber air terdekat dari lokasi kebakaran hutan atau lahan</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Cari Bantuan di Sekitar</h6>
                                </div>
                                <span>Meminta bantuan warga atau masyarakat sekitar untuk ikut serta memadamkan api bersama-sama agar api lebih cepat padam dan tidak menyebar terlalu jauh</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Hubungi Petugas Hutan dan Pemerintah</h6>
                                </div>
                                <span>Meminta bantuan petugas hutan dan pemerintah setempat jika kebakaran hutan atau lahan terjadi dalam skala besar dan perlu peralatan yang lebih canggih, misalnya mobil pemadam kebakaran dan lainnya. Hal ini juga berkaitan dengan bantuan penanggulangan bencana alam.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Newsletter Start -->
        {{-- <div class="container-xxl bg-success my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Berlangganan Informasi Terbaru Terkait Kebakaran Hutan</h3>
                        <small class="text-white">Mari berlangganan untuk mendapatkan update setiap harinya</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-success fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="img/newsletter.png">
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Newsletter End -->


        <!-- Client Start -->
        <div class="container-xxl bg-success my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <a href="#"><img class="img-fluid" src="user/img/logo-1.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="user/img/logo-2.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Client End -->

        <!-- Team Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Our Team</div>
                    <h2 class="mb-5">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5>Asryati</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="user/img/team-1.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <h5>Erick Gusnaldi</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="user/img/team-2.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <h5>Hapiz A. Sidik</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="user/img/team-3.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <h5>Randi Khairul Jamil</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="user/img/team-4.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-success bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

@endsection
