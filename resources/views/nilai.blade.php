@extends('template')
@section('content')


    <h3>Nilai</h3>

    <br/>

    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilai as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ ($k->nomorinduksiswa) }}</td>
            <td>{{ $k->nilaiangka }}</td>
            <td>{{ ($k->sks) }}</td>
            <td>
                @php
                    if ($k->nilaiangka <= 40) $huruf = 'D';
                    elseif ($k->nilaiangka <= 60) $huruf = 'C';
                    elseif ($k->nilaiangka <= 80) $huruf = 'C';
                    else $huruf = 'A';
                @endphp
                {{ $huruf }}
            </td>
            <td>
                {{$k->nilaiangka * $k->sks}}
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/eas/tambah" class="btn btn-primary mb-3"> + Tambah nilai Baru</a>



@endsection
