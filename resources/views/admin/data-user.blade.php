
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Data Users</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Dashboard</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src="{{ asset('/') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"><strong>KLONING SAWIT</strong></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('/') }}dist/img/poliban.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-header">MENU</li>
                            <li class="nav-item">
                                <a href="/" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pegawai" class="nav-link {{ Request::is('admin/pegawai') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Pegawai
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="laboratorium" class="nav-link {{ Request::is('admin/laboratorium') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-flask"></i>
                                    <p>
                                        Data Laboratorium
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="lapangan" class="nav-link {{ Request::is('admin/lapangan') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Data Lapangan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sampel" class="nav-link {{ Request::is('admin/sampel') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Data Sampel
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="user" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user-lock"></i>
                                    <p>
                                        Daftar Users
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout" class="nav-link">
                                    <i class="nav-icon fas">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#d3d4d4}</style><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                                    </i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Data Lapangan Kebun Sawit</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Data Sampel</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Sampel</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form method="GET" action="/showsiswa">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <!-- <input type="text" name="keyword"> -->
                                                    <select name="semester" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                        <option value="">Filter Semester</option>
                                                        <option value="1">Semester 1</option>
                                                        <option value="2">Semester 2</option>
                                                        <option value="3">Semester 3</option>
                                                        <option value="4">Semester 4</option>
                                                        <option value="5">Semester 5</option>
                                                        <option value="6">Semester 6</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <select name="kelas" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                        <option value="">Filter Kelas</option>
                                                        <option value="A">Kelas A</option>
                                                        <option value="B">Kelas B</option>
                                                        <option value="C">Kelas C</option>
                                                        <option value="D">Kelas D</option>
                                                        <option value="Axioo">Kelas Axioo</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <button type="submit" class="btn btn-block bg-gradient-primary">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Pegawai</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Level</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data)
                                                <tr>                                                
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ $data->id_pegawai }}</td>
                                                    <td>{{ $data->username }}</td>
                                                    <td>{{ $data->password }}</td>
                                                    <td>
                                                        @if ($data->level == 1)
                                                            Admin
                                                        @elseif ($data->level == 2)
                                                            Petugas Lab
                                                        @elseif ($data->level == 3)
                                                            Petugas Lap
                                                        @elseif ($data->level == 4)
                                                            Ketua Lab
                                                        @elseif ($data->level == 5)
                                                            Manager
                                                        @else
                                                            Unknown
                                                        @endif
                                                    </td>                                    
                                                    <td>
                                                        <a href="/showsiswa/detail/{{ $data->id }}" class="btn btn-block btn-outline-primary" aria-placeholder="Detail">
                                                            <i class="nav-icon fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('/') }}plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('/') }}plugins/jszip/jszip.min.js"></script>
        <script src="{{ asset('/') }}plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('/') }}plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="{{ asset('/') }}dist/js/demo.js"></script> -->
        <!-- Page specific script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
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
        
    </body>
</html>
