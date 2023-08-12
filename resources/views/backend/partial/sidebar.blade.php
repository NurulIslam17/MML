<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('dashboard') }}"><span>

                    @php
                        $logo = \App\Models\Logo::first();
                        // dd($logo);
                    @endphp
                            @if ($logo->image)
                                <img src="{{ asset('upload/images/' . $logo->image) }}" class="rounded-circle"
                                style="height:60px;width:60px;" alt="" srcset="">
                            @else
                               
                            <img src="{{ asset('dashboard_assets') }}/images/mms-logo3.PNG" alt=""
                                class="rounded-circle" style="height:60px;width:60px;" srcset="">
                            @endif
                        </span></a></div>

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
                <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Deposite <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('deposite.index') }}">Deposite List</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-receipt"></i> Report <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('report.index') }}">Report List</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-settings"></i> CMS <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('logo.index') }}">Logo</a></li>
                        <li><a href="#">Banner</a></li>
                    </ul>
                </li>

                {{-- <li><a href="app-profile.html"><i class="ti-user"></i> Member</a></li> --}}
            </ul>
        </div>
    </div>
</div>
