<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
  <div class="container">
    <a class="navbar-brand  text-white font-weight-bold" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      PPDB SMAIT Nurul 'Ilmi'
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons me-2 text-md">dashboard</i>
            Home
            <img src="{{ url ("frontend/material_kit/assets/img/down-arrow-white.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            <img src="{{ url("frontend/material_kit/assets/img/down-arrow-dark.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
            <div class="d-none d-lg-block">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                Sekolah
              </h6>
              <a href="" class="dropdown-item border-radius-md">
                <span>Profile</span>
              </a>
              <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                <span>Kontak</span>
              </a>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                Web
              </h6>
              <a href="http://smait.ynikoetaikartanagara.com" class="dropdown-item border-radius-md">
                <span>smait.ynikoetaikartanagara.com</span>
              </a>
            </div>
            <div class="d-lg-none">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                Sekolah
              </h6>
              <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                <span>Profile</span>
              </a>
              <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                <span>Kontak</span>
              </a>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                Web
              </h6>
              <a href="http://smait.ynikoetaikartanagara.com" class="dropdown-item border-radius-md">
                <span>smait.ynikoetaikartanagara.com</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons me-2 text-md">article</i>
            Informasi
            <img src="{{ url ("frontend/material_kit/assets/img/down-arrow-white.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            <img src="{{ url("frontend/material_kit/assets/img/down-arrow-dark.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
              <ul class="list-group">
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">PPDB</h6>
                    <span class="text-sm">Alur pendaftaran, syarat pendaftaran</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Berita Sekolah</h6>
                    <span class="text-sm">Berita terbaru kegiatan dan aktifitas sekolah</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="row d-lg-none">
              <div class="col-md-12 g-0">
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">PPDB</h6>
                  <span class="text-sm">Alur pendaftaran, syarat pendaftaran</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Berita Sekolah</h6>
                  <span class="text-sm">Berita terbaru kegiatan dan aktifitas sekolah</span>
                </a>
              </div>
            </div>
          </ul>
        </li>
        {{-- <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons me-2 text-md">article</i>
            Yayasan
            <img src="{{ url ("frontend/material_kit/assets/img/down-arrow-white.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            <img src="{{ url("frontend/material_kit/assets/img/down-arrow-dark.svg")}}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
          </a>
          <ul class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
            <div class="d-none d-lg-block">
              <ul class="list-group">
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                    <span class="text-sm">All about overview, quick start, license and contents</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                    <span class="text-sm">See our colors, icons and typography</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                    <span class="text-sm">Explore our collection of fully designed components</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                    <span class="text-sm">Check how you can integrate our plugins</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                    <span class="text-sm">For those who want flexibility, use our utility classes</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="row d-lg-none">
              <div class="col-md-12 g-0">
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                  <span class="text-sm">All about overview, quick start, license and contents</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                  <span class="text-sm">See our colors, icons and typography</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                  <span class="text-sm">Explore our collection of fully designed components</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                  <span class="text-sm">Check how you can integrate our plugins</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                  <span class="text-sm">For those who want flexibility, use our utility classes</span>
                </a>
              </div>
            </div>
          </ul>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>