<div class="container-xxl bg-white p-0">


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0">Wildfire Tracker</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a class="nav-link scrollto {{ Request::segment(1) == '' ? 'active' : '' }}" href="/">Home</a>
                        <a class="nav-link scrollto {{ Request::segment(1) == 'pemetaan' ? 'active' : '' }}" href="/pemetaan">Pemantauan Titik Panas</a>
                        <a class="nav-link scrollto {{ Request::segment(1) == 'kebakaran' ? 'active' : '' }}" href="/kebakaran">Data Kebakaran</a>
                        <a class="nav-link scrollto {{ Request::segment(1) == 'berita' ? 'active' : '' }}" href="/berita">Mitigasi</a>
                        <a class="nav-link scrollto {{ Request::segment(1) == 'kontak' ? 'active' : '' }}" href="/kontak">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

