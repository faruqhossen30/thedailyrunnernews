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

                <li>
                    <a href="#sidebarRoles" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarRoles">
                        <i class="mdi mdi-lock-minus"></i>
                        <span>Role  & Permissions</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarRoles">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('roles.index')}}">All Roless</a>
                            </li>
                            <li>
                                <a href="{{route('roles.create')}}">Add Roll & Permissions</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarUser" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarUser">
                        <i class="mdi mdi-account-circle"></i>
                        <span>Uers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarUser">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}">All Users</a>
                            </li>
                            <li>
                                <a href="{{route('users.create')}}">Add Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBlog">
                        <i class="mdi mdi-blogger"></i>

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

                <li>
                    <a class="dropdown-item notify-item" href="{{ route('admin.logout.submit') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>
                        <span>{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST" class="d-none">
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
