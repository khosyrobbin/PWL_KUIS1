@extends('layouts.app')
@section('content')
<!-- Page Content -->
    <h1>Daftar Barang</h1><br>

    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

<table border="1">
    <tr>
        <th>Image</th>
        <th>Nama barang</th>
        <th>Jenis barang</th>
        <th>Harga</th>
    </tr>
    @foreach($barang as $b)
    <tr>
        <td>{{ $b->image }}</td>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->jenis_barang }}</td>
        <td>{{ $b->harga }}</td>
    </tr>
    @endforeach
</table>

    <br/>
    Halaman : {{ $barang->currentPage() }} <br/>
    Jumlah Data : {{ $barang->total() }} <br/>
    Data Per Halaman : {{ $barang->perPage() }} <br/>
    <br>


    {{ $barang->links() }}
    @endsection