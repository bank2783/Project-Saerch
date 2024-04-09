<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Mitr' rel='stylesheet'>
    <link href="{{ asset('CSS\homeCss\style.css') }}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- JavaScript -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}



    <!-- Styles -->
    

    <style>
        body {
            /* font-family: 'Nunito', sans-serif; */
            font-family: 'Mitr', sans-serif;
            background-color: #f6f7fc;
        }
    </style>
</head>

<div class="container-fluid p-0 m-0">
    @include('layout.header')
</div>
@include('layout.top_name')

<body class="antialiased">

    <div class="container container-lerg my-5" style="margin-top:50px;">
        <div class="row bg-white rounded-2 shadow-sm">
            <div class="col">
                <div class="row mt-3">
                    <div class="col-12">
                        <span class="fs-3" style="color:#07098f ">รายการโครงงาน</span>
                    </div>
                    <div class="col-3 d-flex align-items-center fs-4 mt-3">
                        ค้นหา
                    </div>
                    <form action="{{ route('home_search') }}" class="col-1 input-group" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mt-3">
                            <select name="curricolumn" class="form-select border" aria-label="Default select example">
                                <option disabled selected>เลือกสาขา...</option>
                                @foreach ($curricolumn as $row)
                                    <option value="{{ $row->id }}">{{ $row->curricolumn_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mt-3">
                            <select name="category" class="form-select border" aria-label="Default select example">
                                <option disabled selected class="text-secondary">ประเภท...</option>
                                @foreach ($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3 mt-3 d-flex align-items-center justify-content-end">
                            <div class="input-group d-flex">

                                <input type="text" name="keyword_search" class="form-control border"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ค้นหา">
                                <button class="input-group-text" id="basic-addon1" style="background-color: #07098f">
                                    <i class="bi bi-search text-white"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="col-5 mt-5">
                        <span>ค้นหาจากชื่ออาจารย์ที่ปรึกษา</span>
                    </div>
                    <form action="{{ route('advisor-search') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group col-4">
                            <input type="text" class="form-control" name="advisor_search">
                            <button class="input-group-text" id="basic-addon2" style="background-color: #07098f">
                                <i class="bi bi-search text-white"></i>
                            </button>
                        </div>

                    </form>
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
                                {{ $row->project_name_th }}
                            </th>
                            <td>{{ $row->Category->category_name }}</td>
                            <td>{{ $row->Curricolumn->curricolumn_name }}</td>

                            <td>{{ $row->Author->author_name }}</td>
                            @php
                                $id_encrypt = Crypt::encrypt($row->id);
                            @endphp
                            <td>
                                <a href="{{ route('view_project', $id_encrypt) }}"" class="btn btn-primary">
                                    <i class="bi bi-eye " style="color:#ffffff"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
            {!!$project_data->links() !!}              
        </div>      
    </div>
    </div>   
</body>

<div class="container mt-5 container-mobile">

    <div class="row d-flex justify-content-center">
        <div class="row col-lg-4">
            <form action="{{ route('home_search') }}" class="col-1 input-group" method="POST"
                enctype="multipart/form-data">
                @csrf
                <span class="input-group-text bg-primary border border-primary" id="basic-addon1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
                <input type="text" name="keyword_search" class="form-control border border-primary"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ค้นหา">
                <button type="submit" class="btn btn-primary input-group-text"
                    style="font-size: 14px;">Search</button></label>
            </form>
            @if (isset($keyword))
                <div class="col-12 mt-4">
                    <span>ผลการค้นหาคำว่า "{{ $keyword }}"</span>
                </div>
            @endif
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">


        @foreach ($project_data as $row)
            @php
                $id_encrypt = Crypt::encrypt($row->id);
            @endphp

            <a class="nav-link row  col-lg-6 col-12" href="{{ route('view_project', $id_encrypt) }}">

                <div class="col-xl-12  shadow-sm project">
                    <div class="row mt-1">
                        <div class="col-9 col-xl-8 fs-4 text-primary project-name-th">
                            {{ $row->project_name_th }}
                        </div>
                        <div class="col-3 col-xl-4 text-primary fw-bold" style="font-size:35px;">
                            <div class="col d-flex justify-content-end">
                                {{ $row->curricolumn->curricolumn_description }}
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div
                                    class="col-12 col-lg-6 d-flex justify-content-start align-items-center small-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-calendar text-primary " viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                    <div class="col mx-2 text-primary" style="font-size: 16px">
                                        {{ $row->created_at->addYear(543)->format('Y') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-emoji-smile text-primary"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                    </svg>
                                    <div class="col col-xl-5 text-primary mx-2 " style="font-size: 16px">
                                        {{ $row->Author->author_name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-square text-primary"
                                        viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                                    </svg>

                                    <div class="col col-xl-5 text-primary mx-2" style="font-size: 16px">
                                        {{-- {{ $row->Advisor->advisor_name }} --}}
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </a>
            
        @endforeach
        
    </div>
    {!!$project_data->links() !!} 
</div>




</div>

</div>


</body>

@include('layout.footer')

</html>
