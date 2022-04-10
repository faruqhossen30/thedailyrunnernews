<div class="left-side-menu">

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm-dark.png') }}" alt="" height="24">
                <!-- <span class="logo-lg-text-light">Minton</span> -->
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="20">
                <!-- <span class="logo-lg-text-light">M</span> -->
            </span>
        </a>

        <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/images/logo-light.png')}}" alt="" height="20">
            </span>
        </a>
    </div>

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="#" class="text-reset dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Nik Patel</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-reset">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li>
                    <a href="#">
                        <i class="mdi mdi-youtube-studio"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarDashboards" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="badge bg-success rounded-pill float-end">3</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="index.html">Sales</a>
                            </li>
                            <li>
                                <a href="dashboard-crm.html">CRM</a>
                            </li>
                            <li>
                                <a href="dashboard-analytics.html">Analytics</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li>
                    <a href="#sidebarLayouts" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-cellphone-link"></i>
                        <span> Layouts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="layouts-horizontal.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="layouts-detached.html">Detached</a>
                            </li>
                            <li>
                                <a href="layouts-two-column.html">Two Column Menu</a>
                            </li>
                            <li>
                                <a href="layouts-preloader.html">Preloader</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="apps-chat.html">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Chat </span>
                    </a>
                </li> --}}


                <li>
                    <a href="#sidebarWinners" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarEmail">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Winners & Items </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarWinners">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Winners</a>
                            </li>
                            <li>
                                <a href="#">Pending </a>
                            </li>
                            <li>
                                <a href="#">Processing</a>
                            </li>
                            <li>
                                <a href="#">Shipped</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarCategory" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarCategory">
                        <i class="mdi mdi-layers-outline"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCategory">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSubcategory" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarSubcategory">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span>Sub Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSubcategory">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All sub Category</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarBrand" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBrand">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Brand </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBrand">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Brand</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarDeposit" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarDeposit">
                        <i class="mdi mdi-contacts"></i>
                        <span> Deposit </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDeposit">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Deposit</a>
                            </li>
                            <li>
                                <a href="#">Approved Deposits</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarUser" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarUser">
                        <i class="mdi mdi-contacts"></i>
                        <span> User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarUser">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All User</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarBibs" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBibs">
                        <i class="mdi mdi-contacts"></i>
                        <span> Bibs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBibs">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Bids</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarAdmin" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarAdmin">
                        <i class="mdi mdi-account-circle"></i>
                        <span> Admin List </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdmin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Admin</a>
                            </li>
                            <li>
                                <a href="#">Create Admin</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBlog">
                        <i class="mdi mdi-account-circle"></i>
                        <span>Blog </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('news.create')}}">Create blog</a>
                            </li>
                            <li>
                                <a href="{{route('category.index')}}">Category</a>
                            </li>
                            <li>
                                <a href="{{route('tags.index')}}">Tags</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarProduct" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarProduct">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> All Product</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProduct">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Product</a>
                            </li>
                            <li>
                                <a href="#">Create Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarlocation" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBrand">
                        <i class="mdi mdi-map-marker"></i>
                        <span> Location </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarlocation">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Location</a>
                            </li>
                            <li>
                                <a href="{{route('division.index')}}">Division</a>
                            </li>
                            <li>
                                <a href="{{route('district.index')}}">District</a>
                            </li>
                            <li>
                                <a href="{{route('upazila.index')}}">Upzilla</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('admin.setting.create')}}">
                        <i class="mdi mdi-youtube-studio"></i>
                        <span> Setting </span>
                    </a>
                </li>
                {{-- <li class="menu-title mt-2">Custom</li>

                </li> --}}
                {{-- <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarMultilevel">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="sidebarMultilevel2">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>
                </li> --}}
                <li>
                    <a class="dropdown-item notify-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-logout-box-line"></i>
                        <span>{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="#" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
