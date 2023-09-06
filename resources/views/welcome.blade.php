<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href='https://fonts.googleapis.com/css?family=Mitr' rel='stylesheet'>
        <link href="{{ asset('CSS\homeCss\style.css') }}" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                /* font-family: 'Nunito', sans-serif; */
                font-family: 'Mitr' , sans-serif;
                background-color: #f6f7fc;
            }
        </style>
    </head>

    <div class="container-fluid p-0 m-0">
        @include('layout.header')
    </div>
    @include('layout.top_name')
    <body class="antialiased">

        <div class="container container-lerg" style="margin-top:50px;">
            <div class="row bg-white rounded-2 shadow-sm">
                <div class="col">
                    <div class="row mt-3">
                        <div class="col-12">
                            <span class="fs-3" style="color:#07098f ">รายการโครงงาน</span>
                        </div>
                        <div class="col-3 d-flex align-items-center fs-4 mt-3">
                            ค้นหา
                        </div>
                        <div class="col mt-3">
                            <select class="form-select border" aria-label="Default select example">
                                <option selected>เลือกสาขา...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col mt-3">
                            <select class="form-select border" aria-label="Default select example">
                                <option selected class="text-secondary">ประเภท...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3 mt-3 d-flex align-items-center justify-content-end">
                            <div class="input-group d-flex">

                                <input type="text" name="keyword_search" class="form-control border" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ค้นหา">
                                <span class="input-group-text" id="basic-addon1" style="background-color: #07098f">
                                    <i class="bi bi-search text-white"></i>
                                </span>
                            </div>
                        </div>


                    </div>

                    <table class="table table-hover mt-5">
                        <thead>
                          <tr>
                            <th scope="col" class="col-5" class="text-secondary">ชื่อโครงงาน</th>
                            <th scope="col" class="text-secondary">ประเภท</th>
                            <th scope="col" class="text-secondary">สาขาวิชา</th>
                            <th scope="col" class="text-secondary">ผู้วิจัย</th>
                            <th scope="col" class="text-secondary">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($project_data as $row)
                         <tr>
                         <th scope="row">
                            {{$row->project_name_th}}
                         </th>
                         <td>{{$row -> Category -> category_name}}</td>
                    <td>{{$row -> Curricolumn -> curricolumn_name}}</td>

                    <td>{{$row -> Author -> author_name }}</td>
                    @php
                    $id_encrypt = Crypt::encrypt($row -> id);
                    @endphp
                    <td>
                        <a href="{{route('view_project',$id_encrypt)}}"" class="btn btn-primary">
                            <i class="bi bi-eye " style="color:#ffffff"></i>
                        </a>

                    </td>
                 </tr>
                        @endforeach


                        </tbody>
                </table>
                <div class="mt-2 my-2">
                    {{ $project_data->links() }}
                </div>
                </div>

            </div>



        </div>

        {{-- <div class="container mt-5 container-mobile">

            <div class="row d-flex justify-content-center">
                <div class="row col-lg-4">
                    <form action="{{route('home_search')}}" class="col-1 input-group" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span class="input-group-text bg-primary border border-primary" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                        </span>
                        <input type="text" name="keyword_search" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ค้นหา">
                        <button  type="submit" class="btn btn-primary input-group-text" style="font-size: 14px;">Search</button></label>
                    </form>
                    @if (isset($keyword))
                    <div class="col-12 mt-4">
                        <span>ผลการค้นหาคำว่า "{{$keyword}}"</span>
                    </div>

                    @endif
                </div>
            </div>
                    <div class="row d-flex justify-content-center mt-5">


                    @foreach ($project_data as $row )

                    @php
                        $id_encrypt = Crypt::encrypt($row -> id);
                    @endphp

                    <a class="nav-link row border col-lg-6 col-12" href="{{route('view_project',$id_encrypt)}}">

                            <div class="col-xl-12 border shadow-sm project">
                                <div class="row mt-1">
                                    <div class="col-9 col-xl-8 fs-4 text-primary project-name-th">
                                        {{$row -> project_name_th}}
                                    </div>
                                    <div class="col-3 col-xl-4 text-primary fw-bold" style="font-size:35px;">
                                        <div class="col d-flex justify-content-end">
                                            {{$row -> curricolumn -> curricolumn_description }}
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 d-flex justify-content-start align-items-center small-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar text-primary " viewBox="0 0 16 16">
                                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                </svg>
                                                <div class="col mx-2 text-primary" style="font-size: 16px">
                                                   {{$row -> created_at -> addYear(543) -> format('Y')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12 d-flex justify-content-start align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile text-primary" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                                  </svg>
                                                <div class="col col-xl-5 text-primary mx-2 " style="font-size: 16px">
                                                    {{$row->Author->author_name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12 d-flex justify-content-start align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square text-primary" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                                  </svg>

                                                  <div class="col col-xl-5 text-primary mx-2" style="font-size: 16px">
                                                    {{$row -> Advisor -> advisor_name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end align-items-center my-2">
                                            <div class="col-2 d-flex justify-content-end align-items-center me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye text-secondary" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                                <div class="col-1 col-lg-1  d-flex justify-content-start text-secondary mx-2" style="font-size: 14px;">
                                                    250
                                                </div>
                                            </div>
                                            <div class="col-2 col-lg-2 d-flex justify-content-end me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download text-secondary" viewBox="0 0 16 16">
                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                  </svg>
                                                  <div class="col-1 d-flex justify-content-start text-secondary mx-2 " style="font-size: 14px;">
                                                    113
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                    </a>



            @endforeach
                    </div>






        </div> --}}



            </div>
        </div>
    </body>
</html>
