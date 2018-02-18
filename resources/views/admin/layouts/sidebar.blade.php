
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                <li @if(Request::route()->getName('admin.home') == 'admin.home') class="active" @endif class="nav-item start ">
                    <a href="{{route('admin.home')}}" class="nav-link nav-toggle">
                        <i class="fa fa-home"></i>
                        <span class="title">{{ trans('translate.home') }}</span>
                        <span class="arrow"></span>
                    </a>
                </li>

                <li @if(Request::route()->getName('admin.settings') == 'admin.settings') class="active" @endif class="nav-item start">
                    <a href="{{ route('admin.settings') }}" class="nav-link nav-toggle">
                        <i class="fa fa-gear"></i>
                        <span class="title">{{ trans('translate.settings') }}</span>
                    </a>
                </li>

                <li @if(Request::route()->getName('about') == 'about') class="active" @endif class="nav-item start">
                    <a href="{{ route('about') }}" class="nav-link nav-toggle">
                        <i class="fa fa-th"></i>
                        <span class="title">{{ trans('translate.about') }}</span>
                    </a>
                </li>

                <li @if(Request::route()->getName('service') == 'service') class="active" @endif class="nav-item start">
                    <a href="{{ route('service') }}" class="nav-link nav-toggle">
                        <i class="fa  fa-puzzle-piece"></i>
                        <span class="title">{{ trans('translate.services') }}</span>
                    </a>
                </li>

                <li @if(Request::route()->getName('yacht') == 'yacht') class="active" @endif class="nav-item start">
                    <a href="{{ route('yacht') }}" class="nav-link nav-toggle">
                        <i class="fa fa-ship"></i>
                        <span class="title">{{ trans('translate.yacht') }}</span>
                    </a>
                </li>

                <li @if(Request::route()->getName('gallery') == 'gallery') class="active" @endif class="nav-item start">
                    <a href="{{ route('gallery') }}" class="nav-link nav-toggle">
                        <i class="fa fa-th-list"></i>
                        <span class="title">{{ trans('translate.gallery') }}</span>
                    </a>
                </li>

                {{--<li @if(Request::route()->getName('faq') == 'faq') class="active" @endif class="nav-item start">--}}
                    {{--<a href="{{ route('faq') }}" class="nav-link nav-toggle">--}}
                        {{--<i class="fa fa-fax"></i>--}}
                        {{--<span class="title">{{ trans('translate.faq') }}</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                <li @if(Request::route()->getName('contact') == 'contact') class="active" @endif class="nav-item start">
                    <a href="{{ route('contact') }}" class="nav-link nav-toggle">
                        <i class="fa fa-contao"></i>
                        <span class="title">{{ trans('translate.contact') }}</span>
                    </a>
                </li>

                <li @if(Request::route()->getName('users') == 'users') class="active" @endif class="nav-item start">
                    <a href="{{ route('users') }}" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">{{ trans('translate.users') }}</span>
                    </a>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->