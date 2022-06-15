<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    {{-- navbar navbar-main navbar-expand-lg px-0 mx-4 my-3 blur hadow-blur border-radius-xl --}}
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            @include('layouts.breadcrumb')
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
            <ul class="navbar-nav me-auto ms-0 justify-content-end">
                <li class="nav-item align-items-center profile_area">
                    <div class="profile_dropdown_area">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-angle-down" style="font-size:14px"></i>
								<span>
								  
                                    <?= Auth::user()->name ?>
                                  
								</span>
                                <img src="{{asset('uploads/profiles/default.png')}}" alt=""
                                    class="rounded-circle">
                            </button>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">



                                <a class="dropdown-item" href="{{ url('/logout') }}">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <?= trans('label.logout') ?>
                                </a>



                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
