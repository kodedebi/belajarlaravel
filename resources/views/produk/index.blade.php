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
    <tr>
        <td><button class="btn btn-danger btn sm">Hapus</button></td>
        <td>Laptop</td>
        <td>5000000</td>
        <td>0</td>
    </tr>
    <tr>
         <td><button class="btn btn-danger btn sm">Hapus</button></td>
        <td>Mouse</td>
        <td>50000</td>
        <td>0</td>
    </tr>

</table>
@endsection