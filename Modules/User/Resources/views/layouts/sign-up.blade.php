<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
    <title>
        {{$page_name??'Newsifier | User - Sign up'}}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{url('assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" >
            Newsifier: User Registration Form
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 justify-content-end" id="navigation">
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="{{route('show.main.page')}}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Back To Home Page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">
                        Register To Newsifier
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Users Registration Form</h5>
                    </div>
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Error!</strong> {{Session::get('error')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($errors->has('name'))

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Error!</strong> {{ $errors->first('name') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($errors->has('password'))

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Error!</strong> {{ $errors->first('password') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($errors->has('phone'))

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Error!</strong> {{ $errors->first('phone') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{route('user.signing-up')}}" role="form text-left">
                            @csrf
                            <label>Full name*</label>
                            <div class="mb-3">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Full name" aria-label="Name" aria-describedby="name-addon">
                            </div>
                            <label>Phone*</label>
                            <div class="mb-3">
                                <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="phone-addon">
                            </div>
                            <label>Password*</label>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <label>Confirmation password*</label>
                            <div class="mb-3">
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Repeat your password" value="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                            </div>
                            <p class="text-sm mt-3 mb-0 text-center">Already have an account? <a href="{{route('user.show.sign-in')}}" class="text-info text-gradient font-weight-bold">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
@include('sweetalert::alert')
</body>

</html>
