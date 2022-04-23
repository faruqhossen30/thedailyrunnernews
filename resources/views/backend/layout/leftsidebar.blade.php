@php
$usr = Auth::guard('admin')->user();
@endphp

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


                {{-- <li>
                    <a href="#">
                        <i class="mdi mdi-youtube-studio"></i>
                        <span> Dashboard </span>
                    </a>
                </li> --}}
                {{-- @if ($usr->can('dashboard.view')) --}}
                <li class="active">
                    <a href="javascript:void(0)" aria-expanded="true"><i class="mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                    <ul class="collapse">
                        <li class="active"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                        Roles & Permissions
                    </span></a>
                    <ul class="collapse ">

                            <li class="#"><a href="{{route('roles.index')}}">All Roles</a></li>


                            <li class="#"><a href="{{route('roles.create')}}">Create Role</a></li>

                    </ul>
                </li>


                {{-- @endif --}}
       {{--
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
                </li> --}}
                @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                <li>
                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                        Roles & Permissions
                    </span></a>
                    <ul class="collapse {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}">
                        @if ($usr->can('role.view'))
                            <li class="{{ Route::is('roles.index')  || Route::is('roles.edit') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">All Roles</a></li>
                        @endif
                        @if ($usr->can('role.create'))
                            <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{ route('roles.create') }}">Create Role</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                {{-- <li>
                    <a href="#sidebarAdmin" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarAdmin">
                        <i class="mdi mdi-account-circle"></i>
                        <span>Admins</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdmin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admins.index')}}">All Admins</a>
                            </li>
                            <li>
                                <a href="{{route('admins.create')}}">Add Admins</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                <li>
                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                        Admins
                    </span></a>
                    <ul class="collapse {{ Route::is('admins.create') || Route::is('admins.index') || Route::is('admins.edit') || Route::is('admins.show') ? 'in' : '' }}">

                        @if ($usr->can('admins.index'))
                            <li class="{{ Route::is('admins.index')  || Route::is('admins.edit') ? 'active' : '' }}"><a href="{{ route('admins.index') }}">All Admins</a></li>
                        @endif

                        @if ($usr->can('admin.create'))
                            <li class="{{ Route::is('admins.create')  ? 'active' : '' }}"><a href="{{ route('admins.create') }}">Create Admin</a></li>
                        @endif
                    </ul>
                </li>
                @endif
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
