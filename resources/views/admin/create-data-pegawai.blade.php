@extends('layouts.app')

@section('title', 'Pegawai Baru')

@push('style')
    
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pegawai Baru</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Pegawai Baru</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="/pegawai/create/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Pegawai Baru</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_pegawai">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Laki-laki</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="selectgroup-input">
                                        <span class="selectgroup-button">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lab</label>
                                <input type="text" class="form-control" name="id_lab" value="S-001" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email_pegawai">
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" name="no_hp_pegawai">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
