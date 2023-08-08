
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            {{-- <i class="ti-bell"></i> --}}
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                    src="{{asset('dashboard_assets')}}/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            {{-- <i class="ti-email"></i> --}}
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                    src="{{asset('dashboard_assets')}}/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <span class="user-avatar">{{ auth()->user()->name }}
                                <i class="ti-angle-down f-s-10"></i>
                            </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                       
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a onclick="event.preventDefault();document.getElementById('profile').submit();" href="{{ route('profile.edit',1)}}">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                            <form action="{{ route('profile.edit') }}" id="profile" method="post">
                                                @csrf
                                                <input type="hidden" name="profile_id" value="{{ auth()->user()->id }}">
                                            </form>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li class="text-danger">
                                            <a onclick="event.preventDefault();document.getElementById('logout').submit();">
                                                <i class="ti-power-off"></i>
                                                <span >Logout</span>
                                            </a>
                                            <form action="{{ route('logout') }}" id="logout" method="post">
                                                @csrf</form>
                                        </li>
                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

