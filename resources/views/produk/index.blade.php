@extends('layouts.app')

@section('content')

<h3>Data Product</h3>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Produk</th>
        <th>stok</th>        
    </tr>
    @foreach($produk as $p)
    <tr>
        <td><button class="btn btn-danger btn sm">Hapus</button></td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->harga }}</td>
        <td>0</td>
    </tr>
   @endforeach
</table>
@endsection