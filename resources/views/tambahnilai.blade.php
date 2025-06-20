@extends('template')

@section('content')
    <h3 class="text-center">Tambah Data Nilai</h3>

    <div class=" mb-3">
        <a href="/eas" class="btn btn-info">Kembali</a>
    </div>

    <form action="/eas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                    <label for="nomorinduksiswa">NRP</label>
                    <input type="text" class="form-control" id="nomorinduksiswa" name="nomorinduksiswa" placeholder="Masukkan NRP" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nilaiangka">Nilai angka</label>
                    <input type="text" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Masukkan Nilai Angka" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="sks">SKS</label>
                    <input type="text" class="form-control text-truncate" id="sks" name="sks" placeholder="Masukkan SKS" maxlength="50" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
@endsection
