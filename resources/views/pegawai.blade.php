@extends('layouts.app')
@section('content')
<!-- Page Content -->
    <h1>Daftar Pegawai</h1><br>

    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jenis kelamin</th>
        <th>Alamat</th>
        <th>No hp</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->nama_pegawai }}</td>
        <td>{{ $p->jenis_kelamin }}</td>
        <td>{{ $p->alamat_pegawai }}</td>
        <td>{{ $p->no_hp_pegawai }}</td>
    </tr>
    @endforeach
</table>

    <br/>
    Halaman : {{ $pegawai->currentPage() }} <br/>
    Jumlah Data : {{ $pegawai->total() }} <br/>
    Data Per Halaman : {{ $pegawai->perPage() }} <br/>
    <br>


    {{ $pegawai->links() }}
    @endsection