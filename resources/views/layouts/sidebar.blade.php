<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret ps ps__rtl ps--active-y bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ asset('admin/dashboard') }}">
            <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="me-1">{{ __('label.dashboard') }}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
         

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">

                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512"
                            height="512">
                            <path
                                d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                            <path
                                d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                            <path
                                d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                            <path
                                d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                        </svg>

                    </div>
                    <span class="nav-link-text me-1">{{ __('label.purchases') }}</span>
                </a>
            </li>
             
            <li class="nav-item">
                <a class="dropdown-toggle nav-link" href="#blog_posts" data-toggle="collapse" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                      <?xml version="1.0" encoding="UTF-8"?>
                      <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                         <path d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z"/><path d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z"/>
                     </svg>


                    </div>
                    <span class="nav-link-text me-1">{{ __('label.reports') }}</span>
                </a>
                <ul class="collapse list-unstyled" id="blog_posts">
                    <li class="active">
                        <a class="dropdown-item nav-link" href="#">
                            <i class="fas fa-angle-right"></i>
                            Report 1
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item nav-link" href="#">
                             <i class="fas fa-angle-right"></i>
                               Report 2
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item nav-link" href="#">
                            <i class="fas fa-angle-right"></i>
                               Report 3
                        </a>
                    </li>
                </ul>
            </li>
             
           


            <li class="nav-item">
                <a class="nav-link " href="{{ asset('admin/users') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512"
                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path
                                d="m7.5 13a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5zm7.5 17v-.5a7.5 7.5 0 0 0 -15 0v.5a1 1 0 0 0 2 0v-.5a5.5 5.5 0 0 1 11 0v.5a1 1 0 0 0 2 0zm9-5a7 7 0 0 0 -11.667-5.217 1 1 0 1 0 1.334 1.49 5 5 0 0 1 8.333 3.727 1 1 0 0 0 2 0zm-6.5-9a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5z" />
                        </svg>
                    </div>
                    <span class="nav-link-text me-1">
                        {{ __('label.users') }}
                    </span>
                </a>
            </li>

           
       
        </ul>
    </div>
</aside>
