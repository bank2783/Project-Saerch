<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name')}}</title>
    {{-- sweet alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"
    integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

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
        @include('Admin.layout.admin_menu')
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
                    <a href="{{route('show_tables')}}" class="btn btn-primary my-5"><i class="bi bi-arrow-left me-1"></i>ย้อนกลับ</a>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">AUTHOR</h1>

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
                                    <h6 class="m-0 font-weight-bold text-primary">Author List</h6>

                                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create
                        </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Author Create</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form action="{{route('authorInsert')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="exampleInputPassword1" class="form-label mt-2 ">Author name</label>
                            <input type="text" name="author_name"  class="form-control" required id="exampleInputPassword1">

                            <label for="exampleInputPassword1" class="form-label mt-2 ">Author Email</label>
                            <input type="email" name="author_email"  class="form-control" required id="exampleInputPassword1">

                            <label for="exampleInputPassword1" class="form-label mt-2 ">Author sid</label>
                            <input type="text" name="author_sid"  class="form-control" required id="exampleInputPassword1">

                            <label for="exampleInputPassword1" class="form-label mt-2 ">Author tel</label>
                            <input type="text" name="author_tel"  class="form-control" required id="exampleInputPassword1">

                            <label for="exampleInputPassword1" class="form-label mt-2 ">Author curricolumn</label>
                            <select class="form-select" name="author_curricolumn_id" aria-label="Default select example">
                                <option selected disabled >สาขา</option>
                                @foreach ($curricolumn as $crl_row )

                                    <option value="{{$crl_row->id}}">{{$crl_row->curricolumn_name}}</option>

                                @endforeach

                              </select>

                            <label for="exampleInputPassword1" class="form-label mt-2 ">author gender</label>
                            <input type="text" name="author_gender"  class="form-control" required id="exampleInputPassword1">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                 </div>
                <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
  </div>

</div>
<!-- Card Body -->
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>

                <th>Author Name</th>
                <th>Author sid</th>
                <th>Author email</th>
                <th>Author tel</th>
                <th width="5%">Author gender</th>
                <th width="20%">Author curricolumn</th>
                <th width="5%">Update</th>
                <th width="5%">Delete</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($author as $row )
            <tr>
                <td>{{$row->author_name}}</td>
                <td>{{$row->author_sid}}</td>
                <td>{{$row->author_email}}</td>
                <td>{{$row->author_tel}}</td>
                <td>{{$row->author_gender}}</td>
                <td>{{$row->curricolumn -> curricolumn_name}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal{{$row->id}}">
                        <i class="bi bi-pencil-square"></i>
                    </button>

                    <!-- update Modal -->
                    <div class="modal fade" id="updateModal{{$row->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel{{$row->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="updateModalLabel{{$row->id}}">Author Update</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>Update</h3>
                                    <form action="{{route('author_update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="author_id" value="{{$row->id}}">

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">Author name</label>
                                        <input type="text" name="author_name" value="{{$row->author_name}}" class="form-control" required id="exampleInputPassword1">

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">Author Email</label>
                                        <input type="email" name="author_email" value="{{$row->author_email}}" class="form-control" required id="exampleInputPassword1">

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">Author sid</label>
                                        <input type="text" name="author_sid" value="{{$row->author_sid}}" class="form-control" required id="exampleInputPassword1">

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">Author tel</label>
                                        <input type="text" name="author_tel" value="{{$row->author_tel}}" class="form-control" required id="exampleInputPassword1">

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">Author curricolumn</label>
                                        <select class="form-select" name="author_curricolumn" aria-label="Default select example">
                                            <option selected value="{{$row->curricolumn->id}}">{{$row->curricolumn->curricolumn_name}}</option>
                                            @foreach ($curricolumn as $crl_row )
                                                @if($crl_row->id != $row->curricolumn -> id)
                                                <option value="{{$crl_row->id}}">{{$crl_row->curricolumn_name}}</option>
                                                @endif
                                            @endforeach

                                          </select>

                                        <label for="exampleInputPassword1" class="form-label mt-2 ">author gender</label>
                                        <input type="text" name="author_gender" value="{{$row->author_gender}}" class="form-control" required id="exampleInputPassword1">

                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Button trigger modal -->
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
                                    <form action="{{route('authorDelete')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="author_id" value="{{$row->id}}">
                                        <button type="submit" class="btn btn-danger">ลบ </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach                                  {{-- <div class="dropdown no-arrow">
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
                                    </div> --}}


                                        </tbody>
                                      </table>
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
            @include('Admin.layout.footer')
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
