<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('dashboard') }}"><span>MMS</span></a></div>
                

                {{-- <li>
                    <a href="{{ route('dashboard') }}" class="sidebar-sub-toggle">Dashboard</a>
                </li> --}}

                <li class="label">Apps</li>

                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Bazar <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('bazar.index') }}">Bazar List</a></li>
                        <li><a href="chart-flot.html">Person-wise</a></li>
                    </ul>
                </li>

                <li><a href="app-profile.html"><i class="ti-user"></i> Member</a></li>
            </ul>
        </div>
    </div>
</div>