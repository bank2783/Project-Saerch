<nav class="navbar navbar-expand-lg navbar-light bg-light header-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}">CIT PROJECT DATABASE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('show_upload_form')}}">UPLOAD</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>

        @if (Auth::check())
        <ul>
          
        </ul>
        
        <ul class="navbar-nav me-3">
            <li class="nav-item"><a href="{{route('profile')}}" class="nav-link active"><span>MY PROJECT</span></a></li>
            <li class="nav-item"><span class="me-2 nav-link active">{{Auth::user()->name}}</span></li>
            <li class="nav-item"><a href="{{route('signout')}}" class=" btn btn-light border">ออกจากระบบ</a></li>
        </ul>
        
        @else
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{route('signin')}}" class="btn btn-light border">เข้าสู่ระบบ</a></li>
        </ul>
        @endif
        
      </div>
    </div>
  </nav>
  <style>

  </style>
