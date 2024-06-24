<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="{{ asset('CSS\homeCss\style.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Mitr' rel='stylesheet'>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{asset('js/upload/user_check.js')}}"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Mitr' , sans-serif;

            }
        </style>


    </head>
    <div class="container-fluid">
        @include('layout.header')
    </div>

    <body class="antialiased">
        @include('layout.top_name')
        
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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

                <div class="mb-3 col-6 col-xl-3">
                    <label for="exampleInputPassword1" class="form-label">ชื่ออาจารย์ที่ปรึกษา</label>
                    <select id="advisor_select" class="form-select" name="advisor_name" aria-label="Default select example">
                        <option value="0" selected>ชื่ออาจารย์ที่ปรึกษา...</option>
                        @foreach ($Advisor as  $row )
                        <option value="{{$row -> id}}">{{$row -> advisor_name}}</option>
                        @endforeach
                    </select>
                </div>

                



                <div class="row mt-5">
                    <span class=" fs-3" style="color:#07098f ">รายละเอียดของโครงงาน</span>
                </div>

                <div class="mb-3 col-3">
                    <label for="exampleInputPassword1" class="form-label">ประเภทของโครงงาน</label>
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>เลือกประเภทของโครงาน</option>
                        @foreach ($category as $row )
                         <option value="{{$row -> id}}">{{$row->category_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-3">
                    <label for="exampleInputPassword1" class="form-label">หลักสูตร</label>
                    <select class="form-select" name="curricolumn" aria-label="Default select example">
                        <option selected>เลือกหลักสูตร</option>
                        @foreach ($curricolumn as $row )
                        <option value="{{$row -> id}}">{{$row->curricolumn_name}}</option>
                        @endforeach
                      </select>
                </div>

                <div class="mb-3 col-3 col-sm-4">
                    <label for="exampleInputPassword1" class="form-label">Project file PDF</label>
                    <input type="file" name="project_file" class="form-control" id="exampleInputPassword1">
                </div>


                <div class="row mt-5">
                    <span class=" fs-3" style="color:#07098f ">ผู้อัพโหลด</span>
                </div>

                <div class="mb-3 col-6 col-xl-3">
                    <label for="exampleInputPassword1" class="form-label">ชื่อผู้อัพโหลด</label>
                    <input type="text" name="author_name" class="form-control" id="exampleInputPassword1" value="{{Auth::user()->name}}">
                </div>
                <div class="mb-3 col-6 col-xl-3">
                    <label for="exampleInputPassword1" class="form-label">รหัสนักศึกษา</label>
                    <input type="text" name="author_sid" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3 col-6 col-xl-3">
                    <label for="exampleInputPassword1" class="form-label">เบอร์โทร</label>
                    <input type="text" name="author_tel" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-6 col-xl-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="author_email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-6 col-xl-3">
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
                        <div class="col-3" >
                            <button id="btn-submit" type="submit" class="btn mt-3 btn-primary" style="width: 100%;">อัพโหลด</button>
                        </div>
                    </div>


              </form>
                </div>


        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif








                </div> --}}
            </div>
        </div>
    </body>
    @include('layout.footer')
</html>
