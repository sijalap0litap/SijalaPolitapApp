<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAHASISWA</title>

    <link href="{{ url('public/logo') }}/politap.png" rel="icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fullcalendar/main.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">

    @stack('style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layout.mahasiswa.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layout.mahasiswa.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="row">
                    <div class="col-md-12">
                        @include('utils.notif')
                    </div>
                </div>
                @yield('mega')
            </div>
        </div>

        <!-- Main Footer -->
        @include('layout.mahasiswa.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="{{ url('public/admin') }}/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ url('public/admin') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('public/admin') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('public/admin') }}/dist/js/pages/dashboard3.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{url('public/admin')}/plugins/moment/moment.min.js"></script>
    <script src="{{url('public/admin')}/plugins/fullcalendar/main.js"></script>
    <script src="{{url('public/admin')}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{url('public/admin')}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{url('public/admin')}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


    @stack('script')

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(function() {
            //Add text editor
            $('#summernote').summernote()
        })
    </script>

</body>

</html>
