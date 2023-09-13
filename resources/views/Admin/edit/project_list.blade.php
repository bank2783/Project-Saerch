<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('CSS/admin/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('CSS/admin/vendor/fontawesome-free/css/all.min.css')}}" type="text/css" rel="stylesheet">
    {{-- <script src="{{asset('CSS/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            @include('Admin.layout.admin_menu')
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form

                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        action="{{route('Project_list_search_post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="sid_search" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm">

                                    </i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                  </svg>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Project Lists</h1>

                        @if(Session::has('sid_search'))
                        <span>SID Search: {{ Session::get('sid_search') }}</span>
                        @endif

                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Projeces list</h6>


                                    <div class="dropdown no-arrow">
                                        {{-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a> --}}
                                        <!-- Button trigger modal -->
                                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#handmake-project">
    เพิ่มโครงงานแบบไม่มีรหัสนักศึกษา
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="handmake-project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มโปรเจค</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('add-project-by-addmin')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">ชื่อโครงงานภาษาไทย</label>
                  <input type="text" name="project_name_th" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">ชื่อโครงงานภาษากฤษ</label>
                    <input type="text" name="project_name_th" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">บทคัดย่อภาษาไทย</label>
                    <textarea name="abstract_th" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">บทคัดย่อภาษาอังกฤษ</label>
                    <textarea name="abstract_en" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">คีย์เวิร์ดภาษาไทย</label>
                    <input type="text" name="keyword_th" class="form-control" aria-describedby="emailHelp">
                    <div class="form-text">ใส่ , เพื่อแยกคำคีย์เวิร์ด</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">คีย์เวิร์ดภาษาอังกฤษ</label>
                    <input type="text" name="keyword_en" class="form-control" aria-describedby="emailHelp">
                    <div class="form-text">ใส่ , เพื่อแยกคำคีย์เวิร์ด</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">ปีการศึกษาที่ทำโครงงาน</label>
                    <input type="text" name="education_year" class="form-control" aria-describedby="emailHelp">
                </div>
                 
                 <div class="mb-3">
                    <select name="advisor" class="form-select" aria-label="Default select example">
                        <option disabled selected>อาจารย์ที่ปรึกษา</option>
                        @foreach ($advisor as $row )
                        <option value="{{$row->id}}">{{$row->advisor_name}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="mb-3">
                    <select name="curricolumn" class="form-select" aria-label="Default select example">
                        <option disabled selected>สาขาวิชา</option>
                        @foreach ($curricolumn as $row )
                        <option value="{{$row->id}}">{{$row->curricolumn_name}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="mb-3">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option disabled selected>ประเภท</option>
                    @foreach ($category as $row )
                    <option value="{{$row->id}}">{{$row->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">ชื่อผู้จัดทำโครงงาน</label>
                <input type="text" name="author_name" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label class="form-label">ไฟล์โครงงาน</label>
                <input type="file" name="project_file" class="form-control" aria-describedby="emailHelp">
            </div>
                
               
                <button type="submit" class="btn btn-primary">อัพโหลด</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>




<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container mt-5">
                <div class="row">
                    <span class=" fs-2">อัพโหลดโครงงาน</span>

                </div>
                <div class="row mt-3 border-bottom border-primary border-1">

                </div>
                <div class="row mt-5">
                    <span class=" fs-3" style="color:#07098f ">ชื่อโครงงาน</span>
                </div>



                <form class="row my-3" action="{{route('store_project')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @csrf
                    <div class=" col-6">
                      <label for="exampleInputEmail1" class="form-label">ชื่อโครงงานภาษาไทย</label>
                      <input type="text" name="project_name_th" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ภาษาไทย">
                      <div id="emailHelp" class="form-text">ใส่ชื่อโครงงานให้ถูกต้องห้ามใส่อักษรพิเศษ</div>
                    </div>
                    <div class="mb-3 col-6">
                      <label for="exampleInputPassword1" class="form-label">ชื่อโครงงานภาษาอังกฤษ</label>
                      <input type="text" name="project_name_en" class="form-control" id="exampleInputPassword1" placeholder="ภาษาอังกฤษ">
                      <div id="emailHelp" class="form-text">ใส่ชื่อโครงงานให้ถูกต้องห้ามใส่อักษรพิเศษ</div>
                    </div>


                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">บทคัดย่อ</span>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">บทคัดย่อภาษาไทย</label>
                        <textarea type="text" name="abstract_th" class="form-control" id="exampleInputPassword1"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">บทคัดย่อภาษาอังกฤษ</label>
                        <textarea type="text" name="abstract_eng" class="form-control" id="exampleInputPassword1"></textarea>
                    </div>

                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">คีย์เวิร์ด</span>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">คีย์เวิร์ดภาษาไทย</label>
                        <input type="text" name="keyword_th" class="form-control" id="exampleInputPassword1">
                        <div id="emailHelp" class="form-text">ใส่ , เพื่อแยกคำคีย์เวิร์ด ตัวอย่างเช่น เว็บไซต์,ฐานข้อมูล,โปรแกรม</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">คีย์เวิร์ดภาษาอังกฤษ</label>
                        <input type="text" name="keyword_eng" class="form-control" id="exampleInputPassword1">
                    </div>


                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">อาจารย์ที่ปรึกษา</span>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="exampleInputPassword1" class="form-label">ชื่ออาจารย์ที่ปรึกษา</label>
                        <select class="form-select" name="advisor_name" aria-label="Default select example">
                            <option selected>ชื่ออาจารย์ที่ปรึกษา...</option>
                            @foreach ($advisor as  $row )
                            <option value="{{$row -> id}}">{{$row -> advisor_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">อีเมลล์อาจารย์ที่ปรึกษา</label>
                        <input type="text" name="advisor_email" class="form-control" id="exampleInputPassword1" >
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">เบอร์โทรอาจารย์ที่ปรึกษา</label>
                        <input type="text" name="advisor_tel" class="form-control" id="exampleInputPassword1" >
                    </div>







                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">รายละเอียดของโครงงาน</span>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">ประเภทของโครงงาน</label>
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>เลือกประเภทของโครงาน</option>
                            @foreach ($category as $row )
                             <option value="{{$row -> id}}">{{$row->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">หลักสูตร</label>
                        <select class="form-select" name="curricolumn" aria-label="Default select example">
                            <option selected>เลือกหลักสูตร</option>
                            @foreach ($curricolumn as $row )
                            <option value="{{$row -> id}}">{{$row->curricolumn_name}}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">Project file PDF</label>
                        <input type="file" name="project_file" class="form-control" id="exampleInputPassword1">
                    </div>


                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">ผู้อัพโหลด</span>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">ชื่อผู้อัพโหลด</label>
                        <input type="text" name="author_name" class="form-control" id="exampleInputPassword1" value="{{Auth::user()->name}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" name="author_sid" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">เบอร์โทร</label>
                        <input type="text" name="author_tel" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="author_email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputPassword1" class="form-label">เพศ</label>
                        <select class="form-select" name="author_gender" aria-label="Default select example">
                            <option selected>เลือกเพศ</option>
                            <option value="1">หญิง</option>
                            <option value="2">ชาย</option>
                            <option value="3">อื่น ๆ</option>
                        </select>
                    </div>

                    <div class="row mt-5">
                        <span class=" fs-3" style="color:#07098f ">เพิ่มชื่อสมาชิก</span>
                    </div>



                    <div class="mb-3 col-12">
                    <label>กดปุ่มเพิ่มเพื่อเพิ่มช่องกรอกข้อมูลสำหรับใส่ชื่อสมาชิกในโครงาน</label>
                    </div>

                    <div class="mb-3 col-6">
                        <span class="btn btn-success bg-success addInput-btn mb-3" onclick="addInput()">เพิ่มช่องกรอกข้อมูล</span>
                    <div id="inputContainer">

                    </div>
                    </div>
                    <style>
                        .input-wrapper {
                            width: fit-content;
                        }
                    </style>



                        <div class="row d-flex justify-content-center">
                            <div class="col-4" >
                                <button id="btn-submit" type="submit" class="btn mt-3 btn-primary" style="width: 100%;">อัพโหลด</button>
                            </div>
                        </div>


                  </form>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SID</th>
                                                <th>Project Name</th>
                                                <th>Category</th>
                                                <th>Curricolumn</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Project_data as $row )
                                            <tr>

                                                <td>{{$row-> Author -> author_sid }}</td>
                                                <td>{{Str::limit($row->  project_name_th,20) }}</td>
                                                <td>{{$row->  Category -> category_name }}</td>
                                                <td>{{$row->  Curricolumn -> curricolumn_name }}</td>
                                                <td>
                                                    @php
                                                    $id_encrypt = Crypt::encrypt($row -> id);
                                                     @endphp
                                                        <a href="{{route('view_project',$id_encrypt)}}" class="btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="{{route('admin_view_edit-by_id',$row->id)}}" class="btn btn-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg>
                                                        </a>

                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$row->id}}">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                    
                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="deleteModal{{$row->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel{{$row->id}}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="deleteModalLabel{{$row->id}}">Delete Notify!</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h3>คุณต้องการลบหรือไม่ ?</h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        
                                                                        <form action="{{route('delete_prject',$row->id)}}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" name="category_id" value="{{$row->id}}">
                                                                            <button type="submit" class="btn btn-danger">ลบ </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    

                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                </div>
                                @if(session()->has('message_success'))
                                <script>
                                    swal("{{session()->get('message_success')}}","","success",{
                                        button:"OK",
                                    });
                      
                                </script>
                                @elseif (session()->has('message_error'))
                                <script>
                                    swal("{{session()->get('message_error')}}","","error",{
                                        button:"OK",
                                    });
                      
                                </script>
                                @endif
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->


                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->


                            <!-- Approach -->


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('CSS/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('CSS/admin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
