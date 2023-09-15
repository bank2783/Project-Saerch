<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name')}}</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @include('Admin.layout.admin_menu')
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Admin.layout.top_bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <a href="{{route('admin.index')}}" class="btn btn-primary my-5"><i class="bi bi-arrow-left me-1"></i>ย้อนกลับ</a>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tables</h1>

                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        {{-- <div class="col-xl-3 col-lg-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
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

                                </div>
                            </div>
                        </div> --}}

                        <a href="{{route('admin_view_project_list')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">จัดการโครงงาน</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-file-text"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('show_advisor_table')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">อาจารย์ที่ปรึกษา</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-person-lines-fill"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('showAuthor')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">ผู้อัพโหลดโครงงาน</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-person-fill-up"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('show_project_author')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">ผู้มีส่วนร่วมในโครงงาน</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-people"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('show_curricolumn')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">สาขาวิชา</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-briefcase-fill"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('show_category')}}" class="col-xl-3 col-lg-3 col-sm-6 nav-link">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">ประเภทโครงงาน</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-bookmark-fill"></i></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-8">
                                            <h5 class="fw-bold">Users Table</h5>
                                        </div>
                                        <div class="col-3">
                                            <h1><i class="bi bi-person-fill-check"></i></h1>
                                        </div>
                                    </div>
                                </div>
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
