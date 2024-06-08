

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Siakad SMP Negeri 1 Hulu Sungai</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('public/images/logo1.png')}}">
        <!-- App css -->
        <link href="{{url('public/template/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('public/template/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/template/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />


        @push('style')
        <style>
            body {
                not repeat the image */
            }
        </style>
            
        @endpush
    </head>

    <body style="
     background-image: url('{{ url('public/images/bg.jpeg') }}');
                background-size: cover; /* Cover the entire page */
                background-position: center; /* Center the background image */
                background-repeat: no-repeat; /* Do
    
    ">
        <div class="account-pages my-5 pt-5"  >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <a href="#" class="d-flex center " style="justify-content:center;">
                                     <img  src="{{url('public/images/logo1.png')}}" alt="" height="50"> 
                                        <h2 style="margin-left:4px">SIAKAD</h2>
                                    </a>
                                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                                </div>
                                <form action="{{ url('login') }}" method="post" class="p-2">
                                    @csrf
                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                        <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="text-muted float-right">Forgot your password?</a>
                                        <label for="password">Password</label>
                                        <input name="password" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-4 pb-3">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Sign In </button>
                                    </div>
                                </form>
                                <div class="row ">
                                    <div class="col-sm-12 text-center">
                                        {{-- <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                       
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{url('public/template/admin')}}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{url('public/template/admin')}}/assets/js/app.min.js"></script>

    </body>

</html>