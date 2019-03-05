<!--Start menusidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="/dashboard">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          @if( Auth::user()->user_role=='admin' || Auth::user()->user_role=='oparetor' )
          <li><a href="{{route('admin.all.employee')}}"><i class="fa fa-circle-o"></i> Our all staffs </a></li>
          <li><a href="{{route('register')}}"><i class="fa fa-circle-o"></i> Ad New Staff</a></li>
          <li><a href="{{route('admin.monthly.attendance')}}"><i class="fa fa-circle-o"></i> Monthly Attendance Sheet</a></li>
          @endif

          @if( Auth::user()->user_role !='admin')
          <li><a href="{{ route('admin.attendance.details', Auth::user()->id) }}"><i class="fa fa-circle-o"></i> My Attendence Sheet </a></li>

          <li><a href="#"><i class="fa fa-circle-o"></i> My Attendence Sheet </a></li>
                   
          @endif 
        </ul>
      </li>
    </ul>  
   </div>
   <!--End menusidebar-wrapper-->