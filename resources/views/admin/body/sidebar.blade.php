<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{ asset('backend/images/logo-dark.png') }}" width="35px" height="35px" alt="">
						  <h3><b>Jayawardena</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="{{ url('/dashBoard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li>


        <li class="header nav-small-cap">User Interface</li>


		<li class="treeview">
          <a href="#">
            <i data-feather="alert-triangle"></i>
			<span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i data-feather="alert-triangle"></i>
              <span>Manage Item</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/item') }}"><i class="ti-more"></i>Item List</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i data-feather="alert-triangle"></i>
              <span>Day Summery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/pendingDsr') }}"><i class="ti-more"></i>Pendin DSR Summery</a></li>
              <li><a href="{{ url('/completeDsr') }}"><i class="ti-more"></i>Complete DSR Summery</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i data-feather="alert-triangle"></i>
              <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/salesSummery') }}"><i class="ti-more"></i>Sales Summery</a></li>
              <li><a href="{{ url('/collection') }}"><i class="ti-more"></i>Collection</a></li>
            </ul>
        </li>

		<li class="header nav-small-cap">EXTRA</li>

        <li>
          <a href="{{ url('/logout') }}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
