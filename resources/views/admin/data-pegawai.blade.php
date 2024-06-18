@extends('layouts.app')

@section('title', 'Data Pegawai')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
        <div class="wrapper">
            <!-- Navbar -->
            
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            

            <!-- Content Wrapper. Contains page content -->
            <div class="main-content">
                <!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Pegawai</h3>
                                    </div>
                                    <div class="col-12 ml-2">
                                        <a href="/pegawai/create" class="btn btn-primary">Tambah Data</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- <form method="GET" action="/showsiswa">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
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
                                        </form>                                     -->
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID Pegawai</th>
                                                    <th>ID Lab</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Email</th>
                                                    <th>No Hp</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data)
                                                <tr>                                                
                                                    <td>{{ $data->id_pegawai }}</td>
                                                    <td>{{ $data->id_lab }}</td>
                                                    <td>{{ $data->nama_pegawai }}</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                    <td>{{ $data->email_pegawai }}</td>
                                                    <td>{{ $data->no_hp_pegawai }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-icon btn-primary"><i class="far fa-eye"></i></a>
                                                        <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
            

            <!-- Control Sidebar -->
            
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush

