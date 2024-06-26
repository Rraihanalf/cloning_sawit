@extends('layouts.app')

@section('title', 'Sampel Baru')

@push('style')
    
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sampel Baru</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Sampel Baru</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="/sampel/create/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Sampel Baru</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id Lab</label>
                                <input type="text" class="form-control" name="id_lab" value="S-002" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jenis Bibit</label>
                                <input type="text" class="form-control" name="jenis_bibit">
                            </div>
                            <div class="form-group">
                                <label>Asal Bibit</label>
                                <input type="text" class="form-control" name="asal_bibit">
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
