<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('dashboard') }}"><span>
                    
                <img src="{{ asset('dashboard_assets') }}/images/mms-logo3.PNG" alt="" class="rounded-circle" style="height:60px" srcset=""></span></a></div>

                <li class="sidebar-sub-toggle">
                    <a href="{{ route('dashboard') }}">
                        <i class="ti-home"></i>
                    Home</a>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-shopping-cart"></i> Cost <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('bazar.index') }}">Shopping List</a></li>
                        <li><a href="{{ route('bazar.person_wise') }}">Person-wise</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-palette"></i> Meal <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('meal.index') }}">Meal List</a></li>
                    </ul>
                </li>

                <li><a href="app-profile.html"><i class="ti-user"></i> Member</a></li>
            </ul>
        </div>
    </div>
</div>
