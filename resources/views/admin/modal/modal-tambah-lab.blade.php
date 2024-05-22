<form action="showsiswa/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal" id="Pelaksanaan" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Pelaksanaan Kompensasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <select name="semester_mhs" class="custom-select rounded-0 mb-2 @error('semester') is-invalid @enderror" id="exampleSelectRounded0">
                <option value="">Pilih Semester</option>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
            </select>
            @error('semester')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <select name="kelas_mhs" class="custom-select rounded-0 mb-2  @error('kelas') is-invalid @enderror" id="exampleSelectRounded0">
                <option value="">Pilih Kelas</option>
                <option value="A">Kelas A</option>
                <option value="B">Kelas B</option>
                <option value="C">Kelas C</option>
                <option value="D">Kelas D</option>
                <option value="Axioo">Kelas Axioo</option>
            </select>
            @error('kelas')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <select name="ruangan" class="custom-select rounded-0 mb-2  @error('ruangan') is-invalid @enderror" id="exampleSelectRounded0">
                <option value="">Pilih Ruangan</option>
                <option value="LAB RPL">LAB RPL</option>
                <option value="LAB Komputer Dasar">LAB Komputer Dasar</option>
                <option value="LAB Jaringan">LAB Jaringan</option>
                <option value="Prodi">Prodi</option>
            </select>
            @error('ruangan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <select name="prodi" class="custom-select rounded-0 mb-2  @error('prodi') is-invalid @enderror" id="exampleSelectRounded0">
                <option value="">Pilih Prodi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Listrik">Teknik Listrik</option>
                <option value="SIKC">SIKC</option>
            </select>
            @error('prodi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <select name="kegiatan" class="custom-select rounded-0 mb-2  @error('kegiatan') is-invalid @enderror" id="exampleSelectRounded0">
                <option value="">Pilih Kegiatan</option>
                <option value="Bersih-Bersih">Bersih-Bersih</option>
                <option value="Angkat Barang">Angkat Barang</option>
                <option value="Membuat Spanduk">Membuat Spanduk</option>
            </select>
            @error('kegiatan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input type="date" class="form-control" name="tgl_pelaksanaan" placeholder="Tanggal Kompensasi">
        
            <input type="text" class="form-control" name="validasi_pengawas" value="Belum Tuntas" hidden>

            <input type="text" class="form-control" name="validasi_admin" value="Belum Tuntas" hidden>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Create</button>
          </div>
        </div>
      </div>
    </div>
</form>