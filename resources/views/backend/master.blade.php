<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('backend.blocks.head')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('backend.blocks.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.blocks.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('backend.blocks.content-header')

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('backend.blocks.footer')

        <!-- Control Sidebar -->
        @include('backend.blocks.aside')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('backend.blocks.foot')
</body>

</html>