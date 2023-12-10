@extends('user.layout.front')
@section('content')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl bg-success page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Mitigasi Bencana</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

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

    <!-- Service Start -->
    {{-- <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Newest</div>
                <h2 class="mb-5">Update Terkini Terkait Kebakaran</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-fire"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Kebakaran Lahan / Balikpapan Baru</h5>
                            <span>Telah terjadi kebakaran lahan di daerah Sepinggan Baru Balikpapan Selatan yang
                                menghabiskan 100m2 lahan, saat ini api sedang dipadamkan....</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Stretagic Planning</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Market Analysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-area fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Financial Analaysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-balance-scale fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">legal Advisory</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-house-damage fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Tax & Insurance</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed
                                stet lorem.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection
