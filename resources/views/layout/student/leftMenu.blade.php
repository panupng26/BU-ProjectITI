<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('vendors/dist/img/logo-diamon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bu-ProjectITI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ฟังก์ชั่นนักเรียน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              @if(Auth::user()->student->project_id == NULL)
              <li class="nav-item">
                <a href="{{route('student.RequestTeacher')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>คำร้องโครงงาน</p>
                </a>
              </li>
              @else
              <li class="nav-item">
                <a href="{{route('student.SendPeper')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ส่งเอกสารตรวจสอบ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.RequestTest')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>นัดวันสอบ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.ScorePage')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผลการสอบ</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{route('student.RequestTeacher.check')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตรวจสอบคำร้อง</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.Examproject')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตัวอย่างเอกสารโครงงาน</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>