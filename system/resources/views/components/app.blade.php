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


        {{-- datatable --}}
         <!-- third party css -->
         <link href="{{url('public/template/admin')}}/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
         <link href="{{url('public/template/admin')}}/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
         <link href="{{url('public/template/admin')}}/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
         <link href="{{url('public/template/admin')}}/assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

         @stack('style')


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <x-layout.nav />
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->



    <!-- Left Sidebar Start -->
    <x-layout.sidebar />
    <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
               <div class="content">

                {{$slot}}
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 - 2025 &copy; Simple theme by <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        
        

        <!-- Right bar overlay-->
       

        <!-- Vendor js -->
        <script src="{{url('public/template/admin')}}/assets/js/vendor.min.js"></script>

        <script src="{{url('public/template/admin')}}/assets/libs/morris-js/morris.min.js"></script>
        <script src="{{url('public/template/admin')}}/assets/libs/raphael/raphael.min.js"></script>

        <script src="{{url('public/template/admin')}}/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{url('public/template/admin')}}/assets/js/app.min.js"></script>

        <script src="{{url('public/template/admin')}}/assets/js/vendor.min.js"></script>
<script src="{{url('public/template/admin')}}/assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public/template/admin')}}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Lanjutkan dengan script lainnya -->

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

        <!-- Buttons examples -->
        <script src="{{url('public/template/admin')}}assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/jszip/jszip.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/buttons.print.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{url('public/template/admin')}}assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="{{url('public/template/admin')}}assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="{{url('public/template/admin')}}assets/js/pages/datatables.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        @stack('script')

    </body>


</html>