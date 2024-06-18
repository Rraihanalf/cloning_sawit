@extends('layouts.app')

@section('title', 'Data Lapangan')

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
                                        <h3 class="card-title">Data Lapangan</h3>
                                    </div>
                                    <div class="col-12 ml-2">
                                        <a href="/lapangan/create" class="btn btn-primary">Tambah Data</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID Lapangan</th>
                                                    <th>Luas (m<sup>2</sup>)</th>
                                                    <th>Lokasi</th>
                                                    <th>Kondisi Tanah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data)
                                                <tr>                                                
                                                    <td>{{ $data->id_lapangan }}</td>
                                                    <td>{{ $data->luas }}</td>
                                                    <td>{{ $data->lokasi }}</td>
                                                    <td>{{ $data->kondisi_tanah }}</td>
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

