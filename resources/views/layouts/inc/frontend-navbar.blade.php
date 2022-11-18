<div class="global-navbar bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-sm-none d-md-inline">
        @php
            $setting = App\Models\Setting::find(1);
        @endphp
           @if ($setting)
           <img src="{{ asset('uploads/settings/'.$setting->logo) }}" width="100" height="100" alt="Logo">

           @endif

            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2">
                  <h5>Advertise Here</h5>

                </div>

            </div>

        </div>

    </div>


</div>

<div class="sticky-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">

            <a href="" class="navbar-brand d-inline d-sm-inline d-md-none">
     <img src="{{ asset('assets/images/logo.jpg') }}" style="width: 140px" alt="Logo">
            </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
        <a class="nav-link" href="{{ url('/')}}">Home</a>
                        </li>

                        @php
      $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();

                        @endphp
       @foreach ($categories as $cateitem)

               <li class="nav-item">
   <a class="nav-link" href="{{ url('tutorial/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
        </li>
        @endforeach
        @if (Auth::check())

        <li>
      <a href="{{ route('logout') }}" class="nav-link btn-danger" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf

            </form>
        </li>
        @endif

    </ul>

      </div>
        </div>
      </nav>


</div>
