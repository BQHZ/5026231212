@extends('template')
@section('content')

<h3>Edit Pegawai</h3>

<a href="/pegawai" class="btn btn-info"> Kembali</a>

<br/>
<br/>

@foreach($pegawai as $p)
<form action="/pegawai/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="nama">
            Nama
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="nama"
                   name="nama"
                   value="{{ $p->pegawai_nama }}"
                   required="required"
                   placeholder="Masukkan Nama Pegawai">
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="jabatan">
            Jabatan
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="jabatan"
                   name="jabatan"
                   value="{{ $p->pegawai_jabatan }}"
                   required="required"
                   placeholder="Masukkan Jabatan">
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="umur">
            Umur
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="umur"
                   name="umur"
                   value="{{ $p->pegawai_umur }}"
                   required="required"
                   placeholder="Masukkan Umur">
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="alamat">
            Alamat
        </label>
        <div class="col-sm-6">
            <textarea class="form-control"
                      id="alamat"
                      name="alamat"
                      required="required"
                      placeholder="Masukkan Alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endforeach

@endsection
