<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.Name', 'Bu-ProjectITI')}}</title>
    <link rel="icon" href="{{asset('vendors/dist/img/logo-diamon.png')}}">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/dist/css/mainpage.css') }}" rel="stylesheet" />
  </head>
  <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    
                    Bu-ProjectITI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">บริการ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">เกี่ยวกับเรา</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">ทีมผู้พัฒนา</a></li>
                        @if (Route::has('login'))
                                @auth
                                    <li class="nav-item"><a class="nav-link" href="{{ route('checkauth') }}">เข้าสู่ระบบ</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
                                @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">ยินดีต้อนรับสู่ Bu-ProjectITI</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">อ่านรายละเอียด</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">บริการ</h2>
                    <h3 class="section-subheading text-muted">ระบบเรามีการพัฒนาให้กับผู้ใช้งาน 3 ยูซเซอร์ ตามดังนี้</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-user-tie fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">อาจารย์</h4>
                        <p class="text-muted">สามารถรับเรื่องนัดหมายการสอบและตรวจสอบเอกสารของนักศึกษาได้สะดวกมากยิ่งขึ้น</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">อาจารย์ผู้ประสานงาน</h4>
                        <p class="text-muted">สามารถรวบรวมข้อมูลและให้คะแนนกับนักศึกษาได้สะดวกและง่ายมากยิ่งขึ้น</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-user-graduate fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">นักศึกษา</h4>
                        <p class="text-muted">สามารถติดตามผลการสอบและส่งเรื่องกับอาจารย์ที่ปรึกษาได้ทันท่วงที</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">เกี่ยวกับเรา</h2>
                    <h3 class="section-subheading text-muted">ทางผู้พัฒนาได้เล็งเห็นถึงปัญหาจากการติดตามผลงานจากนักศึกษานั้นจะทำได้ลำบากและค่อนข้างเสียเวลาเพราะปัญหาหลายประการเช่น การติดต่อสื่อสาร นักศึกษาไม่มาตามนัดหมาย และความเข้าใจไม่ตรงกัน
                        ซึ่งอาจทำให้เกิดความผิดพลาดของงานนั้นได้ และอาจทำให้เสี่ยงต่อโครงงานที่ทำนั้นล้มเหลว จึงทำให้ระยะเวลาตามกรอบงานนั้นเป็นสิ่งสำคัญ
                    </h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{asset('vendors/dist/img/mainpage/about/3.jpg')}}" alt="..." />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">ติดตามงาน</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">เพื่อสร้างระบบติดตามวิชาโครงงานคณะเทคโนโลยีสารสนเทศและนวัตกรรม</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('vendors/dist/img/mainpage/about/4.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">การติดต่อสื่อสาร</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">เพื่อให้อาจารย์คณะเทคโนโลยีสารสนเทศและนวัตกรรม ติดต่อสื่อสารกับนักศึกษาได้
                                สะดวกมากยิ่งขึ้น</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('vendors/dist/img/mainpage/about/2.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">ลดความเสี่ยงล้มเหลวโครงงาน</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">เพื่ออาจารย์คณะเทคโนโลยีสารสนเทศและนวัตกรรม ติดตามเอกสารวิชาโครงงานของ
                                นักศึกษาได้ง่าย</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ทีมผู้พัฒนา</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('vendors/dist/img/mainpage/team/3.jpg')}}" alt="..." />
                            <h4>นายพศวีร์ คงอ่อน</h4>
                            <p class="text-muted">คณะเทคโนโลยีสารสนเทศและนวัตกรรม สาขาวิชาวิทยาการคอมพิวเตอร์</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/pasaweekong-on"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('vendors/dist/img/mainpage/team/2.jpg')}}" alt="..." />
                            <h4>นายภาณุพงศ์ คงเสน่ห์</h4>
                            <p class="text-muted">คณะเทคโนโลยีสารสนเทศและนวัตกรรม สาขาวิชาวิทยาการคอมพิวเตอร์</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/panupng26"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
                <div class="row align-items-center">
                    <div class="col-lg-4">Copyright &copy 2021 Bangkok University</div>
                    <div class="col-lg-5"></div>
                    <div class="col-lg-3">Developed by Mr.Panupong Khongsanae</div>
                </div>
        </footer>
  <script src="{{ asset('vendors/dist/js/mainpage.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>