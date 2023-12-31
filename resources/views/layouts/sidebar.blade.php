
<aside
class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
    aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
    target="_blank">
    <img src="{{ asset('images/logo1.png') }}"  class="navbar-brand-img h-150" alt="main_logo">

    <span class="ms-1 font-weight-bold text-white"></span>
  </a>
</div>


<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
<li class="nav-item">
      <a class="nav-link text-white " href="./dashboard.html">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>

        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('user.index')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">face</i>
        </div>

        <span class="nav-link-text ms-1">User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('flight.index')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-plane"></i>
        </div>

        <span class="nav-link-text ms-1">Flight detail</span>
      </a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white " href="{{route('flight.inquiries')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-plane"></i>
          </div>

          <span class="nav-link-text ms-1">Flight Inquiry</span>
        </a>
      </li>

    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('hotel.index')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-hotel"></i>
        </div>

        <span class="nav-link-text ms-1">Hotel detail</span>
      </a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white " href="{{route('hotel.inquiry')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-hotel"></i>
          </div>

          <span class="nav-link-text ms-1">Hotel Inquiry</span>
        </a>
      </li>

    <li class="nav-item">
        <a class="nav-link text-white " href="{{route('umrah.index')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-kaaba"></i>
          </div>

          <span class="nav-link-text ms-1">Umrah detail</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white " href="{{route('umrah.inquiry')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-kaaba"></i>
          </div>

          <span class="nav-link-text ms-1">Umrah Inquiry</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white " href="{{route('insurance.index')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
     
            <i class="fas fa-hotel"></i>

          </div>


          <span class="nav-link-text ms-1"> Insurance</span>
        </a>
      </li>
     

      <li class="nav-item">
        <a class="nav-link text-white " href="{{route('back-panel.insurance')}}">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-hotel"></i>

          </div>

          <span class="nav-link-text ms-1">Insurance Inquiry</span>
        </a>
      </li>

      <li class="nav-item">
      <a class="nav-link text-white " href="{{route('holiday.index')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-hotel"></i>
        </div>

        <span class="nav-link-text ms-1">Holiday detail</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('holiday.inquiry')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-kaaba"></i>
        </div>

        <span class="nav-link-text ms-1">holiday Inquiry</span>
      </a>
    </li>



    {{-- <li class="nav-item">
      <a class="nav-link text-white " href="{{route('flight')}}">

        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-plane"></i>    </div>

        <span class="nav-link-text ms-1">Flight inquiry</span>
      </a>
    </li> --}}

  </ul>
</div>

<div class="sidenav-footer position-absolute w-100 bottom-0 ">
  <div class="mx-3">
    {{-- <a class="btn btn-outline-primary mt-4 w-100"
      href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree"
      type="button">Documentation</a> --}}
    <a class="btn bg-gradient-primary w-100"
      href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to
      pro</a>
  </div>

</div>

</aside>
