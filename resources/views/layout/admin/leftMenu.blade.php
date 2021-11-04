<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{route('admin.dashboard')}}" class="brand-link">
    <img src="{{asset('vendors/dist/img/logo-diamon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
    <span class="brand-text font-weight-light">Bu-ProjectITI</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>ฟังก์ชั่นผู้ดูแลระบบ<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{route('admin.ManageUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการรหัสผ่าน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.ManageTeacher')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลอาจารย์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.ManageStudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลนักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.ManageTypeproject')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลประเภทโครงงาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.ManageTypePeper')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลประเภทเอกสาร</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.ManagePeperproject')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เอกสารวิชาโครงงาน</p>
                </a>
              </li>
            </ul>
        </li>
      </ul>
    </nav>
    </div>
</aside>