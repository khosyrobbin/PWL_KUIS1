@extends('layouts.app')
@section('content')
<!-- Page Content -->
    <h1>Daftar Supplier</h1><br>

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
        <th>Jenis Kelamin</th>
    </tr>
    @foreach($supplier as $s)
    <tr>
        <td>{{ $s->nama_supplier }}</td>
        <td>{{ $s->alamat_supplier }}</td>
        <td>{{ $s->no_hp_supplier }}</td>
        <td>{{ $s->jenis_kelamin_supplier }}</td>
    </tr>
    @endforeach
</table>

    <br/>
    Halaman : {{ $supplier->currentPage() }} <br/>
    Jumlah Data : {{ $supplier->total() }} <br/>
    Data Per Halaman : {{ $supplier->perPage() }} <br/>
    <br>


    {{ $supplier->links() }}
    @endsection