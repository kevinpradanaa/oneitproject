
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ URL::to('assets/images/'.Session::get('avatar')) }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>{{ Session::get('name') }}</b></span>
                        <small class="text-end font-w400">{{ Session::get('email') }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('user/profile') }}" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li>
                <a class="ai-icon" href="{{ route('home') }}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">DASHBOARD</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">TRANSACTION</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">PROYEK</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">BIAYA INTERNAL</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">LAPORAN</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('form/input/new') }}">Form Input</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">SET CATEGORY</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('form/input/new') }}">Sub Kategori</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="{{ route('form/input/new') }}">Sub Karyawan</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="{{ route('form/input/new') }}">Jenis Volume</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                   <i class="flaticon-050-info"></i>
                   <span class="nav-text">SETTING</span>
               </a>
               <ul aria-expanded="false">
                <li><a href="{{ route('user/table') }}">User Management</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
