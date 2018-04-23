<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
   
        <!-- /.search form -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><strong>Admin Panel</strong></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            			 <li><a href="/event"><i class="fa fa-camera" aria-hidden="true"></i><span>{{ trans('Events') }}</span></a></li>
			 <li><a href="/notice"><i class="fa fa-suitcase" aria-hidden="true"></i><span>{{ trans('Notice') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i><span>{{ trans('Navigation') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/menu"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>{{ trans('Primary Menu') }}</span></a></li>
                    <li><a href="/hmenu"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>{{ trans('Header Menu') }}</span></a></li>
                </ul>
            </li>
			   <li class="treeview">
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i></i><span>{{ trans('People') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="student"><i class="fa fa-user" aria-hidden="true"></i><span>{{ trans('Student List') }}</span></a></li>
                    <li><a href="teacher"><i class="fa fa-user" aria-hidden="true"></i><span>{{ trans('Teacher List') }}</span></a></li>
					<li><a href="staff"><i class="fa fa-user" aria-hidden="true"></i><span>{{ trans('Staff List') }}</span></a></li>
                </ul>
            </li>
			  <li class="treeview">
                <a href="#"><i class="fa fa-database" aria-hidden="true"></i></i><span>{{ trans('Result') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/results"><i class="fa fa-database" aria-hidden="true"></i><span>{{ trans('Result Entry') }}</span></a></li>
                    <li><a href="/rlist"><i class="fa fa-database" aria-hidden="true"></i><span>{{ trans('Result List') }}</span></a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span>{{ trans('Settings') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
<li><a href="/contacts"><i class="fa fa-envelope" aria-hidden="true"></i><span>{{ trans('Contact') }}</span></a></li>
                    <li><a href="/profile"><i class="fa fa-users" aria-hidden="true"></i><span>{{ trans('User Details') }}</span></a></li>
                    <li><a href="/settings"><i class="fa fa-cogs" aria-hidden="true"></i><span>{{ trans('Preference') }}</span></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
