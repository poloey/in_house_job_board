<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{auth()->user()->person->avatar_url}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{auth()->user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="{{ Request::is('job-board') || Request::is('job-board/create')  ? 'active' : '' }} treeview">
        <a href="#"><i class="fa fa-briefcase"></i> <span>Job Board</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('job-board')? 'active' : '' }}"><a href="{{url('job-board')}}"><i class="fa fa-briefcase" aria-hidden="true"></i> Job board</a></li>
          <li class="{{ Request::is('job-board/create')? 'active' : '' }}"><a href="{{url('job-board/create')}}"><i class="fa fa-pencil" aria-hidden="true"></i> Post a job</a></li>
          {{-- <li class="{{ Request::is('job-board/manage-candidate')? 'active' : '' }}"><a href="{{url('job-board/manage-candidate')}}"><i class="fa fa-address-book" aria-hidden="true"></i> Manage Candidate</a></li> --}}
        </ul>
      </li>
      <li class="{{ Request::is('student-directory')? 'active' : '' }}"><a href="{{url('student-directory')}}"><i class="fa fa-graduation-cap"></i> <span>Student Directory</span></a></li>
      <li class="{{ Request::is('knowledge-base')? 'active' : '' }}"><a href="{{url('knowledge-base')}}"><i class="fa fa-book"></i> <span>Knowledge Base</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
