<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('private.dashboard')}}" class="brand-link">
      <img src="{{asset('vendors/dist/img/logo-diamon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bu-ProjectITI</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                อาจารย์
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{route('private.Requeststudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>คำร้องนัดสอบ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('private.Checkpeperstudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตรวจเอกสาร</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('private.Listproject')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายชื่อโครงงานที่ดูแล</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                อาจารย์ผู้ประสานงาน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{route('private.Requestadvisor')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>คำร้องโครงงาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('private.Postgradestudent')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดการคะแนนสอบ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('private.Listprojectall')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>โครงงานในระบบ</p>
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