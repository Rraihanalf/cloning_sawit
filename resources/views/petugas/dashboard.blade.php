@extends('layouts.app')

@section('title', 'Dashboard')

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
                                        <h3 class="card-title">Data Pohon</h3>
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
                                                    <th>ID Pohon</th>
                                                    <th>Tanggal Tanam</th>
                                                    <th>Tinggi Pohon (m)</th>
                                                    <th>Daya Hidup</th>
                                                    <th>Deskripsi</th>
                                                    <th>Tanggal Kematian</th>
                                                    <th>Bukti Kematian</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data)
                                                <tr>                                                
                                                    <td>{{ $data->id_pohon }}</td>
                                                    <td>{{ $data->tgl_tanam }}</td>
                                                    <td>{{ $data->tinggi_pohon }}</td>
                                                    <td>{{ $data->daya_hidup }}</td>
                                                    <td>{{ $data->deskripsi }}</td>
                                                    <td>{{ $data->tgl_kematian }}</td>
                                                    <td>{{ $data->bukti_kematian }}</td>
                                                    <td>
                                                        <a href="/showsiswa/detail/{{ $data->id_pohon }}" class="btn btn-block btn-outline-primary" aria-placeholder="Detail">
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

