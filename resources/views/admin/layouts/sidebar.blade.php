
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">
        </div>
        <!-- // END drawer-layout__content -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                    <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                        <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                            <span class="avatar mr-3">
                                <img src="{{url('admins/')}}/images/avatar/demi.png" alt="avatar" class="avatar-img rounded-circle">
                            </span>
                            <span class="flex d-flex flex-column">
                                <strong>admins</strong>
                                <small class="text-muted text-uppercase">Account Manager</small>
                            </span>
                        </a>
                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Adrian Demian</strong></div>
                                    <div>@adriandemian</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="index.html">Dashboard</a>
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-heading sidebar-m-t">Menu</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item active open">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                <span class="sidebar-menu-text">Forums</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                                  <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="{{url('admin/forum/categories')}}">
                                        <span class="sidebar-menu-text">Forum Categories</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="{{url('admin/forum')}}">
                                        <span class="sidebar-menu-text">Forum List</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="dashboard-quick-access.html">
                                        <span class="sidebar-menu-text">Approved</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="staff.html">
                                        <span class="sidebar-menu-text">Pending</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="analytics.html">
                                        <span class="sidebar-menu-text">Create New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                <span class="sidebar-menu-text">Users</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="apps_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('admin/users')}}">
                                        <span class="sidebar-menu-text">User List</span>
                                    </a>
                                </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                <span class="sidebar-menu-text">Pages</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="pages_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="companies.html">
                                        <span class="sidebar-menu-text">Home</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="stories.html">
                                        <span class="sidebar-menu-text">About</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="discussions.html">
                                        <span class="sidebar-menu-text">Services</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="payout.html">
                                        <span class="sidebar-menu-text">Contact</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="invoice.html">
                                        <span class="sidebar-menu-text">Footer</span>
                                    </a>
                                </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                <span class="sidebar-menu-text">Contact</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="layouts_menu">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="{{url('admin/messages')}}">
                                        <span class="sidebar-menu-text">Messages</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- // END drawer-layout -->

</div>
