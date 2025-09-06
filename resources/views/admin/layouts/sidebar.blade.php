        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light" src="{{ asset('backend/assets/images/logo/logo.png') }}" alt=""></a>
              <div class="back-btn"><i data-feather="grid"></i></div>
              <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.users.index') }}"><i data-feather="users"></i><span>All Users</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>Deposits</span></a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.deposits.pending') }}">Pending</a></li>
                        <li><a href="{{ route('admin.deposits.completed') }}">Completed</a></li>
                        <li><a href="{{ route('admin.deposits.rejected') }}">Rejected</a></li>
                      </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.ssns.index') }}"><i data-feather="hash"></i><span>SSN</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.gmails.index') }}"><i data-feather="mail"></i><span>Gmail</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.banks.index') }}"><i data-feather="credit-card"></i><span>Bank</span></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        <!-- Page Sidebar Ends-->

       