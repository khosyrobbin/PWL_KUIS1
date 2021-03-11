@extends('layouts.app')
@section('content')
<!-- Page Content -->
    <h1>Daftar Pelanggan</h1>

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
        <th>Alamat</th>
        <th>No hp</th>
    </tr>
    @foreach($pelanggan as $p)
    <tr>
        <td>{{ $p->nama_pelanggan }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->no_hp }}</td>
    </tr>
    @endforeach
</table>

    <br/>
    Halaman : {{ $pelanggan->currentPage() }} <br/>
    Jumlah Data : {{ $pelanggan->total() }} <br/>
    Data Per Halaman : {{ $pelanggan->perPage() }} <br/>
    <br>


    {{ $pelanggan->links() }}
    @endsection