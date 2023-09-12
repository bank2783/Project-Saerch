<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- sweealert --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"
    integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Jquery --}}


    <title> Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Project</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Pending Requests Card Example -->

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">รหัส {{$project_data -> Author -> author_sid}}</h6>
                                    <div class="dropdown no-arrow">

                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form class="row" action="{{route('admin_view_edit-by_id-post',$project_data -> id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 col-6">
                                            <label for="exampleInputEmail1" class="form-label">ชื่อโครงงานภาษาไทย</label>
                                            <input type="text" name="project_name_th" value="{{$project_data -> project_name_th}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ภาษาไทย">
                                            <div id="emailHelp" class="form-text">ใส่ชื่อโครงงานให้ถูกต้องห้ามใส่อักษรพิเศษ</div>
                                          </div>
                                          <div class="mb-3 col-6">
                                            <label for="exampleInputPassword1" class="form-label">ชื่อโครงงานภาษาอังกฤษ</label>
                                            <input type="text" name="project_name_en" value="{{$project_data -> project_name_en}}" class="form-control" id="exampleInputPassword1" placeholder="ภาษาอังกฤษ">
                                            <div id="emailHelp" class="form-text">ใส่ชื่อโครงงานให้ถูกต้องห้ามใส่อักษรพิเศษ</div>
                                          </div>
                                          <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">บทคัดย่อภาษาไทย</label>
                                              <textarea type="text" name="abstract_th"  class="form-control" id="exampleInputPassword1">{{$project_data -> project_abstract_th}}</textarea>

                                          </div>
                                          <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">บทคัดย่อภาษาอังกฤษ</label>
                                              <textarea type="text" name="abstract_en" class="form-control" id="exampleInputPassword1">{{$project_data -> project_abstract_en}}</textarea>

                                          </div>
                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">Keyword TH</label>
                                              <input type="text" name="keyword_th" value="{{$project_data -> project_keyword_th}}" class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">Keyword EN</label>
                                              <input type="text" name="keyword_en" value="{{$project_data -> project_keyword_en}}" class="form-control" id="exampleInputPassword1">
                                          </div>

                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">Project file PDF</label>
                                              <input type="file" name="project_file" class="form-control" id="exampleInputPassword1">
                                          </div>

                                          <div class="mb-3 col-3">
                                              <label for="exampleInputPassword1" class="form-label">ประเภทของโครงงาน</label>
                                              <select class="form-select" name="category" aria-label="Default select example">
                                                  <option value="{{$project_data -> Category -> id}}"  selected>{{$project_data -> Category -> category_name}}</option>
                                                  @foreach ($category as $row )
                                                  @if ($row->id != $project_data -> Category -> id)
                                                  <option value="{{$row -> id}}">{{$row->category_name}}</option>
                                                  @endif

                                                  @endforeach
                                              </select>
                                          </div>
                                          <div class="mb-3 col-3">
                                              <label for="exampleInputPassword1" class="form-label">หลักสูตร</label>
                                              <select class="form-select" name="curricolumn" aria-label="Default select example">
                                                  <option value="{{$project_data -> Curricolumn -> id}}" selected>{{$project_data -> Curricolumn -> curricolumn_name }}</option>
                                                  @foreach ($curri as $row )
                                                  @if ($row ->id != $project_data -> Curricolumn -> id)
                                                  <option value="{{$row -> id}}">{{$row->curricolumn_name}}</option>
                                                  @endif

                                                  @endforeach
                                                </select>
                                          </div>


                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">ชื่ออาจารย์ที่ปรึกษา</label>
                                              <select class="form-select" name="advisor">
                                                <option selected value="{{$project_data -> Advisor -> id}}">{{$project_data -> Advisor -> advisor_name}}</option>
                                                    @foreach ($advisor as $row )
                                                    @if ($row -> id != $project_data -> Advisor -> id)
                                                    <option class="form-select" name="advisor" value="{{$row -> id}}">{{$row -> advisor_name}}</option>
                                                    @endif

                                                    @endforeach
                                              </select>
                                          </div>
                                          
                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">ชื่อผู้อัพโหลด</label>
                                              <input type="text" name="author_name" value="{{$project_data -> Author -> author_name }}" class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3 col-3">
                                              <label for="exampleInputPassword1" class="form-label">รหัสนักศึกษา</label>
                                              <input type="text" name="author_sid" value="{{$project_data -> Author -> author_sid }}" class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3 col-3">
                                              <label for="exampleInputPassword1" class="form-label">เพศ</label>
                                              <select class="form-select"  name="author_gender" aria-label="Default select example">
                                                  <option selected>{{$project_data -> Author -> author_gender }}</option>
                                                  <option value="หญิง">หญิง</option>
                                                  <option value="ชาย">ชาย</option>
                                                  <option value="อื่น ๆ">อื่น ๆ</option>
                                              </select>
                                          </div>

                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">เบอร์โทร</label>
                                              <input type="text" value={{$project_data -> Author -> author_tel }} name="author_tel"  class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3 col-6">
                                              <label for="exampleInputPassword1" class="form-label">Email</label>
                                              <input type="email" value={{$project_data -> Author -> author_email }} name="author_email" class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <input type="hidden" name="project_id" value={{$project_data -> id}}>

                                              <div class="row d-flex justify-content-center">
                                                  <div class="col-3">
                                                      <button type="submit" class="btn btn-primary mt-3" style="width: 100%">บันทึก</button>
                                                  </div>
                                              </div>

                                    </form>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"
                                    integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ=="
                                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
                                    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
                                    crossorigin="anonymous"></script>


                                    @if(session()->has('message_success'))
                                    <script>
                                        swal("{{session()->get('message_success')}}","","success",{
                                            button:"OK",
                                        });

                                    </script>
                                    @elseif (session()->has('message_error'))
                                    <script>
                                        swal("Insert error","{{session()->get('message_error')}}","error",{
                                            button:"OK",
                                        });

                                    </script>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->


                            <!-- Color System -->


                        </div>

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
